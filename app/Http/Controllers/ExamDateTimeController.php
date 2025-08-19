<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamDate;
use App\Models\ExamDateTime;

class ExamDateTimeController extends Controller
{
    public function index($id){
        $data['examdate'] = ExamDate::find($id);
        $data['examdatetimes'] = ExamDateTime::where('examdate_id',$id)->latest()->get();
        return view('Backend.Admin.examdatetimes.index', $data);
    }
    public function store(Request $request){
        $data = new ExamDateTime;
        $data->examdate_id = $request->examdate_id;
        $data->time = $request->time;
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
}
