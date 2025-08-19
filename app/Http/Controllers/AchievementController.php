<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Achievement;

class AchievementController extends Controller
{
    public function index(){
        $data['achievements'] = Achievement::latest()->get();
        return view('Backend.Admin.achievements.index', $data);
    }
    public function store(Request $request){
        $data = new Achievement;
        $data->title = $request->title;
        if($request->hasFile('image')) {
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/achievements/'),$imageName);
            $data->image = $imageName;
        }  
        $data->description = $request->description;
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = Achievement::find($id);
        $data->title = $request->title;
        if($request->hasFile('image')) {
            $destination_image = 'images/achievements/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/achievements/'),$imageName);
            $data->image = $imageName;
        }  
        $data->description = $request->description;
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = Achievement::find($id);
        $destination_image = 'images/achievements/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
