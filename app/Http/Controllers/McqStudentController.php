<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\McqStudent;

class McqStudentController extends Controller
{
    public function index(){
        $data['mcqstudents'] = McqStudent::latest()->get();
        return view('Backend.Admin.mcqstudents.index', $data);
    }
    public function store(Request $request){
        $data = new McqStudent;
        $data->type = $request->type;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();
        // return redirect()->back()->with('success','Added Successfully Done');
        if($request->type=='YLE'){
            return redirect()->to('plecaement-test-yle/'.$data->id);
        }
        elseif($request->type=='ESL'){
            return redirect()->to('plecaement-test-esl/'.$data->id);
        }
        elseif($request->type=='IELTS'){
            return redirect()->to('plecaement-test-ielts/'.$data->id);
        }
        else{
            echo "no";
        }
    }
    public function destroy(Request $request, $id){
        $data = McqStudent::find($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
