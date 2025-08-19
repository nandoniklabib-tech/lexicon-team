<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Slider;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index(){
        $data['sliders'] = Slider::latest()->get();
        return view('Backend.Admin.sliders.index', $data);
    }
    // public function store(Request $request){
    //     $data = new Slider;
    //     $data->title = $request->title;
    //     if($request->hasFile('image')) {
    //         $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
    //         $request->file('image')->move(public_path('images/sliders/'),$imageName);
    //         $data->image = $imageName;
    //     }  
    //     $data->save();
    //     return redirect()->back()->with('success','Added Successfully Done');
    // }
    public function store(Request $request){
        $data = new Slider;
        $data->title = $request->title;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = uniqid() . '.webp';
            $publicPath = public_path('images/sliders/' . $filename);
            if (!file_exists(public_path('images/sliders'))) {
                mkdir(public_path('images/sliders'), 0755, true);
            }
            $img = Image::make($image)
                        ->resize(1200, null, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })
                        ->encode('webp', 75);
            $img->save($publicPath);
            $data->image = $filename;
        }
    
        $data->save();
    
        return redirect()->back()->with('success', 'Added Successfully');
    }

    // public function update(Request $request, $id){
    //     $data = Slider::find($id);
    //     $data->title = $request->title;
    //     if($request->hasFile('image')) {
    //         $destination_image = 'images/sliders/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
    //         $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
    //         $request->file('image')->move(public_path('images/sliders/'),$imageName);
    //         $data->image = $imageName;
    //     }  
    //     $data->save();
    //     return redirect()->back()->with('success','Updated Successfully Done');
    // }
    public function update(Request $request, $id){
        $data = Slider::findOrFail($id);
        $data->title = $request->title;
    
        if ($request->hasFile('image')) {
            $oldPath = public_path('images/sliders/' . $data->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }
            $filename = uniqid() . '.webp';
            $newPath = public_path('images/sliders/' . $filename);
            if (!file_exists(public_path('images/sliders'))) {
                mkdir(public_path('images/sliders'), 0755, true);
            }
            $img = Image::make($request->file('image'))
                        ->resize(1200, null, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })
                        ->encode('webp', 75);
            $img->save($newPath);
            $data->image = $filename;
        }
    
        $data->save();
    
        return redirect()->back()->with('success', 'Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = Slider::find($id);
        $destination_image = 'images/sliders/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
