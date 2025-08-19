<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lexifly;

class LexiflyController extends Controller
{
    public function lexiflyStore(Request $request){
        $data = new Lexifly;
        $data->type = $request->type;
        $data->country = $request->country;
        $data->university = $request->university;
        $data->lexiflycountry_id = $request->lexiflycountry_id;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();
        return redirect()->back()->with('success','Thanks "'.$request->name.'".');
    }
    public function index(){
        $data['lexiflies'] = Lexifly::latest()->get();
        return view('Backend.Admin.lexiflies.index', $data);
    }
    public function destroy(Request $request, $id){
        $data = Lexifly::find($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
