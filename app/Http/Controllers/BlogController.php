<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\BlogCategory;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index($blogcategory_id){
        $data['blogcategory'] = BlogCategory::find($blogcategory_id);
        $data['blogs'] = Blog::where('blogcategory_id',$blogcategory_id)->latest()->get();
        return view('Backend.Admin.blogs.index', $data);
    }
    public function store(Request $request){
        $data = new Blog;
        $data->blogcategory_id = $request->blogcategory_id;
        $data->title = $request->title;
        if($request->hasFile('image')) {
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/blogs/'),$imageName);
            $data->image = $imageName;
        }  
        $data->description = $request->description;
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = Blog::find($id);
        $data->title = $request->title;
        if($request->hasFile('image')) {
            $destination_image = 'images/blogs/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
            $imageName = "image".time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/blogs/'),$imageName);
            $data->image = $imageName;
        }  
        $data->description = $request->description;
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = Blog::find($id);
        $destination_image = 'images/blogs/'.$data->image; if(File::exists($destination_image)){ File::delete($destination_image); }
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
