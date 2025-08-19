<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LexiflyCountryUniversity;
use App\Models\LexiflyCountry;

class LexiflyCountryUniversityController extends Controller
{
    public function index($id){
        $data['lexiflycountry'] = LexiflyCountry::find($id);
        $data['lexiflycountryuniversities'] = LexiflyCountryUniversity::where('lexiflycountry_id',$id)->latest()->get();
        return view('Backend.Admin.lexiflycountryuniversities.index',$data);
    }
    public function store(Request $request){
        $data = new LexiflyCountryUniversity;
        $data->lexiflycountry_id = $request->lexiflycountry_id;
        $data->name = $request->name;
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = LexiflyCountryUniversity::find($id);
        $data->name = $request->name;
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = LexiflyCountryUniversity::find($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
