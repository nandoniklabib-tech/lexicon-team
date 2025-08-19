<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $data['users'] = User::latest()->get();
        return view('Backend.Admin.users.index', $data);
    }
    public function store(Request $request){
        $data = new Blog;
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
        $data = User::find($id);
        $data->type = $request->type;
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function profileUpdate(Request $request, $id){
        $data = User::find($id);
        $data->name = $request->name;
        $data->save();
        return redirect()->back()->with('success','Updated Successfully Done');
    }
    public function edit($id){
        $data['user'] = User::find($id);
        return view('Backend.Admin.users.edit', $data);
    }
    public function destroy(Request $request, $id){
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
        
    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);
    
        $user = User::findOrFail($id);
    
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'The current password is incorrect.']);
        }
    
        $user->password = Hash::make($request->new_password);
        $user->save();
    
        Auth::logout(); // 🔐 Auto logout
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect()->route('login')->with('status', 'Password updated successfully. Please log in again.');
    }
    
}
