<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\TestReading;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Partner;
use Auth;
use Illuminate\Support\Facades\Mail;

class TestReadingController extends Controller
{
    public function readingExamStore(Request $request){

        if(session('mocktest.mock_type')=="Admin1"){
            $correctAnswers = [
                'answer1' => 'D',
                'answer2' => 'C',
                'answer3' => 'E',
                'answer4' => 'A',
                'answer5' => 'biggest',
                'answer6' => 'an agent/a registered agent',
                'answer7' => 'Tea',
                'answer8' => 'long dominated',
                'answer9' => 'NOT GIVEN',
                'answer10' => 'TRUE',

                'answer11' => 'FALSE',
                'answer12' => 'FALSE',
                'answer13' => 'FALSE',
                'answer14' => 'B',
                'answer15' => 'G',
                'answer16' => 'F',
                'answer17' => 'E',
                'answer18' => 'A',
                'answer19' => '12',
                'answer20' => 'Australian dollar',

                'answer21' => 'Cashier',
                'answer22' => '£50',
                'answer23' => 'D',
                'answer24' => 'E',
                'answer25' => 'D',
                'answer26' => 'B',
                'answer27' => 'C',
                'answer28' => 'B',
                'answer29' => 'A',
                'answer30' => 'C',

                'answer31' => 'cell phones',
                'answer32' => 'useful light',
                'answer33' => 'remote',
                'answer34' => '(heavy) import duties',
                'answer35' => 'dust',
                'answer36' => 'TRUE',
                'answer37' => 'NOT GIVEN',
                'answer38' => 'FALSE',
                'answer39' => 'TRUE',
                'answer40' => 'TRUE',
            ];

            $correctCount = 0;
            $wrongCount = 0;
            $noAnswerCount = 0;
            $score = 0;

            foreach ($correctAnswers as $key => $correctValue) {
                $userAnswer = $request->$key;

                if (is_null($userAnswer) || $userAnswer === '') {
                    $noAnswerCount++;
                } elseif (strcasecmp(trim($userAnswer), $correctValue) === 0) {
                    $correctCount++;
                } else {
                    $wrongCount++;
                }
            }

            $totalMark = $correctCount;

            // echo "<h1>Your mark is: $totalMark out of 40</h1>";
            // echo "<h1>Correct: $correctCount</h1>";
            // echo "<h1>Wrong: $wrongCount</h1>";
            // echo "<h1>No answer: $noAnswerCount</h1>";

            $data['totalMark'] = $totalMark;
            $data['correctCount'] = $correctCount;
            $data['wrongCount'] = $wrongCount;
            $data['noAnswerCount'] = $noAnswerCount;
            
            $data['setting'] = Setting::latest()->first();
            $data['categories'] = Category::get();
            $data['partners'] = Partner::latest()->get();

            if ($totalMark >= 39 && $totalMark <= 40) {
                $score = 9;
            } elseif ($totalMark >= 37 && $totalMark <= 38) {
                $score = 8.5;
            } elseif ($totalMark >= 35 && $totalMark <= 36) {
                $score = 8;
            } elseif ($totalMark >= 32 && $totalMark <= 34) {
                $score = 7.5;
            } elseif ($totalMark >= 30 && $totalMark <= 31) {
                $score = 7;
            } elseif ($totalMark >= 26 && $totalMark <= 29) {
                $score = 6.5;
            } elseif ($totalMark >= 23 && $totalMark <= 25) {
                $score = 6;
            } elseif ($totalMark >= 18 && $totalMark <= 22) {
                $score = 5.5;
            } elseif ($totalMark >= 16 && $totalMark <= 17) {
                $score = 5;
            } elseif ($totalMark >= 13 && $totalMark <= 15) {
                $score = 4.5;
            } elseif ($totalMark >= 10 && $totalMark <= 12) {
                $score = 4;
            } else {
                $score = 'F';
            }

        }
        if(session('mocktest.mock_type')=="Admin2"){
            $correctAnswers = [
                'answer1' => 'E',
                'answer2' => 'B',
                'answer3' => 'D',
                'answer4' => 'A',
                'answer5' => 'middle-class (consumer)',
                'answer6' => 'national statistics',
                'answer7' => 'household debt',
                'answer8' => 'national pension system',
                'answer9' => 'TRUE',
                'answer10' => 'FALSE',

                'answer11' => 'NOT GIVEN',
                'answer12' => 'TRUE',
                'answer13' => 'NOT GIVEN',
                'answer14' => 'B',
                'answer15' => 'H',
                'answer16' => 'C',
                'answer17' => 'A',
                'answer18' => 'A',
                'answer19' => 'B',
                'answer20' => 'The continent',

                'answer21' => 'B',
                'answer22' => 'B',
                'answer23' => 'B',
                'answer24' => 'A',
                'answer25' => 'A',
                'answer26' => '40 litres (or liters)',
                'answer27' => 'A',
                'answer28' => 'C',
                'answer29' => 'C',
                'answer30' => 'C',

                'answer31' => 'illuminated arrows',
                'answer32' => 'e-paper display',
                'answer33' => 'rows of pixels',
                'answer34' => 'entertain',
                'answer35' => 'five years ago',
                'answer36' => 'TRUE',
                'answer37' => 'NOT GIVEN',
                'answer38' => 'TRUE',
                'answer39' => 'NOT GIVEN',
                'answer40' => 'NOT GIVEN',
            ];

            $correctCount = 0;
            $wrongCount = 0;
            $noAnswerCount = 0;
            $score = 0;

            foreach ($correctAnswers as $key => $correctValue) {
                $userAnswer = $request->$key;

                if (is_null($userAnswer) || $userAnswer === '') {
                    $noAnswerCount++;
                } elseif (strcasecmp(trim($userAnswer), $correctValue) === 0) {
                    $correctCount++;
                } else {
                    $wrongCount++;
                }
            }

            $totalMark = $correctCount;

            // echo "<h1>Your mark is: $totalMark out of 40</h1>";
            // echo "<h1>Correct: $correctCount</h1>";
            // echo "<h1>Wrong: $wrongCount</h1>";
            // echo "<h1>No answer: $noAnswerCount</h1>";

            $data['totalMark'] = $totalMark;
            $data['correctCount'] = $correctCount;
            $data['wrongCount'] = $wrongCount;
            $data['noAnswerCount'] = $noAnswerCount;
            
            $data['setting'] = Setting::latest()->first();
            $data['categories'] = Category::get();
            $data['partners'] = Partner::latest()->get();

            if ($totalMark >= 39 && $totalMark <= 40) {
                $score = 9;
            } elseif ($totalMark >= 37 && $totalMark <= 38) {
                $score = 8.5;
            } elseif ($totalMark >= 35 && $totalMark <= 36) {
                $score = 8;
            } elseif ($totalMark >= 32 && $totalMark <= 34) {
                $score = 7.5;
            } elseif ($totalMark >= 30 && $totalMark <= 31) {
                $score = 7;
            } elseif ($totalMark >= 26 && $totalMark <= 29) {
                $score = 6.5;
            } elseif ($totalMark >= 23 && $totalMark <= 25) {
                $score = 6;
            } elseif ($totalMark >= 18 && $totalMark <= 22) {
                $score = 5.5;
            } elseif ($totalMark >= 16 && $totalMark <= 17) {
                $score = 5;
            } elseif ($totalMark >= 13 && $totalMark <= 15) {
                $score = 4.5;
            } elseif ($totalMark >= 10 && $totalMark <= 12) {
                $score = 4;
            } else {
                $score = 'F';
            }

        }

        $data = new TestReading;

        $data->exam = session('mocktest.mock_type');
        $data->name = session('mocktest.name');
        $data->email = session('mocktest.email');
        $data->score = $score;
        $data->correct = $correctCount;

        $data->answer1 = $request->answer1;
        $data->answer2 = $request->answer2;
        $data->answer3 = $request->answer3;
        $data->answer4 = $request->answer4;
        $data->answer5 = $request->answer5;
        $data->answer6 = $request->answer6;
        $data->answer7 = $request->answer7;
        $data->answer8 = $request->answer8;
        $data->answer9 = $request->answer9;
        $data->answer10 = $request->answer10;
        $data->answer11 = $request->answer11;
        $data->answer12 = $request->answer12;
        $data->answer13 = $request->answer13;
        $data->answer14 = $request->answer14;
        $data->answer15 = $request->answer15;
        $data->answer16 = $request->answer16;
        $data->answer17 = $request->answer17;
        $data->answer18 = $request->answer18;
        $data->answer19 = $request->answer19;
        $data->answer20 = $request->answer20;
        $data->answer21 = $request->answer21;
        $data->answer22 = $request->answer22;
        $data->answer23 = $request->answer23;
        $data->answer24 = $request->answer24;
        $data->answer25 = $request->answer25;
        $data->answer26 = $request->answer26;
        $data->answer27 = $request->answer27;
        $data->answer28 = $request->answer28;
        $data->answer29 = $request->answer29;
        $data->answer30 = $request->answer30;
        $data->answer31 = $request->answer31;
        $data->answer32 = $request->answer32;
        $data->answer33 = $request->answer33;
        $data->answer34 = $request->answer34;
        $data->answer35 = $request->answer35;
        $data->answer36 = $request->answer36;
        $data->answer37 = $request->answer37;
        $data->answer38 = $request->answer38;
        $data->answer39 = $request->answer39;
        $data->answer40 = $request->answer40;

        $data->save();
        
        $email = session('mocktest.email');
        try {
            Mail::raw(
                "Reading:\n\n".
                "Correct: {$correctCount}\n".
                "Score: {$score}\n",
                function ($message) use ($email) {
                    $message->to($email)
                            ->subject('IELTS BAND SCORE');
                }
            );
        } catch (\Exception $e) {
            // You can log this error or show a warning
            // Log::error('Mail sending failed: ' . $e->getMessage());
        }

        if(session('mocktest.mock_type')=="Admin1"){
            return redirect()->to('admin-mocktest-writing-1-exam')->with('success','Complete The Reading Test.');
        }
        elseif(session('mocktest.mock_type')=="Admin2"){
            return redirect()->to('admin-mocktest-writing-2-exam')->with('success','Complete The Reading Test.');
        }
        elseif(session('mocktest.mock_type')=="Admin3"){
            return redirect()->to('admin-mocktest-writing-3-exam')->with('success','Complete The Reading Test.');
        }
        else{
            echo "No";
        }
    }
    
    public function freeMockTestReadingStore2(Request $request){
            $data = new TestReading;
            $data->email = $request->email;
            $data->status = 'Complete';
            $data->save();

        $correctAnswers = [
            'answer1' => '18',
            'answer2' => 'biologist',
            'answer3' => 'storm',
            'answer4' => 'It broke apart in the air',
            'answer5' => 'a parachute',
            'answer6' => 'concussion',
            'answer7' => 'Knowledge of the jungle',
            'answer8' => 'sting rays',
            'answer9' => '10 days',
            'answer10' => 'She reached a campsite along the river',
            'answer11' => 'NO',
            'answer12' => 'NO',
            'answer13' => 'YES',
            'answer14' => 'NOT GIVEN',

            'answer15' => 'B',
            'answer16' => 'C',
            'answer17' => 'B',
            'answer18' => 'A',
            'answer19' => 'B',
            'answer20' => 'NOT GIVEN',

            'answer21' => 'YES',
            'answer22' => 'NO',
            'answer23' => 'NOT GIVEN',
            'answer24' => 'NO',
            'answer25' => 'pollution',
            'answer26' => 'stretching',
            'answer27' => '60 per cent',

            'answer28' => 'projection',
            'answer29' => 'axis',
            'answer30' => 'perspective',
            'answer31' => 'compare',
            'answer32' => 'M',
            'answer33' => 'M',
            'answer34' => 'P',
            'answer35' => 'M',
            'answer36' => 'A',
            'answer37' => 'B',
            'answer38' => 'C',
            'answer39' => 'A',
            'answer40' => 'understand that maps are not objective',
        ];

        $correctCount = 0;
        $wrongCount = 0;
        $noAnswerCount = 0;
        $score = 0;

        foreach ($correctAnswers as $key => $correctValue) {
            $userAnswer = $request->$key;

            if (is_null($userAnswer) || $userAnswer === '') {
                $noAnswerCount++;
            } elseif (strcasecmp(trim($userAnswer), $correctValue) === 0) {
                $correctCount++;
            } else {
                $wrongCount++;
            }
        }

        $totalMark = $correctCount;

        $data['totalMark'] = $totalMark;
        $data['correctCount'] = $correctCount;
        $data['wrongCount'] = $wrongCount;
        $data['noAnswerCount'] = $noAnswerCount;
        
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();

        if ($totalMark == 40) {
            $score = 9;
        } elseif ($totalMark == 39) {
            $score = 8.5;
        } elseif ($totalMark >= 37 && $totalMark <= 38) {
            $score = 8;
        } elseif ($totalMark == 36) {
            $score = 7.5;
        } elseif ($totalMark >= 34 && $totalMark <= 35) {
            $score = 7;
        } elseif ($totalMark >= 32 && $totalMark <= 33) {
            $score = 6.5;
        } elseif ($totalMark >= 30 && $totalMark <= 31) {
            $score = 6;
        } elseif ($totalMark >= 27 && $totalMark <= 29) {
            $score = 5.5;
        } elseif ($totalMark >= 23 && $totalMark <= 26) {
            $score = 5;
        } elseif ($totalMark >= 19 && $totalMark <= 22) {
            $score = 4.5;
        } elseif ($totalMark >= 15 && $totalMark <= 18) {
            $score = 4;
        } else {
            $score = 'F';
        }

        return view('Frontend.pages.freeMockTest.freeMockTestView2Complete', $data, compact('score'));

    }
    public function freeMockTestReadingStore(Request $request){
        
        $test_have = Test::where('user_id',Auth::user()->id)->first();
        
        if($test_have){
            $data = new TestReading;
            $data->user_id = Auth::user()->id;
            $data->test_id = $test_have->id;
            $data->answer1 = $request->answer1;
            $data->answer2 = $request->answer2;
            $data->answer3 = $request->answer3;
            $data->answer4 = $request->answer4;
            $data->answer5 = $request->answer5;
            $data->answer6 = $request->answer6;
            $data->answer7 = $request->answer7;
            $data->answer8 = $request->answer8;
            $data->answer9 = $request->answer9;
            $data->answer10 = $request->answer10;
            $data->answer11 = $request->answer11;
            $data->answer12 = $request->answer12;
            $data->answer13 = $request->answer13;
            $data->answer14 = $request->answer14;
            $data->answer15 = $request->answer15;
            $data->answer16 = $request->answer16;
            $data->answer17 = $request->answer17;
            $data->answer18 = $request->answer18;
            $data->answer19 = $request->answer19;
            $data->answer20 = $request->answer20;
            $data->answer21 = $request->answer21;
            $data->answer22 = $request->answer22;
            $data->answer23 = $request->answer23;
            $data->answer24 = $request->answer24;
            $data->answer25 = $request->answer25;
            $data->answer26 = $request->answer26;
            $data->answer27 = $request->answer27;
            $data->answer28 = $request->answer28;
            $data->answer29 = $request->answer29;
            $data->answer30 = $request->answer30;
            $data->answer31 = $request->answer31;
            $data->answer32 = $request->answer32;
            $data->answer33 = $request->answer33;
            $data->answer34 = $request->answer34;
            $data->answer35 = $request->answer35;
            $data->answer36 = $request->answer36;
            $data->answer37 = $request->answer37;
            $data->answer38 = $request->answer38;
            $data->answer39 = $request->answer39;
            $data->answer40 = $request->answer40;
            $data->save();
            return redirect()->to('free-mock-test')->with('success','Complete The Writing Test.');
        }
        else{
            $test = new Test;
            $test->user_id = Auth::user()->id;
            $test->save();
            
            $data = new TestReading;
            $data->user_id = Auth::user()->id;
            $data->test_id = $test->id;
            $data->answer1 = $request->answer1;
            $data->answer2 = $request->answer2;
            $data->answer3 = $request->answer3;
            $data->answer4 = $request->answer4;
            $data->answer5 = $request->answer5;
            $data->answer6 = $request->answer6;
            $data->answer7 = $request->answer7;
            $data->answer8 = $request->answer8;
            $data->answer9 = $request->answer9;
            $data->answer10 = $request->answer10;
            $data->answer11 = $request->answer11;
            $data->answer12 = $request->answer12;
            $data->answer13 = $request->answer13;
            $data->answer14 = $request->answer14;
            $data->answer15 = $request->answer15;
            $data->answer16 = $request->answer16;
            $data->answer17 = $request->answer17;
            $data->answer18 = $request->answer18;
            $data->answer19 = $request->answer19;
            $data->answer20 = $request->answer20;
            $data->answer21 = $request->answer21;
            $data->answer22 = $request->answer22;
            $data->answer23 = $request->answer23;
            $data->answer24 = $request->answer24;
            $data->answer25 = $request->answer25;
            $data->answer26 = $request->answer26;
            $data->answer27 = $request->answer27;
            $data->answer28 = $request->answer28;
            $data->answer29 = $request->answer29;
            $data->answer30 = $request->answer30;
            $data->answer31 = $request->answer31;
            $data->answer32 = $request->answer32;
            $data->answer33 = $request->answer33;
            $data->answer34 = $request->answer34;
            $data->answer35 = $request->answer35;
            $data->answer36 = $request->answer36;
            $data->answer37 = $request->answer37;
            $data->answer38 = $request->answer38;
            $data->answer39 = $request->answer39;
            $data->answer40 = $request->answer40;
            $data->save();
            return redirect()->to('free-mock-test')->with('success','Complete The Writing Test.');
        }
        

    }
    public function edit($id){
        $data['testreading'] = TestReading::find($id);
        return view('Backend.Admin.testreadings.edit',$data);
    }
    public function update(Request $request, $id){
        $data = TestReading::find($id);
        $data->mark1 = $request->mark1;
        $data->mark2 = $request->mark2;
        $data->mark3 = $request->mark3;
        $data->mark4 = $request->mark4;
        $data->mark5 = $request->mark5;
        $data->mark6 = $request->mark6;
        $data->mark7 = $request->mark7;
        $data->mark8 = $request->mark8;
        $data->mark9 = $request->mark9;
        $data->mark10 = $request->mark10;
        $data->mark11 = $request->mark11;
        $data->mark12 = $request->mark12;
        $data->mark13 = $request->mark13;
        $data->mark14 = $request->mark14;
        $data->mark15 = $request->mark15;
        $data->mark16 = $request->mark16;
        $data->mark17 = $request->mark17;
        $data->mark18 = $request->mark18;
        $data->mark19 = $request->mark19;
        $data->mark20 = $request->mark20;
        $data->mark21 = $request->mark21;
        $data->mark22 = $request->mark22;
        $data->mark23 = $request->mark23;
        $data->mark24 = $request->mark24;
        $data->mark25 = $request->mark25;
        $data->mark26 = $request->mark26;
        $data->mark27 = $request->mark27;
        $data->mark28 = $request->mark28;
        $data->mark29 = $request->mark29;
        $data->mark30 = $request->mark30;
        $data->mark31 = $request->mark31;
        $data->mark32 = $request->mark32;
        $data->mark33 = $request->mark33;
        $data->mark34 = $request->mark34;
        $data->mark35 = $request->mark35;
        $data->mark36 = $request->mark36;
        $data->mark37 = $request->mark37;
        $data->mark38 = $request->mark38;
        $data->mark39 = $request->mark39;
        $data->mark40 = $request->mark40;
        $data->update();
        return back()->with('success','Mark Assigned.');
    }
}
