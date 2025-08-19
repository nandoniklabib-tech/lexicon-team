<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Scorer;

class ScorerController extends Controller
{
    public function index(){
        $data['scorers'] = Scorer::latest()->get();
        return view('Backend.Admin.scorers.index', $data);
    }
    public function store(Request $request){
        $data = new Scorer;
        $data->name = $request->name;
        if($request->hasFile('image')) {
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/scorers/'),$imageName);
            $data->image = $imageName;
        }  
        $data->speaking = $request->speaking;
        $data->listening = $request->listening;
        $data->reading = $request->reading;
        $data->writing = $request->writing;
        $data->speaking_status = $request->speaking_status ?? 0;
        $data->listening_status = $request->listening_status ?? 0;
        $data->reading_status = $request->reading_status ?? 0;
        $data->writing_status = $request->writing_status ?? 0;
        $data->score = $request->score;
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = Scorer::find($id);
        $data->name = $request->name;
        if($request->hasFile('image')) {
            $destination_image = 'images/scorers/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/scorers/'),$imageName);
            $data->image = $imageName;
        }  
        $data->speaking = $request->speaking;
        $data->listening = $request->listening;
        $data->reading = $request->reading;
        $data->writing = $request->writing;
        $data->speaking_status = $request->speaking_status;
        $data->listening_status = $request->listening_status;
        $data->reading_status = $request->reading_status;
        $data->writing_status = $request->writing_status;
        $data->score = $request->score;
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = Scorer::find($id);
        $destination_image = 'images/scorers/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
