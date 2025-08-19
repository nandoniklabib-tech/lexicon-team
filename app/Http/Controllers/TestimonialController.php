<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index(){
        $data['testimonials'] = Testimonial::latest()->get();
        return view('Backend.Admin.testimonials.index', $data);
    }
    public function store(Request $request){
        $data = new Testimonial;
        $data->name = $request->name;
        if($request->hasFile('image')) {
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/testimonials/'),$imageName);
            $data->image = $imageName;
        }  
        $data->description = $request->description;
        $data->score = $request->score;
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = Testimonial::find($id);
        $data->name = $request->name;
        if($request->hasFile('image')) {
            $destination_image = 'images/testimonials/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/testimonials/'),$imageName);
            $data->image = $imageName;
        }  
        $data->description = $request->description;
        $data->score = $request->score;
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = Testimonial::find($id);
        $destination_image = 'images/testimonials/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
