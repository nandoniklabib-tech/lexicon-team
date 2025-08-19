<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Placement;
use App\Models\Course;

class PlacementController extends Controller
{
    public function print($id){
        $data['data'] = Placement::find($id);
        $data['courses'] = Course::latest()->get();
        return view('Backend.Admin.placements.print', $data);
    }
    public function index(){
        $data['placements'] = Placement::latest()->get();
        return view('Backend.Admin.placements.index', $data);
    }
    public function placementStore(Request $request){
        $data = new Placement;
        $data->course_id = $request->course_id; 
        $data->first_name = $request->first_name; 
        $data->last_name = $request->last_name; 
        $data->dob = $request->dob; 
        $data->passport_number = $request->passport_number; 
        $data->passport_exp_date = $request->passport_exp_date; 
        $data->nid = $request->nid; 
        $data->email = $request->email; 
        $data->phone = $request->phone; 
        $data->occupation = $request->occupation; 
        $data->country_for_apply = $request->country_for_apply; 
        $data->year_studied_english = $request->year_studied_english; 
        $data->test_type = $request->test_type; 
        $data->test_date = $request->test_date; 
        $data->test_venue = $request->test_venue; 
        $data->test_format = $request->test_format;
        
        $data->enrollment_date = $request->enrollment_date; 
        $data->batch = $request->batch; 
        $data->name = $request->name; 
        $data->father_name = $request->father_name; 
        $data->mother_name = $request->mother_name; 
        $data->blood_group = $request->blood_group; 
        $data->profession = $request->profession; 
        $data->fb = $request->fb; 
        $data->course_start = $request->course_start; 
        $data->course_end = $request->course_end; 
        $data->renewal1 = $request->renewal1; 
        $data->renewal2 = $request->renewal2; 
        $data->renewal3 = $request->renewal3; 
        $data->reference = $request->reference; 
        if($request->hasFile('image')) {
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/placements/'),$imageName);
            $data->image = $imageName;
        }  
        $data->gurdian_phone = $request->gurdian_phone; 
        
        $data->passport_nid_image = $request->passport_nid_image;  
        $data->why_enroll_course = $request->why_enroll_course;  
        $data->save();
        return redirect()->back()->with('success','Congratulation. Your Placement Successfully Submited');
    }
    public function destroy(Request $request, $id){
        $data = Placement::find($id);
        $destination_image = 'images/placements/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
    public function adminPlacementForm(){
        $data['placements'] = Placement::latest()->get();
        $data['courses'] = Course::latest()->get();
        return view('Backend.Admin.form.adminPlacementForm', $data);
    }
    public function adminIeltsForm(){
        $data['placements'] = Placement::latest()->get();
        return view('Backend.Admin.form.adminIeltsForm', $data);
    }
    public function edit($id){
        $data['placement'] = Placement::find($id);
        $data['courses'] = Course::latest()->get();
        return view('Backend.Admin.placements.edit', $data);
    }
    public function update(Request $request, $id){
        $data = Placement::find($id);
        $data->course_id = $request->course_id; 
        $data->first_name = $request->first_name; 
        $data->last_name = $request->last_name; 
        $data->dob = $request->dob; 
        $data->passport_number = $request->passport_number; 
        $data->passport_exp_date = $request->passport_exp_date; 
        $data->nid = $request->nid; 
        $data->email = $request->email; 
        $data->phone = $request->phone; 
        $data->occupation = $request->occupation; 
        $data->country_for_apply = $request->country_for_apply; 
        $data->year_studied_english = $request->year_studied_english; 
        $data->test_type = $request->test_type; 
        $data->test_date = $request->test_date; 
        $data->test_venue = $request->test_venue; 
        $data->test_format = $request->test_format;
        
        $data->enrollment_date = $request->enrollment_date; 
        $data->batch = $request->batch; 
        $data->name = $request->name; 
        $data->father_name = $request->father_name; 
        $data->mother_name = $request->mother_name; 
        $data->blood_group = $request->blood_group; 
        $data->profession = $request->profession; 
        $data->fb = $request->fb; 
        $data->course_start = $request->course_start; 
        $data->course_end = $request->course_end; 
        $data->renewal1 = $request->renewal1; 
        $data->renewal2 = $request->renewal2; 
        $data->renewal3 = $request->renewal3;
        $data->reference = $request->reference; 
        if($request->hasFile('image')) {
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/placements/'),$imageName);
            $data->image = $imageName;
        }  
        $data->gurdian_phone = $request->gurdian_phone; 
        
        $data->passport_nid_image = $request->passport_nid_image;  
        $data->why_enroll_course = $request->why_enroll_course;  
        $data->update();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
}
