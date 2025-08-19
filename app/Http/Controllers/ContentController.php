<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function store(Request $request){
        $data = new Content;                                      
        $data->course_id = $request->course_id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = Content::find($id);           
        $data->title = $request->title;
        $data->description = $request->description;
        $data->update();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy($id){
        $data = Content::find($id);
        $data->delete();                                                 
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
