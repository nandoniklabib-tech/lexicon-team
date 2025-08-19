<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MocktestStudent;
use App\Models\TestListening;
use App\Models\TestReading;
use App\Models\TestWriting;

class MocktestStudentController extends Controller
{
    public function index(){
        $data['mockteststudents'] = MocktestStudent::latest()->get();
        return view('Backend.Admin.mockteststudents.index', $data);
    }
    public function destroy(Request $request, $id){
        $data = MocktestStudent::find($id);
        
        $TestListenings = TestListening::where('email',$data->email)->get();
        foreach($TestListenings as $TestListening){ $TestListening->delete(); }

        $TestReadings = TestReading::where('email',$data->email)->get();
        foreach($TestReadings as $TestReading){ $TestReading->delete(); }

        $TestWritings = TestWriting::where('email',$data->email)->get();
        foreach($TestWritings as $TestWriting){ $TestWriting->delete(); }

        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
