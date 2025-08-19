<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;

class FeatureController extends Controller
{
    public function store(Request $request){
        $data = new Feature;                                      
        $data->course_id = $request->course_id;
        $data->title = $request->title;
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = Feature::find($id);           
        $data->title = $request->title;
        $data->update();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy($id){
        $data = Feature::find($id);
        $data->delete();                                                 
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
