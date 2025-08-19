<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamType;

class ExamTypeController extends Controller
{
    public function typeStore(Request $request){
        $data = new ExamType;
        $data->type = $request->type;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();
        return redirect()->back()->with('success','Thanks "'.$request->name.'".');
    }
    public function index(){
        $data['examtypes'] = ExamType::latest()->get();
        return view('Backend.Admin.examtypes.index', $data);
    }
    public function destroy(Request $request, $id){
        $data = ExamType::find($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
