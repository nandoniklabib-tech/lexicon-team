<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseTrainer;

class CourseTrainerController extends Controller
{
    public function store(Request $request){
        
        $axists = CourseTrainer::where('course_id',$request->course_id)->where('trainer_id',$request->trainer_id)->first(); 
        if($axists){
            return redirect()->back()->with('error','That Trainer Already Axists');
        }
        else{
            $data = new CourseTrainer;                                      
            $data->course_id = $request->course_id;
            $data->trainer_id = $request->trainer_id;
            $data->save();
            return redirect()->back()->with('success','Added Successfully Done');
        }

    }
    public function update(Request $request, $id){
        $data = CourseTrainer::find($id);           
        $data->trainer_id = $request->trainer_id;
        $data->update();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy($id){
        $data = CourseTrainer::find($id);
        $data->delete();                                                 
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
