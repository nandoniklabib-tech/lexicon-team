<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mcq;

class McqController extends Controller
{
    public function index(){
        $data['mcqs'] = Mcq::latest()->get();
        return view('Backend.Admin.mcqs.index', $data);
    }
    public function yleIndex(){
        $data['mcqs'] = Mcq::where('type','YLE')->latest()->get();
        return view('Backend.Admin.mcqs.yle', $data);
    }
    public function eslIndex(){
        $data['mcqs'] = Mcq::where('type','ESL')->latest()->get();
        return view('Backend.Admin.mcqs.esl', $data);
    }
    public function ieltsIndex(){
        $data['mcqs'] = Mcq::where('type','IELTS')->latest()->get();
        return view('Backend.Admin.mcqs.ielts', $data);
    }
    public function store(Request $request){
        $data = new Mcq;
        $data->type = $request->type;
        $data->question = $request->question;
        $data->option1 = $request->option1;
        $data->option2 = $request->option2;
        $data->option3 = $request->option3;
        $data->option4 = $request->option4;
        $data->answer = $request->answer;
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = Mcq::find($id);
        $data->type = $request->type;
        $data->question = $request->question;
        $data->option1 = $request->option1;
        $data->option2 = $request->option2;
        $data->option3 = $request->option3;
        $data->option4 = $request->option4;
        $data->answer = $request->answer;
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = Mcq::find($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
