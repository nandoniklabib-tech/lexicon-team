<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamDateTest;

class ExamDateTestController extends Controller
{
    public function index(){
        $data['examdatetests'] = ExamDateTest::latest()->get();
        return view('Backend.Admin.examdatetests.index', $data);
    }
    public function destroy(Request $request, $id){
        $data = ExamDateTest::find($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
