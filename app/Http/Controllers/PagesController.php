<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to recruitment platform';
        return view('pages.index')->with('title',$title);
    }
    public function dashboard(){
        $title = 'Welcome to Dashbaord';
        return view('pages.index')->with('title',$title);
    }
  
    public function settings(){
        #$title = 'WElcome to recruitment platform';
        $data = array(
            'title' => 'Settings',
            'services' => ['Web','Andriod','Network']
        );
        return view('pages.settings')->with($data);
    }
    public function notifications(){
        $title = 'notification page';
        return view('pages.notifications')->with('title',$title);
    }
    public function task(){
        $title = 'task page';
        return view('pages.task')->with('title',$title);
    }
    public function pdetails(){
        $title = 'Personaldetails page';
        return view('pages.pdetails')->with('title',$title);
    }
    public function documents(){
        $title = 'documents page';
        return view('pages.documents')->with('title',$title);
    }
    public function login_form(){
        $title = 'Login page';
        return view('pages.login_form')->with('title',$title);
    }

    //Register pages
    public function register_form(){
        $title = 'Registration Phase';
        return view('registration.register_form')->with('title',$title);
    }


    //Admin section
    public function applicants(){
        $title = 'Applications';
        return view('admin_pages.applicants')->with('title',$title);
    }
    public function adsettings(){
        $title = 'Adminstrator Settings';
        return view('admin_pages.adsettings')->with('title',$title);
    }
    public function interviews(){
        $title = 'Applicant Interview Details';
        return view('admin_pages.interviews')->with('title',$title);
    }
    public function adpd(){
        $title = 'Administrator Details';
        return view('admin_pages.adpd')->with('title',$title);
    }
}
