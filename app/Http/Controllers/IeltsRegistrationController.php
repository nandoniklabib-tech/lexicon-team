<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\IeltsRegistration;

class IeltsRegistrationController extends Controller
{
    public function invoice($id){
        $data['data'] = IeltsRegistration::find($id);
        return view('Backend.Admin.ieltsregistrations.invoice', $data);
    }
    public function print($id){
        $data['data'] = IeltsRegistration::find($id);
        return view('Backend.Admin.ieltsregistrations.print', $data);
    }
    public function index(){
        $data['ieltsregistrations'] = IeltsRegistration::latest()->get();
        return view('Backend.Admin.ieltsregistrations.index', $data);
    }
    public function ieltsRegistrationStore(Request $request){
        $data = new IeltsRegistration;
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
        if($request->hasFile('passport_nid_image')) {
            $imageName = "passport_nid_image".time().".".$request->file('passport_nid_image')->getClientOriginalExtension();
            $request->file('passport_nid_image')->move(public_path('images/ieltsregistrations/'),$imageName);
            $data->passport_nid_image = $imageName;
        } 
        $data->guardian_name = $request->guardian_name; 
        $data->guardian_dob = $request->guardian_dob; 
        $data->guardian_email = $request->guardian_email; 
        $data->guardian_phone = $request->guardian_phone; 
        $data->guardian_passport_nid = $request->guardian_passport_nid; 
        $data->guardian_passport_exp_date = $request->guardian_passport_exp_date; 
        $data->save();
        return redirect()->back()->with('success','Congratulation, Your Registration Successfully Submited.');
    }
    public function destroy(Request $request, $id){
        $data = IeltsRegistration::find($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
    public function edit($id){
        $data['ieltsregistration'] = IeltsRegistration::find($id);
        return view('Backend.Admin.ieltsregistrations.edit', $data);
    }
    public function update(Request $request, $id){
        $data = IeltsRegistration::find($id);
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
        if($request->hasFile('passport_nid_image')) {
            $imageName = "passport_nid_image".time().".".$request->file('passport_nid_image')->getClientOriginalExtension();
            $request->file('passport_nid_image')->move(public_path('images/ieltsregistrations/'),$imageName);
            $data->passport_nid_image = $imageName;
        } 
        $data->guardian_name = $request->guardian_name; 
        $data->guardian_dob = $request->guardian_dob; 
        $data->guardian_email = $request->guardian_email; 
        $data->guardian_phone = $request->guardian_phone; 
        $data->guardian_passport_nid = $request->guardian_passport_nid; 
        $data->guardian_passport_exp_date = $request->guardian_passport_exp_date; 
        $data->update();
        return redirect()->back()->with('success','Updated Successfully Done.');
    }
}
