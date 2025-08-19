<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestWriting;
use App\Models\MockTest;
use App\Models\TestUser;



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

        return redirect()->route('admin.listening.show', $mockTest->id);
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

    //Show Reading Question
    public function showReadingQuestion($mockTestId)
    {
        // Load test with sections → groups → questions
        $mockTest = MockTest::with([
            'sections.questionGroups.questions.options'
        ])->findOrFail($mockTestId);

        return view('Backend.MockTest.TestPage.reading', compact('mockTest'));
    }
























    public function adminMocktestWritingReports(){
        $data['testwritings'] = TestWriting::latest()->get();
        return view('Backend.MockTest.adminMocktestWritingReports', $data);
    }

    public function mocktest1dashboard(){
        return view('Backend.MockTest.1.dashboard');
    }
    public function mocktest1listening(){
        return view('Backend.MockTest.1.listening');
    }
    public function mocktest1reading(){
        return view('Backend.MockTest.1.reading');
    }
    public function mocktest1writing(){
        return view('Backend.MockTest.1.writing');
    }

    public function mocktest2dashboard(){
        return view('Backend.MockTest.2.dashboard');
    }
    public function mocktest2listening(){
        return view('Backend.MockTest.2.listening');
    }
    public function mocktest2reading(){
        return view('Backend.MockTest.2.reading');
    }
    public function mocktest2writing(){
        return view('Backend.MockTest.2.writing');
    }


    public function writingExamStore(Request $request){
        $writing = new TestWriting;
        $writing->exam = $request->exam;
        $writing->name = $request->name;
        $writing->email = $request->email;
        $writing->answer1 = $request->answer1;
        $writing->answer2 = $request->answer2;
        $writing->save();
        return redirect()->to('admin/mocktests')->with('success','Complete The Writing Test.');
    }
    
    public function writing1info(){
        return view('Backend.MockTest.writing.1.info');
    }
    public function writing1store(Request $request){
        session([
            'mocktest.name' => $request->name,
            'mocktest.phone' => $request->phone,
            'mocktest.email' => $request->email,
        ]);
        return redirect()->to('admin/mocktest/writing/1/exam');
    }
    public function writing1exam(){
        return view('Backend.MockTest.writing.1.exam');
    }

    public function writingPdf($id){
        $data['testwriting'] = TestWriting::find($id);
        return view('Backend.MockTest.writing.pdf',$data);
    }
    
    public function writing2info(){
        return view('Backend.MockTest.writing.2.info');
    }
    public function writing2store(Request $request){
        session([
            'mocktest.name' => $request->name,
            'mocktest.phone' => $request->phone,
            'mocktest.email' => $request->email,
        ]);
        return redirect()->to('admin/mocktest/writing/2/exam');
    }
    public function writing2exam(){
        return view('Backend.MockTest.writing.2.exam');
    }

    public function writing3info(){
        return view('Backend.MockTest.writing.3.info');
    }
    public function writing3store(Request $request){
        session([
            'mocktest.name' => $request->name,
            'mocktest.phone' => $request->phone,
            'mocktest.email' => $request->email,
        ]);
        return redirect()->to('admin/mocktest/writing/3/exam');
    }
    public function writing3exam(){
        return view('Backend.MockTest.writing.3.exam');
    }

    public function writing4info(){
        return view('Backend.MockTest.writing.4.info');
    }
    public function writing4store(Request $request){
        session([
            'mocktest.name' => $request->name,
            'mocktest.phone' => $request->phone,
            'mocktest.email' => $request->email,
        ]);
        return redirect()->to('admin/mocktest/writing/4/exam');
    }
    public function writing4exam(){
        return view('Backend.MockTest.writing.4.exam');
    }

    public function writing5info(){
        return view('Backend.MockTest.writing.5.info');
    }
    public function writing5store(Request $request){
        session([
            'mocktest.name' => $request->name,
            'mocktest.phone' => $request->phone,
            'mocktest.email' => $request->email,
        ]);
        return redirect()->to('admin/mocktest/writing/5/exam');
    }
    public function writing5exam(){
        return view('Backend.MockTest.writing.5.exam');
    }

    public function writing6info(){
        return view('Backend.MockTest.writing.6.info');
    }
    public function writing6store(Request $request){
        session([
            'mocktest.name' => $request->name,
            'mocktest.phone' => $request->phone,
            'mocktest.email' => $request->email,
        ]);
        return redirect()->to('admin/mocktest/writing/6/exam');
    }
    public function writing6exam(){
        return view('Backend.MockTest.writing.6.exam');
    }

}
