<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\BlogCategory;
use App\Models\Blog;

class BlogCategoryController extends Controller
{
    public function index(){
        $data['blogcategories'] = BlogCategory::get();
        return view('Backend.Admin.blogcategories.index', $data);
    }
    public function store(Request $request){
        $data = new BlogCategory;
        $data->title = $request->title;
        $data->save();
        return redirect()->back()->with('success','Added Successfully Done');
    }
    public function update(Request $request, $id){
        $data = BlogCategory::find($id);
        $data->title = $request->title;
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function destroy(Request $request, $id){
        $data = BlogCategory::find($id);

        $blogs = Blog::where('blogcategory_id',$blogcategory->id)->get();
        foreach($blogs as $blog){
            $destination = 'images/blogs/'.$blog->image; if(File::exists($destination)){ File::delete($destination); }
            $blog->delete();
        }

        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
