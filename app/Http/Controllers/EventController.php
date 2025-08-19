<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $data['events'] = Event::latest()->get();
        return view('Backend.Admin.events.index', $data);
    }
    public function store(Request $request){
        $data = new Event;
        $data->title = $request->title;
        if($request->hasFile('image')) {
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/events/'),$imageName);
            $data->image = $imageName;
        }  
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = Event::find($id);
        $data->title = $request->title;
        if($request->hasFile('image')) {
            $destination_image = 'images/events/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/events/'),$imageName);
            $data->image = $imageName;
        }  
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = Event::find($id);
        $destination_image = 'images/events/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
