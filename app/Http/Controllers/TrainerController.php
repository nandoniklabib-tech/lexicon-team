<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Trainer;

class TrainerController extends Controller
{
    public function index(){
        $data['trainers'] = Trainer::latest()->get();
        return view('Backend.Admin.trainers.index', $data);
    }
    public function store(Request $request){
        $data = new Trainer;
        $data->name = $request->name;
        if($request->hasFile('image')) {
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/trainers/'),$imageName);
            $data->image = $imageName;
        }  
        $data->designation = $request->designation;
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = Trainer::find($id);
        $data->name = $request->name;
        if($request->hasFile('image')) {
            $destination_image = 'images/trainers/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/trainers/'),$imageName);
            $data->image = $imageName;
        }  
        $data->designation = $request->designation;
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = Trainer::find($id);
        $destination_image = 'images/trainers/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
