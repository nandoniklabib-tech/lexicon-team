<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestWriting;
use App\Models\MockTest;
use App\Models\TestUser;
use App\Models\Question;
use App\Models\QuestionGroup;
use App\Models\UserAnswer;
use App\Models\UserScore;
use App\Models\UserWritingAnswer;




class AdminMocktestController extends Controller
{
    //Show All Mock Test
    public function mocktests()
    {
        $mockTests = MockTest::all();
        return view('Backend.MockTest.mocktests', compact('mockTests'));
    }

    //Register User for MockTest
    public function userInfoShow(MockTest $mockTest)
    {
        return view('Backend.MockTest.user', compact('mockTest'));
    }

    //Save User data for Mock Test
    public function userInfoSave(Request $request, MockTest $mockTest)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $testUser = TestUser::create([
            'mock_test_id' => $mockTest->id,
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
        ]);
        session(['test_user_id' => $testUser->id]);
        session(['test_user_email' => $testUser->email]);
        session(['test_listening' => null]);
        session(['test_reading' => null]);
        session(['test_writing' => null]);

        return redirect()->route('admin.test.deshboard', $mockTest->id);
    }

    public function identifyMocktest(MockTest $mockTest)
    {
        $testlistening_have = session('test_listening');
        $testreading_have = session('test_reading');
        $testwriting_have = session('test_writing');

        return view('Backend.MockTest.TestPage.mocktestConfirmer', compact(
            'mockTest',
            'testlistening_have',
            'testreading_have',
            'testwriting_have'
        ));
    }


    //Show listening Question
    public function showListeningQuestion($mockTestId)
    {
        // Load test with sections → groups → questions
        $mockTest = MockTest::with([
            'sections.questionGroups.questions.options'
        ])->findOrFail($mockTestId);

        return view('Backend.MockTest.TestPage.listening', compact('mockTest'));
    }

    //Store Listening Answer
    public function storeListeningQuestion(Request $request, MockTest $mockTest)
    {
        $testUserId = session('test_user_id');
        $testUserEmail = session('test_user_email');
        session(['test_listening' => $testUserEmail]);
        session(['test_reading' => null]);
        session(['test_writing' => null]);

        if (!$testUserId) {
            return redirect()->route('admin/mocktests')
                ->withErrors('Session expired. Please start the test again.');
        }

        $submittedAnswers = $request->input('answers', []);

        $questions = Question::whereHas('group.section', function ($q) use ($mockTest) {
            $q->where('mock_test_id', $mockTest->id);
        })
            ->orderBy('question_no')
            ->get();

        foreach ($questions as $question) {
            if ($question->type == 'static' || is_null($question->question_no)) {
                continue;
            }

            $answer = $submittedAnswers[$question->id] ?? null;

            // Delete previous answers for this user & question
            UserAnswer::where('test_user_id', $testUserId)
                ->where('mock_test_id', $mockTest->id)
                ->where('question_id', $question->id)
                ->delete();

            if (is_array($answer)) {
                // Checkbox / multiselect
                foreach ($answer as $item) {
                    UserAnswer::create([
                        'test_user_id' => $testUserId,
                        'mock_test_id' => $mockTest->id,
                        'section_id' => $question->group->section_id,
                        'question_id' => $question->id,
                        'question_no' => $question->question_no,

                        // Either option_id OR answer_text
                        'option_id' => $question->options->contains('id', $item) ? $item : null,
                        'answer_text' => $question->options->contains('id', $item) ? null : $item,
                    ]);
                }
            } elseif (!empty($answer)) {
                // Single answer (MCQ, select, fill blank, etc.)
                UserAnswer::create([
                    'test_user_id' => $testUserId,
                    'mock_test_id' => $mockTest->id,
                    'section_id' => $question->group->section_id,
                    'question_id' => $question->id,
                    'question_no' => $question->question_no,

                    // Either option_id OR answer_text
                    'option_id' => $question->options->contains('id', $answer) ? $answer : null,
                    'answer_text' => $question->options->contains('id', $answer) ? null : $answer,
                ]);
            }
        }

        return redirect()->route('admin.test.deshboard', $mockTest->id)
            ->with('success', 'Answers saved successfully.');
    }

    //Show Listening Result
    public function showListeningResult($mockTestId)
    {
        $testUserId = session('test_user_id');
        if (!$testUserId) {
            return redirect()->route('admin/mocktests')
                ->withErrors('Session expired. Please start the test again.');
        }

        $userAnswers = UserAnswer::with(['question', 'option'])
            ->where('test_user_id', $testUserId)
            ->where('mock_test_id', $mockTestId)
            ->get();

        $results = [];
        $totalScore = 0;
        $totalQuestions = 0;

        foreach ($userAnswers->groupBy('question_id') as $questionId => $answersGroup) {
            $question = $answersGroup->first()->question;

            if (!$question || is_null($question->question_no)) {
                continue;
            }

            // Correct answers
            $correctOptions = $question->answers()->whereNotNull('option_id')->pluck('option_id')->toArray();
            $correctTexts = $question->answers()->whereNotNull('answer_text')->pluck('answer_text')->toArray();

            // User answers
            $userOptionIds = $answersGroup->pluck('option_id')->filter()->toArray();
            $userTexts = $answersGroup->pluck('answer_text')->filter()->toArray();

            $questionScore = 0;

            // === Option-based (MCQ, checkbox, multiselect) ===
            if (!empty($correctOptions)) {
                foreach ($userOptionIds as $optionId) {
                    if (in_array($optionId, $correctOptions)) {
                        $questionScore++; // +1 for each correct option
                    }
                }
                $totalQuestions += count($correctOptions);
            }

            // === Text-based (Fill in the blank, short answer) ===
            if (!empty($correctTexts)) {
                foreach ($userTexts as $userText) {
                    if (in_array(trim(strtolower($userText)), array_map('strtolower', $correctTexts))) {
                        $questionScore++; // +1 for each correct text match
                    }
                }
                $totalQuestions += count($correctTexts);
            }

            $totalScore += $questionScore;

            // Prepare display values
            $userAnswerDisplay = !empty($userTexts)
                ? implode(', ', $userTexts)
                : implode(', ', $answersGroup->pluck('option.text')->filter()->toArray());

            $correctAnswerDisplay = !empty($correctTexts)
                ? implode(', ', $correctTexts)
                : implode(', ', $question->answers()->with('option')->get()->pluck('option.text')->filter()->toArray());

            $results[] = [
                'question_no' => $question->question_no,
                'question' => $question->text ?? '',
                'user_answer' => $userAnswerDisplay ?: '-',
                'correct_answer' => $correctAnswerDisplay ?: '-',
                'score' => $questionScore,
            ];

        }
        $sectionId = $userAnswers->first()->section_id;

        UserScore::updateOrCreate(
            [
                'test_user_id' => $testUserId,
                'section_id' => $sectionId,
            ],
            [
                'result' => $totalScore,
            ]
        );

        return view('Backend.MockTest.TestPage.showResult', compact('results', 'totalScore', 'totalQuestions'));
    }

    //Show Reading Question
    public function showReadingQuestion($mockTestId)
    {
        $mockTest = MockTest::with([
            'sections.questionGroups.questions.options'
        ])->findOrFail($mockTestId);

        return view('Backend.MockTest.TestPage.reading', compact('mockTest'));
    }

    //Store reading Answer
    public function storeReadingQuestion(Request $request, MockTest $mockTest)
    {
        $testUserId = session('test_user_id');
        $testUserEmail = session('test_user_email');
        session(['test_listening' => $testUserEmail]);
        session(['test_reading' => $testUserEmail]);
        session(['test_writing' => null]);

        if (!$testUserId) {
            return redirect()->route('admin.mocktests')
                ->withErrors('Session expired. Please start the test again.');
        }

        $submittedAnswers = $request->input('answers', []);

        // Get all questions for this mock test's reading section
        $questions = Question::whereHas('group.section', function ($q) use ($mockTest) {
            $q->where('mock_test_id', $mockTest->id);
        })
            ->orderBy('question_no')
            ->get();

        foreach ($questions as $question) {

            // Skip static questions or questions without a number
            if ($question->type == 'static' || is_null($question->question_no)) {
                continue;
            }

            $answer = $submittedAnswers[$question->id] ?? null;

            // Delete previous answers for this user & question
            UserAnswer::where('test_user_id', $testUserId)
                ->where('mock_test_id', $mockTest->id)
                ->where('question_id', $question->id)
                ->delete();

            if (is_array($answer)) {
                // Checkbox / multi-select answers
                foreach ($answer as $item) {
                    UserAnswer::create([
                        'test_user_id' => $testUserId,
                        'mock_test_id' => $mockTest->id,
                        'section_id' => $question->group->section_id,
                        'question_id' => $question->id,
                        'question_no' => $question->question_no,
                        'option_id' => $question->options->contains('id', $item) ? $item : null,
                        'answer_text' => $question->options->contains('id', $item) ? null : $item,
                    ]);
                }
            } elseif (!empty($answer)) {
                // Single answer (MCQ, select, fill in the blank, or text)
                UserAnswer::create([
                    'test_user_id' => $testUserId,
                    'mock_test_id' => $mockTest->id,
                    'section_id' => $question->group->section_id,
                    'question_id' => $question->id,
                    'question_no' => $question->question_no,
                    'option_id' => $question->options->contains('id', $answer) ? $answer : null,
                    'answer_text' => $question->options->contains('id', $answer) ? null : $answer,
                ]);
            }
        }

        return redirect()->route('admin.test.deshboard', $mockTest->id)
            ->with('success', 'Answers saved successfully.');
    }

    //Show reading result
    public function showReadingResult($mockTestId)
    {
        $testUserId = session('test_user_id');
        if (!$testUserId) {
            return redirect()->route('admin.mocktests')
                ->withErrors('Session expired. Please start the test again.');
        }

        $userAnswers = UserAnswer::with(['question', 'option'])
            ->where('test_user_id', $testUserId)
            ->where('mock_test_id', $mockTestId)
            ->get();

        $results = [];
        $totalScore = 0;
        $totalQuestions = 0;

        foreach ($userAnswers->groupBy('question_id') as $questionId => $answersGroup) {
            $question = $answersGroup->first()->question;

            if (!$question || is_null($question->question_no)) {
                continue;
            }

            // Correct answers
            $correctOptions = $question->answers()->whereNotNull('option_id')->pluck('option_id')->toArray();
            $correctTexts = $question->answers()->whereNotNull('answer_text')->pluck('answer_text')->toArray();

            // User answers
            $userOptionIds = $answersGroup->pluck('option_id')->filter()->toArray();
            $userTexts = $answersGroup->pluck('answer_text')->filter()->toArray();

            $questionScore = 0;

            // === Option-based (MCQ, checkbox, multiselect) ===
            if (!empty($correctOptions)) {
                foreach ($userOptionIds as $optionId) {
                    if (in_array($optionId, $correctOptions)) {
                        $questionScore++; // +1 for each correct option
                    }
                }
                $totalQuestions += count($correctOptions);
            }

            // === Text-based (Fill in the blank, short answer) ===
            if (!empty($correctTexts)) {
                foreach ($userTexts as $userText) {
                    if (in_array(trim(strtolower($userText)), array_map('strtolower', $correctTexts))) {
                        $questionScore++; // +1 for each correct text match
                    }
                }
                $totalQuestions += count($correctTexts);
            }

            $totalScore += $questionScore;

            // Prepare display values
            $userAnswerDisplay = !empty($userTexts)
                ? implode(', ', $userTexts)
                : implode(', ', $answersGroup->pluck('option.text')->filter()->toArray());

            $correctAnswerDisplay = !empty($correctTexts)
                ? implode(', ', $correctTexts)
                : implode(', ', $question->answers()->with('option')->get()->pluck('option.text')->filter()->toArray());

            $results[] = [
                'question_no' => $question->question_no,
                'question' => $question->text ?? '',
                'user_answer' => $userAnswerDisplay ?: '-',
                'correct_answer' => $correctAnswerDisplay ?: '-',
                'score' => $questionScore,
            ];
        }
        $sectionId = $userAnswers->first()->section_id;

        UserScore::updateOrCreate(
            [
                'test_user_id' => $testUserId,
                'section_id' => $sectionId,
            ],
            [
                'result' => $totalScore,
            ]
        );

        return view('Backend.MockTest.TestPage.showreadingResult', compact('results', 'totalScore', 'totalQuestions'));
    }



    //Show Writing Question
    public function showWritingQuestion($mockTestId)
    {
        $mockTest = MockTest::with('sections.questionGroups')->findOrFail($mockTestId);
        $writingSection = $mockTest->sections->firstWhere('name', 'writing');

        return view('Backend.MockTest.TestPage.writing', compact('mockTest', 'writingSection'));
    }

    //Store Writing Answer
    public function storeWritingAnswers(Request $request, $mockTestId)
    {
        $testUserId = session('test_user_id');

        if (!$testUserId) {
            return redirect()->route('admin.mocktests')
                ->withErrors('Session expired. Please start the test again.');
        }

        $answers = $request->input('answers', []);

        foreach ($answers as $groupId => $answerText) {
            if (empty(trim($answerText))) {
                continue; // Skip empty submissions
            }

            $questionGroup = QuestionGroup::find($groupId);
            if (!$questionGroup) {
                continue; // Skip invalid question groups
            }

            // Save or update the answer
            UserWritingAnswer::updateOrCreate(
                [
                    'test_user_id' => $testUserId,
                    'question_group_id' => $groupId,
                ],
                [
                    'section_id' => $questionGroup->section_id,
                    'answer_text' => $answerText, // preserves line breaks
                ]
            );
        }

        return redirect()->route('admin.result.show', $mockTestId)
            ->with('success', 'Writing answers saved successfully.');
    }



    public function showResult($mockTestId)
    {
        $testUserId = session('test_user_id');

        if (!$testUserId) {
            return redirect()->route('admin.mocktests')
                ->withErrors('Session expired. Please start the test again.');
        }

        $user = TestUser::find($testUserId);

        // Fetch scores for all sections of this mock test
        $scores = UserScore::with('section')
            ->where('test_user_id', $testUserId)
            ->whereIn('section_id', function ($query) use ($mockTestId) {
                $query->select('id')
                    ->from('sections')
                    ->where('mock_test_id', $mockTestId);
            })
            ->get();

        //dd($user, $scores);

        return view('Backend.MockTest.TestPage.result', compact(
            'user',
            'scores',
            'mockTestId'
        ));
    }
}