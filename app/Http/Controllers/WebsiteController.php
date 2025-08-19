<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Website;

class WebsiteController extends Controller
{     
    public function index(){
        $data['websites'] = Website::all();
        return view('Backend.Admin.websites.index', $data);
    }
    public function store(Request $request){
        $course = new Website;                                              
        $course->name = $request->name; 
        $course->save();    
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = Website::find($id);                                              
        $data->name = $request->name; 
        $data->update();                                                 
        return redirect()->back();
    }
    public function destroy($id){
        $data = Website::find($id);
        $data->delete();                                                 
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
