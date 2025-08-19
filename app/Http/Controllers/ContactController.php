<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactStore(Request $request){
        $data = new Contact;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->save();
        return redirect()->back()->with('success','Thanks "'.$request->name.'" for contact us.');
    }
    public function index(){
        $data['contacts'] = Contact::latest()->get();
        return view('Backend.Admin.contacts.index', $data);
    }
    public function destroy(Request $request, $id){
        $data = Contact::find($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done');
    }
}
