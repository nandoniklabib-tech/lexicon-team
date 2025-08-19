<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamDate;
use Carbon\Carbon;

class ExamDateController extends Controller
{
    public function index(){
        $data['examdates'] = ExamDate::latest()->get();
        return view('Backend.Admin.examdates.index', $data);
    }
    public function store(Request $request){
        $data = new ExamDate;
        $data->date = $request->date;
        $data->title = $request->title;
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = ExamDate::find($id);
        $data->date = $request->date;
        $data->title = $request->title;
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = ExamDate::find($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
    public function deleteExpiredItems(){
        ExamDate::where('date', '<', Carbon::yesterday())->delete();
        return back();
    }
}