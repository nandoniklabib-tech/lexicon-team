<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\TestWriting;
use App\Models\TestReading;
use App\Models\TestListening;
use Auth;

class TestController extends Controller
{ 
    public function index(){
        $data['tests'] = Test::latest()->get();
        return view('Backend.Admin.tests.index', $data);
    }
    public function show($id){
        $data['test'] = Test::find($id);
        $data['testwriting'] = TestWriting::where('test_id',$id)->first();
        $data['testreading'] = TestReading::where('test_id',$id)->first();
        $data['testlistening'] = TestListening::where('test_id',$id)->first();
        return view('Backend.Admin.tests.show', $data);
    }
    
    public function destroy(Request $request, $id){
        $data = Test::find($id);
        
        $TestWritings = TestWriting::where('test_id',$id)->get();
        foreach($TestWritings as $TestWriting){ $TestWriting->delete(); }
        
        $TestReadings = TestReading::where('test_id',$id)->get();
        foreach($TestReadings as $TestReading){ $TestReading->delete(); }
        
        $TestListenings = TestListening::where('test_id',$id)->get();
        foreach($TestListenings as $TestListening){ $TestListening->delete(); }
        
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
