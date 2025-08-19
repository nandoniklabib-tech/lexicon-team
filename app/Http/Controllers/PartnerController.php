<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function index(){
        $data['partners'] = Partner::get();
        return view('Backend.Admin.partners.index', $data);
    }
    public function store(Request $request){
        $data = new Partner;
        if($request->hasFile('image')) {
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/partners/'),$imageName);
            $data->image = $imageName;
        }  
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = Partner::find($id);
        if($request->hasFile('image')) {
            $destination_image = 'images/partners/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/partners/'),$imageName);
            $data->image = $imageName;
        }  
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = Partner::find($id);
        $destination_image = 'images/partners/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
