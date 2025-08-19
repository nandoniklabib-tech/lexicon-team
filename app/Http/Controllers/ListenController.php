<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Listen;

class ListenController extends Controller
{
    public function update(Request $request, $id){
        $data = Listen::find($id); 
        
        $data->lq1 = $request->lq1; 
        $data->la1 = $request->la1; 
        
        $data->lq2 = $request->lq2; 
        $data->la2 = $request->la2; 

        $data->lq3 = $request->lq3; 
        $data->la3 = $request->la3; 
        
        $data->lq4 = $request->lq4; 
        $data->la4 = $request->la4; 
        
        $data->lq5 = $request->lq5; 
        $data->la5 = $request->la5; 
        
        $data->lq6 = $request->lq6; 
        $data->la6 = $request->la6; 
        
        $data->lq7 = $request->lq7; 
        $data->la7 = $request->la7; 
        
        $data->lq8 = $request->lq8; 
        $data->la8 = $request->la8; 
        
        $data->lq9 = $request->lq9; 
        $data->la9 = $request->la9; 

        $data->lq10 = $request->lq10; 
        $data->la10 = $request->la10; 

        $data->lq11 = $request->lq11; 
        $data->la11 = $request->la11; 
        
        $data->lq12 = $request->lq12; 
        $data->la12 = $request->la12; 
        
        $data->lq13 = $request->lq13; 
        $data->la13 = $request->la13; 
        
        $data->lq14 = $request->lq14; 
        $data->la14 = $request->la14; 
        
        $data->lq15 = $request->lq15; 
        $data->la15 = $request->la15; 
        
        $data->lq16 = $request->lq16; 
        $data->la16 = $request->la16; 
        
        $data->lq17 = $request->lq17; 
        $data->la17 = $request->la17; 
        
        $data->lq18 = $request->lq18; 
        $data->la18 = $request->la18; 
        
        $data->lq19 = $request->lq19; 
        $data->la19 = $request->la19; 

        $data->lq20 = $request->lq20; 
        $data->la20 = $request->la20; 

        $data->lq21 = $request->lq21; 
        $data->la21 = $request->la21; 
        
        $data->lq22 = $request->lq22; 
        $data->la22 = $request->la22; 

        $data->lq23 = $request->lq23; 
        $data->la23 = $request->la23; 
        
        $data->lq24 = $request->lq24; 
        $data->la24 = $request->la24; 
        
        $data->lq25 = $request->lq25; 
        $data->la25 = $request->la25; 
        
        $data->lq26 = $request->lq26; 
        $data->la26 = $request->la26; 
        
        $data->lq27 = $request->lq27; 
        $data->la27 = $request->la27; 
        
        $data->lq28 = $request->lq28; 
        $data->la28 = $request->la28; 
        
        $data->lq29 = $request->lq29; 
        $data->la29 = $request->la29; 

        $data->lq30 = $request->lq30; 
        $data->la30 = $request->la30; 
 
        $data->lq31 = $request->lq31; 
        $data->lq31o1 = $request->lq31o1; 
        $data->lq31o2 = $request->lq31o2; 
        $data->lq31o3 = $request->lq31o3; 
        $data->la31 = $request->la31; 
        
        $data->lq32 = $request->lq32; 
        $data->lq32o1 = $request->lq32o1; 
        $data->lq32o2 = $request->lq32o2; 
        $data->lq32o3 = $request->lq32o3;
        $data->la32 = $request->la32; 

        $data->lq33 = $request->lq33; 
        $data->lq33o1 = $request->lq33o1; 
        $data->lq33o2 = $request->lq33o2; 
        $data->lq33o3 = $request->lq33o3;
        $data->la33 = $request->la33; 
        
        $data->lq34 = $request->lq34; 
        $data->la34 = $request->la34; 
        
        $data->lq35 = $request->lq35; 
        $data->la35 = $request->la35; 
        
        $data->lq36 = $request->lq36; 
        $data->la36 = $request->la36; 
        
        $data->lq37 = $request->lq37; 
        $data->la37 = $request->la37; 
        
        $data->lq38 = $request->lq38; 
        $data->la38 = $request->la38; 
        
        $data->lq39 = $request->lq39; 
        $data->la39 = $request->la39; 

        $data->lq40 = $request->lq40; 
        $data->la40 = $request->la40; 

        $data->update();                                                 
        return redirect()->back()->with('success','Updated Successfully Done');
    }
}
