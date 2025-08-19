<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Write;

class WriteController extends Controller
{
    public function update(Request $request, $id){
        $data = Write::find($id);                                              
        $data->description = $request->description; 
        if($request->hasFile('image')) {
            $destination = 'images/writes/'.$data->image;
            if(File::exists($destination)){ File::delete($destination); }
            $imageName = time().".".$request->file('image')->extension();
            $request->file('image')->move(public_path('images/writes/'),$imageName);
            $data->image = $imageName;
        } 
        $data->update();                                                 
        return redirect()->back()->with('success','Updated Successfully Done');
    }
}
