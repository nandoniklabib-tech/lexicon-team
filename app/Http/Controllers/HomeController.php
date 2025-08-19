<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\IeltsRegistration;
use App\Models\Placement;
use App\Models\McqStudent;
use App\Models\Lexifly;
use App\Models\Contact;
use Auth;

class HomeController extends Controller
{

    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index(){
        return view('home');
    }
    public function dashboard(){
        if(Auth::user()->type=='Admin'){
            return view('Backend.Admin.dashboard');
        }
        elseif(Auth::user()->type=='Content Manager'){
            return view('Backend.ContentManager.dashboard');
        }
        elseif(Auth::user()->type=='Front Desk'){
            $data['total_ieltsregistrations'] = IeltsRegistration::count();
            $data['total_placements'] = Placement::count();
            $data['total_mcqstudents'] = McqStudent::count();
            $data['total_lexiflies'] = Lexifly::count();
            $data['total_contacts'] = Contact::count();
            return view('Backend.FrontDesk.dashboard',$data);
        }
        else{
            return view('Backend.User.dashboard');
        }
    }
    
}
