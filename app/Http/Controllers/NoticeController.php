<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Notice;

class NoticeController extends Controller
{
    public function index(){
        $data['notices'] = Notice::latest()->get();
        return view('Backend.Admin.notices.index', $data);
    }
    public function store(Request $request){
        $data = new Notice;
        $data->title = $request->title;
        if($request->hasFile('cover')) {
            $imageName = "cover".time().".".$request->file('cover')->getClientOriginalExtension();
            $request->file('cover')->move(public_path('images/notices/'),$imageName);
            $data->cover = $imageName;
        } 
        $data->date = $request->date;
        $data->time = $request->time;
        $data->description = $request->description;
        $data->host_name = $request->host_name;
        $data->venue = $request->venue;
        $data->status = $request->has('status') ? 1 : 0;
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = Notice::find($id);
        $data->title = $request->title;
        if($request->hasFile('cover')) {
            $destination_image = 'images/notices/'.$data->cover; if(File::exists($destination_image)){ File::delete($destination_image); }
            $imageName = "cover".time().".".$request->file('cover')->getClientOriginalExtension();
            $request->file('cover')->move(public_path('images/notices/'),$imageName);
            $data->cover = $imageName;
        }  
        $data->date = $request->date;
        $data->time = $request->time;
        $data->description = $request->description;
        $data->host_name = $request->host_name;
        $data->venue = $request->venue;
        $data->status = $request->has('status') ? 1 : 0;
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = Notice::find($id);
        $destination = 'images/notices/'.$data->image; if(File::exists($destination)){ File::delete($destination); }
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
