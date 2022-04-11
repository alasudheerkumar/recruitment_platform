<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserAccount;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registration.register_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $this->validate($request,[
            'fname'=>'required',
            'lname'=>'required',
            'dob'=>'required',
            'mobile'=>'required',
            'nationality'=>'required',
            'email'=>'required',
            'passwd'=>'required',
            'street'=>'required',
            'dno'=>'required',
            'zipcode'=>'required',
            'city'=>'required',
            'country'=>'required',
            'toDate'=>'required',
            'fromDate'=>'required',
            'acceptTerms' => 'required',
            'acceptPrivacy' => 'required',
       ]); 
     
       $account = new UserAccount;
       $account->fname = $request->input('fname');
       $account->lname = $request->input('lname');
       $account->dob = $request->input('dob');
       $account->mobile = $request->input('mobile');
       $account->nationality = $request->input('nationality');
       $account->email = $request->input('email');
       $account->passwd = $request->input('passwd');
       $account->street = $request->input('street');
       $account->dno = $request->input('dno');
       $account->zipcode = $request->input('zipcode');
       $account->city = $request->input('city');
       $account->country = $request->input('country');
       $account->toDate = $request->input('toDate');
       $account->fromDate = $request->input('fromDate');
       $account->acceptTerms = $request->input('acceptTerms');
       $account->acceptPrivacy = $request->input('acceptPrivacy');
       $account->save();

       return redirect('/login_form')->with('success','Account Created, Please login here again');
      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function userData(){
        $applicants = User::all();
        return view('admin_pages.applicants', compact('applicants'));
    }

    public function store2(Request $request){
        return '123';
    }

}
