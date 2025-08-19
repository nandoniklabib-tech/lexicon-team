<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\TestWriting;
use Auth;
use Illuminate\Support\Facades\Mail;

class TestWritingController extends Controller
{

    public function writingExamStore(Request $request){
        $data = new TestWriting;
        
        $data->exam = session('mocktest.mock_type');
        $data->name = session('mocktest.name');
        $data->email = session('mocktest.email');

        $data->answer1 = $request->answer1;
        $data->answer2 = $request->answer2;

        $data->save();

        // session()->forget('mocktest');

        // $email = session('mocktest.email');
        // try {
        //     Mail::raw(
        //         "IELTS BAND SCORE:\n\n".
        //         "Name: {$data->name}\n",
        //         function ($message) use ($email) {
        //             $message->to($email)
        //                     ->subject('IELTS BAND SCORE');
        //         }
        //     );
        // } catch (\Exception $e) {
        //     You can log this error or show a warning
        //     Log::error('Mail sending failed: ' . $e->getMessage());
        // }

        return redirect()->to('admin/mocktests')->with('success','Complete The Writing Test.');

    }
    public function freeMockTestWritingStore2(Request $request){
            $data = new TestWriting;
            $data->email = $request->email;
            $data->status = 'Complete';
            $data->save();
            return redirect()->to('free-mock-test-view-3-complete')->with('success','Complte The Writing Test.');
    }
    public function freeMockTestWritingStore(Request $request){
        
        $test_have = Test::where('user_id',Auth::user()->id)->first();
        
        if($test_have){
            $writing = new TestWriting;
            $writing->user_id = Auth::user()->id;
            $writing->test_id = $test_have->id;
            $writing->answer1 = $request->answer1;
            $writing->answer2 = $request->answer2;
            $writing->save();
            return redirect()->to('free-mock-test')->with('success','Complete The Writing Test.');
        }
        else{
            $test = new Test;
            $test->user_id = Auth::user()->id;
            $test->save();
            
            $writing = new TestWriting;
            $writing->user_id = Auth::user()->id;
            $writing->test_id = $test->id;
            $writing->answer1 = $request->answer1;
            $writing->answer2 = $request->answer2;
            $writing->save();
            return redirect()->to('free-mock-test')->with('success','Complete The Writing Test.');
        }
    }
    public function edit($id){
        $data['testwriting'] = TestWriting::find($id);
        return view('Backend.Admin.testwritings.edit',$data);
    }
    public function update(Request $request, $id){
        $data = TestWriting::find($id);
        $data->mark1 = $request->mark1;
        $data->mark2 = $request->mark2;
        $data->update();
        return back()->with('success','Mark Assigned.');
    }
    public function destroy(Request $request, $id){
        $data = TestWriting::find($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
