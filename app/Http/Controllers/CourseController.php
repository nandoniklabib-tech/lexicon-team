<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Course;
use App\Models\CourseTrainer;
use App\Models\Listen;
use App\Models\Write;
use App\Models\Feature;
use App\Models\Content;
use App\Models\Trainer;

class CourseController extends Controller
{     
    public function index(){
        $data['courses'] = Course::all();
        return view('Backend.Admin.courses.index', $data);
    }
    public function store(Request $request){
        $course = new Course;                                              
        $course->category_id = $request->category_id; 
        $course->heading = $request->heading; 
        $course->sub_heading = $request->sub_heading; 
        $course->title = $request->title; 
        $course->sub_title = $request->sub_title; 
        if($request->hasFile('image')) {
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/courses/'),$imageName);
            $course->image = $imageName;
        }  
        $course->price = $request->price; 
        $course->short_description = $request->short_description; 
        $course->description = $request->description; 
        $course->start_date = $request->start_date; 
        $course->class_schedule = $request->class_schedule; 
        $course->support = $request->support; 
        $course->seats = $request->seats; 
        $course->batch_name = $request->batch_name; 
        $course->extra_title = $request->extra_title; 
        $course->extra_description = $request->extra_description;  
        $course->save();    
        
        // $listen = new Listen;
        // $listen->course_id = $course->id;
        // $listen->save();
        
        // $write = new Write;
        // $write->course_id = $course->id;
        // $write->save();
        
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $course = Course::find($id);         
        $course->heading = $request->heading; 
        $course->sub_heading = $request->sub_heading; 
        $course->title = $request->title; 
        $course->sub_title = $request->sub_title; 
        if($request->hasFile('image')) {
            $destination_image = 'images/courses/'.$course->image; if(File::exists($destination_image)){ File::delete($destination_image); }
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/courses/'),$imageName);
            $course->image = $imageName;
        }  
        $course->price = $request->price; 
        $course->short_description = $request->short_description; 
        $course->description = $request->description; 
        $course->start_date = $request->start_date; 
        $course->class_schedule = $request->class_schedule; 
        $course->support = $request->support; 
        $course->seats = $request->seats; 
        $course->batch_name = $request->batch_name; 
        $course->extra_title = $request->extra_title; 
        $course->extra_description = $request->extra_description;
        $course->update();                                                 
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy($id){
        $data = Course::find($id);
        $destination_image = 'images/courses/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }

        // $listens = Listen::where('course_id',$id)->get(); foreach($listens as $listen){ $listen->delete(); }
        // $writes = Write::where('course_id',$id)->get(); foreach($writes as $write){ $write->delete(); }
        
        $data->delete();                                                 
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
    public function courseWiseContents($id){
        $data['course'] = Course::find($id); 
        $data['contents'] = Content::where('course_id',$id)->get();  
        return view('Backend.Admin.contents.index', $data);
    }
    public function courseWiseFeatures($id){
        $data['course'] = Course::find($id); 
        $data['features'] = Feature::where('course_id',$id)->get();  
        return view('Backend.Admin.features.index', $data);
    }
    public function courseWiseTrainers($id){
        $data['course'] = Course::find($id); 
        $data['trainers'] = Trainer::get(); 
        $data['coursetrainers'] = CourseTrainer::where('course_id',$id)->get();  
        return view('Backend.Admin.coursetrainers.index', $data);
    }
    public function show($id){
        $data['course'] = Course::find($id);   
        return view('Backend.Admin.courses.show', $data);
    }
    public function Listening($id){
        $data['course'] = Course::find($id);   
        $data['listen'] = Listen::where('course_id',$id)->first();  
        return view('Backend.Admin.courses.Listening', $data);
    }
    public function Reading($id){
        $data['course'] = Course::find($id);   
        return view('Backend.Admin.courses.Reading', $data);
    }
    public function Writing($id){
        $data['course'] = Course::find($id);   
        $data['write'] = Write::where('course_id',$id)->first();   
        return view('Backend.Admin.courses.Writing', $data);
    }
    public function Speaking($id){
        $data['course'] = Course::find($id);   
        return view('Backend.Admin.courses.Speaking', $data);
    }
}
