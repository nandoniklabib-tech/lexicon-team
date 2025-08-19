<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use App\Models\Course;

class CategoryController extends Controller
{
    public function index(){
        $data['categories'] = Category::latest()->get();
        return view('Backend.Admin.categories.index', $data);
    }
    public function store(Request $request){
        $data = new Category;
        $data->title = $request->title;
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = Category::find($id);
        $data->title = $request->title;
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
    public function show($id){
        $data['category'] = Category::find($id);
        $data['courses'] = Course::where('category_id',$id)->latest()->get();
        return view('Backend.Admin.courses.index', $data);
    }
}
