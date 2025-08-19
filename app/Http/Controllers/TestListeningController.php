<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\TestListening;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Partner;
use Auth;
use Illuminate\Support\Facades\Mail;

class TestListeningController extends Controller
{
    
    public function listeningInfoStore(Request $request){
        session([
            'mocktest.mock_type' => $request->mock_type,
            'mocktest.name' => $request->name,
            'mocktest.phone' => $request->phone,
            'mocktest.email' => $request->email,
        ]);
        if(session('mocktest.mock_type')=="Admin1"){
            return redirect()->to('admin-mocktest-listening-1-exam');
        }
        elseif($request->mock_type=="Admin2"){
            return redirect()->to('admin-mocktest-listening-2-exam');
        }
        elseif($request->mock_type=="Admin3"){
            return redirect()->to('admin-mocktest-listening-3-exam');
        }
        else{
            echo "No";
        }
    }
    public function listeningExamStore(Request $request){

        if(session('mocktest.mock_type')=="Admin1"){
            $correctAnswers = [
                'answer1' => 'Keiko',
                'answer2' => 'JO6337',
                'answer3' => 'Advanced English studies',
                'answer4' => '5 months',
                'answer5' => 'About 4 months',
                'answer6' => 'B',
                'answer7' => 'Seafood',
                'answer8' => 'Tennis',
                'answer9' => 'Take the train',
                'answer10' => 'This afternoon',

                'answer11' => '90 days',
                'answer12' => '30 pounds',
                'answer13' => 'Confirm your nationality',
                'answer14' => 'Page 13',
                'answer15' => 'Currency form',
                'answer16' => 'Tourist export form',
                'answer17' => 'BM276',
                'answer18' => 'International student card',
                'answer19' => '12',
                'answer20' => 'Australian dollar',

                'answer21' => 'Cashier',
                'answer22' => '£50',
                'answer23' => 'Big department stores',
                'answer24' => 'Jeans',
                'answer25' => '45 pounds',
                'answer26' => '75 pounds',
                'answer27' => '20 pounds',
                'answer28' => 'D',
                'answer29' => 'E',
                'answer30' => 'F',

                'answer31' => 'B',
                'answer32' => 'B',
                'answer33' => 'A',
                'answer34' => 'C',
                'answer35' => 'D',
                'answer36' => 'C',
                'answer37' => 'D',
                'answer38' => 'A',
                'answer39' => 'A',
                'answer40' => 'A',
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
                'answer1' => 'Waddell',
                'answer2' => 'Robyn Place',
                'answer3' => '263 8666',
                'answer4' => 'Visa',
                'answer5' => '10',
                'answer6' => '$35',
                'answer7' => 'Unlimited kilometres',
                'answer8' => 'Relatives',
                'answer9' => '(An) automatic',
                'answer10' => 'Driving license',

                'answer11' => '681',
                'answer12' => 'Tunnels',
                'answer13' => '5',
                'answer14' => 'X',
                'answer15' => 'Whale watching',
                'answer16' => 'Indian Pacific',
                'answer17' => 'Earlier/early settlers',
                'answer18' => '1 Millionth',
                'answer19' => 'States',
                'answer20' => 'The continent',

                'answer21' => 'B',
                'answer22' => 'B',
                'answer23' => 'C',
                'answer24' => 'A',
                'answer25' => 'A',
                'answer26' => '40 litres (or liters)',
                'answer27' => 'Solar coil',
                'answer28' => '20',
                'answer29' => '65',
                'answer30' => 'Rigid foam',

                'answer31' => 'Services marketing',
                'answer32' => 'Legal advice',
                'answer33' => 'Weakness',
                'answer34' => 'Customer numbers',
                'answer35' => 'Tangible',
                'answer36' => 'Expectations',
                'answer37' => 'Clients',
                'answer38' => 'Constantly improve',
                'answer39' => '(Conduct) surveys',
                'answer40' => 'A representative',
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

        $data = new TestListening;

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
                "Listening:\n\n".
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
            return redirect()->to('admin-mocktest-reading-1-exam')->with('success','Complete The Listening Test.');
        }
        elseif(session('mocktest.mock_type')=="Admin2"){
            return redirect()->to('admin-mocktest-reading-2-exam')->with('success','Complete The Listening Test.');
        }
        elseif(session('mocktest.mock_type')=="Admin3"){
            return redirect()->to('admin-mocktest-reading-3-exam')->with('success','Complete The Listening Test.');
        }
        else{
            echo "No";
        }

    }

    public function freeMockTestListeningStore(Request $request){
        
        $test_have = Test::where('user_id',Auth::user()->id)->first();
        
        if($test_have){
            $data = new TestListening;
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
            return redirect()->to('free-mock-test')->with('success','Complte The Writing Test.');
        }
        else{
            $test = new Test;
            $test->user_id = Auth::user()->id;
            $test->save();
            
            $data = new TestListening;
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
            return redirect()->to('free-mock-test')->with('success','Complte The Writing Test.');
        }
        

    }
    public function freeMockTestListeningStore2(Request $request){

        $data = new TestListening;
        $data->email = $request->email;
        $data->status = 'Complete';
        $data->save();

        $correctAnswers = [
            'answer1' => 'He needs to decide what to do with his possessions',
            'answer2' => 'C',
            'answer3' => 'In the economics department',
            'answer4' => 'it’s the summer vacation',
            'answer5' => 'may not pay well',
            'answer6' => 'advertise',
            'answer7' => 'donate',
            'answer8' => 'quote',
            'answer9' => 'charity',
            'answer10' => 'Sell',

            'answer11' => 'corner',
            'answer12' => '6',
            'answer13' => '2',
            'answer14' => 'classes',
            'answer15' => 'swimming/swim',
            'answer16' => 'learn',
            'answer17' => 'program/programme',
            'answer18' => '(music) videos',
            'answer19' => 'free',
            'answer20' => '6',

            'answer21' => 'differences',
            'answer22' => 'Italian',
            'answer23' => 'Mexican',
            'answer24' => 'ingredients',
            'answer25' => 'Australia',
            'answer26' => 'restaurants',
            'answer27' => 'fat',
            'answer28' => 'cooking',
            'answer29' => '40%,40 percent',
            'answer30' => 'healthy',

            'answer31' => '10 or more',
            'answer32' => 'lack of practice',
            'answer33' => 'preparation',
            'answer34' => 'topic',
            'answer35' => 'eye contact',
            'answer36' => 'slowly',
            'answer37' => 'record yourself',
            'answer38' => 'meaning',
            'answer39' => 'posture',
            'answer40' => 'distract',
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

        return view('Frontend.pages.freeMockTest.freeMockTestView1Complete', $data, compact('score'));

        // return redirect()->to('free-mock-test-view-1-complete')->with('success','Complte The Listening Test.');
        
        // dd($request->all());

            // $data = new TestListening;
            // $data->email = $request->email;
            // $data->status = 'Complete';
            // $data->answer1 = $request->answer1;
            // $data->answer2 = $request->answer2;
            // $data->answer3 = $request->answer3;
            // $data->answer4 = $request->answer4;
            // $data->answer5 = $request->answer5;
            // $data->answer6 = $request->answer6;
            // $data->answer7 = $request->answer7;
            // $data->answer8 = $request->answer8;
            // $data->answer9 = $request->answer9;
            // $data->answer10 = $request->answer10;
            // $data->answer11 = $request->answer11;
            // $data->answer12 = $request->answer12;
            // $data->answer13 = $request->answer13;
            // $data->answer14 = $request->answer14;
            // $data->answer15 = $request->answer15;
            // $data->answer16 = $request->answer16;
            // $data->answer17 = $request->answer17;
            // $data->answer18 = $request->answer18;
            // $data->answer19 = $request->answer19;
            // $data->answer20 = $request->answer20;
            // $data->answer21 = $request->answer21;
            // $data->answer22 = $request->answer22;
            // $data->answer23 = $request->answer23;
            // $data->answer24 = $request->answer24;
            // $data->answer25 = $request->answer25;
            // $data->answer26 = $request->answer26;
            // $data->answer27 = $request->answer27;
            // $data->answer28 = $request->answer28;
            // $data->answer29 = $request->answer29;
            // $data->answer30 = $request->answer30;
            // $data->answer31 = $request->answer31;
            // $data->answer32 = $request->answer32;
            // $data->answer33 = $request->answer33;
            // $data->answer34 = $request->answer34;
            // $data->answer35 = $request->answer35;
            // $data->answer36 = $request->answer36;
            // $data->answer37 = $request->answer37;
            // $data->answer38 = $request->answer38;
            // $data->answer39 = $request->answer39;
            // $data->answer40 = $request->answer40;
            // $data->save();
            // return redirect()->to('free-mock-test-view-1-complete')->with('success','Complte The Listening Test.');

    }
    // public function freeMockTestListeningStore2(Request $request){
        
    //     $test_have = Test::where('email',$request->email)->first();
        
    //     if($test_have){
    //         $data = new TestListening;
    //         $data->email = $request->email;
    //         $data->status = 'Complete';
    //         $data->test_id = $test_have->id;
    //         $data->answer1 = $request->answer1;
    //         $data->answer2 = $request->answer2;
    //         $data->answer3 = $request->answer3;
    //         $data->answer4 = $request->answer4;
    //         $data->answer5 = $request->answer5;
    //         $data->answer6 = $request->answer6;
    //         $data->answer7 = $request->answer7;
    //         $data->answer8 = $request->answer8;
    //         $data->answer9 = $request->answer9;
    //         $data->answer10 = $request->answer10;
    //         $data->answer11 = $request->answer11;
    //         $data->answer12 = $request->answer12;
    //         $data->answer13 = $request->answer13;
    //         $data->answer14 = $request->answer14;
    //         $data->answer15 = $request->answer15;
    //         $data->answer16 = $request->answer16;
    //         $data->answer17 = $request->answer17;
    //         $data->answer18 = $request->answer18;
    //         $data->answer19 = $request->answer19;
    //         $data->answer20 = $request->answer20;
    //         $data->answer21 = $request->answer21;
    //         $data->answer22 = $request->answer22;
    //         $data->answer23 = $request->answer23;
    //         $data->answer24 = $request->answer24;
    //         $data->answer25 = $request->answer25;
    //         $data->answer26 = $request->answer26;
    //         $data->answer27 = $request->answer27;
    //         $data->answer28 = $request->answer28;
    //         $data->answer29 = $request->answer29;
    //         $data->answer30 = $request->answer30;
    //         $data->answer31 = $request->answer31;
    //         $data->answer32 = $request->answer32;
    //         $data->answer33 = $request->answer33;
    //         $data->answer34 = $request->answer34;
    //         $data->answer35 = $request->answer35;
    //         $data->answer36 = $request->answer36;
    //         $data->answer37 = $request->answer37;
    //         $data->answer38 = $request->answer38;
    //         $data->answer39 = $request->answer39;
    //         $data->answer40 = $request->answer40;
    //         $data->save();
    //         return redirect()->to('free-mock-test-view-1-complete')->with('success','Complte The Writing Test.');
    //     }
    //     else{
    //         $test = new Test;
    //         $test->email = $request->email;
    //         $test->save();
            
    //         $data = new TestListening;
    //         $data->email = $request->email;
    //         $data->status = 'Complete';
    //         $data->test_id = $test->id;
    //         $data->answer1 = $request->answer1;
    //         $data->answer2 = $request->answer2;
    //         $data->answer3 = $request->answer3;
    //         $data->answer4 = $request->answer4;
    //         $data->answer5 = $request->answer5;
    //         $data->answer6 = $request->answer6;
    //         $data->answer7 = $request->answer7;
    //         $data->answer8 = $request->answer8;
    //         $data->answer9 = $request->answer9;
    //         $data->answer10 = $request->answer10;
    //         $data->answer11 = $request->answer11;
    //         $data->answer12 = $request->answer12;
    //         $data->answer13 = $request->answer13;
    //         $data->answer14 = $request->answer14;
    //         $data->answer15 = $request->answer15;
    //         $data->answer16 = $request->answer16;
    //         $data->answer17 = $request->answer17;
    //         $data->answer18 = $request->answer18;
    //         $data->answer19 = $request->answer19;
    //         $data->answer20 = $request->answer20;
    //         $data->answer21 = $request->answer21;
    //         $data->answer22 = $request->answer22;
    //         $data->answer23 = $request->answer23;
    //         $data->answer24 = $request->answer24;
    //         $data->answer25 = $request->answer25;
    //         $data->answer26 = $request->answer26;
    //         $data->answer27 = $request->answer27;
    //         $data->answer28 = $request->answer28;
    //         $data->answer29 = $request->answer29;
    //         $data->answer30 = $request->answer30;
    //         $data->answer31 = $request->answer31;
    //         $data->answer32 = $request->answer32;
    //         $data->answer33 = $request->answer33;
    //         $data->answer34 = $request->answer34;
    //         $data->answer35 = $request->answer35;
    //         $data->answer36 = $request->answer36;
    //         $data->answer37 = $request->answer37;
    //         $data->answer38 = $request->answer38;
    //         $data->answer39 = $request->answer39;
    //         $data->answer40 = $request->answer40;
    //         $data->save();
    //         return redirect()->to('free-mock-test-view-1-complete')->with('success','Complte The Writing Test.');
    //     }
        

    // }
    public function edit($id){
        $data['testlistening'] = TestListening::find($id);
        return view('Backend.Admin.testlistenings.edit',$data);
    }
    public function update(Request $request, $id){
        $data = TestListening::find($id);
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
