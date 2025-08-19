<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\LexiflyCountry;

class LexiflyCountryController extends Controller
{
    public function index(){
        $data['lexiflycountries'] = LexiflyCountry::latest()->get();
        return view('Backend.Admin.lexiflycountries.index', $data);
    }
    public function lexiflyHigherEducation(){
        $data['lexiflycountries'] = LexiflyCountry::where('type','Higher Education')->latest()->get();
        return view('Backend.Admin.lexiflycountries.higherEducation', $data);
    }
    public function lexiflyImmigration(){
        $data['lexiflycountries'] = LexiflyCountry::where('type','Immigration')->latest()->get();
        return view('Backend.Admin.lexiflycountries.immigration', $data);
    }
    public function store(Request $request){
        $data = new LexiflyCountry;
        $data->type = $request->type;
        $data->name = $request->name;
        if($request->hasFile('image')) {
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/lexiflycountries/'),$imageName);
            $data->image = $imageName;
        }  
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = LexiflyCountry::find($id);
        $data->name = $request->name;
        if($request->hasFile('image')) {
            $destination_image = 'images/lexiflycountries/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/lexiflycountries/'),$imageName);
            $data->image = $imageName;
        }  
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = LexiflyCountry::find($id);
        $destination_image = 'images/lexiflycountries/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
