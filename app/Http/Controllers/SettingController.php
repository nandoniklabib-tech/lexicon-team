<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Setting;

class SettingController extends Controller
{     
    public function index(){
        $data['setting'] = Setting::latest()->first();
        return view('Backend.Admin.settings.index', $data);
    }
    public function store(Request $request){
        $setting = Setting::latest()->first();
        $setting->title = $request->title;
        $setting->description = $request->description;
        if($request->hasFile('logo')) {
            $destination_logo = 'images/settings/'.$setting->logo; if(File::exists($destination_logo)){ File::delete($destination_logo); }
            $imageName = "logo".time().".".$request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->move(public_path('images/settings/'),$imageName);
            $setting->logo = $imageName;
        } 
        if($request->hasFile('favicon')) {
            $destination_favicon = 'images/settings/'.$setting->favicon; if(File::exists($destination_favicon)){ File::delete($destination_favicon); }
            $imageName = "favicon".time().".".$request->file('favicon')->getClientOriginalExtension();
            $request->file('favicon')->move(public_path('images/settings/'),$imageName);
            $setting->favicon = $imageName;
        } 
        $setting->email = $request->email;
        $setting->mobile1 = $request->mobile1;
        $setting->mobile2 = $request->mobile2;
        $setting->mobile3 = $request->mobile3;
        $setting->mobile4 = $request->mobile4;
        $setting->address = $request->address;
        $setting->website = $request->website;
        $setting->instagram = $request->instagram;
        $setting->twitter = $request->twitter;
        $setting->linkedin = $request->linkedin;
        $setting->youtube = $request->youtube;
        $setting->facebook = $request->facebook;
        $setting->whatsapp = $request->whatsapp;
        $setting->messenger = $request->messenger;
        $setting->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }  
    
    public function messageFromCeo(){
        $data['setting'] = Setting::latest()->first();
        return view('Backend.Admin.settings.messageFromCeo', $data);
    }
    public function messageFromCeoUpdate(Request $request){
        $setting = Setting::latest()->first();
        if($request->hasFile('ceo_image')) {
            $destination = 'images/settings/'.$setting->ceo_image; if(File::exists($destination)){ File::delete($destination); }
            $imageName = "ceo_image".time().".".$request->file('ceo_image')->getClientOriginalExtension();
            $request->file('ceo_image')->move(public_path('images/settings/'),$imageName);
            $setting->ceo_image = $imageName;
        } 
        if($request->hasFile('ceo_image_back')) {
            $destination = 'images/settings/'.$setting->ceo_image_back; if(File::exists($destination)){ File::delete($destination); }
            $imageName = "ceo_image_back".time().".".$request->file('ceo_image_back')->getClientOriginalExtension();
            $request->file('ceo_image_back')->move(public_path('images/settings/'),$imageName);
            $setting->ceo_image_back = $imageName;
        } 
        $setting->ceo_description = $request->ceo_description;
        $setting->update();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    
    public function whoWeAre(){
        $data['setting'] = Setting::latest()->first();
        return view('Backend.Admin.settings.whoWeAre', $data);
    }
    public function whoWeAreUpdate(Request $request){
        $setting = Setting::latest()->first();
        if($request->hasFile('who_we_are_image')) {
            $destination_who_we_are_image = 'images/settings/'.$setting->who_we_are_image; if(File::exists($destination_who_we_are_image)){ File::delete($destination_who_we_are_image); }
            $imageName = "who_we_are_image".time().".".$request->file('who_we_are_image')->getClientOriginalExtension();
            $request->file('who_we_are_image')->move(public_path('images/settings/'),$imageName);
            $setting->who_we_are_image = $imageName;
        } 
        $setting->who_we_are_description = $request->who_we_are_description;
        $setting->update();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    
    public function missionVision(){
        $data['setting'] = Setting::latest()->first();
        return view('Backend.Admin.settings.missionVision', $data);
    }
    public function missionVisionUpdate(Request $request){
        $setting = Setting::latest()->first();
        if($request->hasFile('vision_image')) {
            $destination_vision_image = 'images/settings/'.$setting->vision_image; if(File::exists($destination_vision_image)){ File::delete($destination_vision_image); }
            $imageName = "vision_image".time().".".$request->file('vision_image')->getClientOriginalExtension();
            $request->file('vision_image')->move(public_path('images/settings/'),$imageName);
            $setting->vision_image = $imageName;
        } 
        $setting->vision_description = $request->vision_description;
        if($request->hasFile('mission_image')) {
            $destination_mission_image = 'images/settings/'.$setting->mission_image; if(File::exists($destination_mission_image)){ File::delete($destination_mission_image); }
            $imageName = "mission_image".time().".".$request->file('mission_image')->getClientOriginalExtension();
            $request->file('mission_image')->move(public_path('images/settings/'),$imageName);
            $setting->mission_image = $imageName;
        } 
        $setting->mission_description = $request->mission_description;
        $setting->update();
        return redirect()->back()->with('success','Updated Successfully Done');
    }  
    public function backgroundImages(){
        $data['setting'] = Setting::latest()->first();
        return view('Backend.Admin.settings.backgroundImages', $data);
    }
    public function backgroundImagesUpdate(Request $request){
        $setting = Setting::latest()->first();
        
        if($request->hasFile('contact_image')) {
            $destination = 'images/settings/'.$setting->contact_image; if(File::exists($destination)){ File::delete($destination); }
            $imageName = "contact_image".time().".".$request->file('contact_image')->getClientOriginalExtension();
            $request->file('contact_image')->move(public_path('images/settings/'),$imageName);
            $setting->contact_image = $imageName;
        }
        if($request->hasFile('blogs_image')) {
            $destination = 'images/settings/'.$setting->blogs_image; if(File::exists($destination)){ File::delete($destination); }
            $imageName = "blogs_image".time().".".$request->file('blogs_image')->getClientOriginalExtension();
            $request->file('blogs_image')->move(public_path('images/settings/'),$imageName);
            $setting->blogs_image = $imageName;
        }
        if($request->hasFile('score_image')) {
            $destination = 'images/settings/'.$setting->score_image; if(File::exists($destination)){ File::delete($destination); }
            $imageName = "score_image".time().".".$request->file('score_image')->getClientOriginalExtension();
            $request->file('score_image')->move(public_path('images/settings/'),$imageName);
            $setting->score_image = $imageName;
        }
        if($request->hasFile('event_image')) {
            $destination = 'images/settings/'.$setting->event_image; if(File::exists($destination)){ File::delete($destination); }
            $imageName = "event_image".time().".".$request->file('event_image')->getClientOriginalExtension();
            $request->file('event_image')->move(public_path('images/settings/'),$imageName);
            $setting->event_image = $imageName;
        }
        if($request->hasFile('higher_education_image')) {
            $destination = 'images/settings/'.$setting->higher_education_image; if(File::exists($destination)){ File::delete($destination); }
            $imageName = "higher_education_image".time().".".$request->file('higher_education_image')->getClientOriginalExtension();
            $request->file('higher_education_image')->move(public_path('images/settings/'),$imageName);
            $setting->higher_education_image = $imageName;
        }
        if($request->hasFile('immigration_image')) {
            $destination = 'images/settings/'.$setting->immigration_image; if(File::exists($destination)){ File::delete($destination); }
            $imageName = "immigration_image".time().".".$request->file('immigration_image')->getClientOriginalExtension();
            $request->file('immigration_image')->move(public_path('images/settings/'),$imageName);
            $setting->immigration_image = $imageName;
        }
        if($request->hasFile('ielts_reg_image')) {
            $destination = 'images/settings/'.$setting->ielts_reg_image; if(File::exists($destination)){ File::delete($destination); }
            $imageName = "ielts_reg_image".time().".".$request->file('ielts_reg_image')->getClientOriginalExtension();
            $request->file('ielts_reg_image')->move(public_path('images/settings/'),$imageName);
            $setting->ielts_reg_image = $imageName;
        }
        if($request->hasFile('placement_image')) {
            $destination = 'images/settings/'.$setting->placement_image; if(File::exists($destination)){ File::delete($destination); }
            $imageName = "placement_image".time().".".$request->file('placement_image')->getClientOriginalExtension();
            $request->file('placement_image')->move(public_path('images/settings/'),$imageName);
            $setting->placement_image = $imageName;
        }
        
        $setting->update();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    
}
