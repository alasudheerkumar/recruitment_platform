<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewJob;
use Illuminate\Support\Facades\DB;

class NewJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'jobtitle'=>'required',
            'candReq'=>'required',
            'candWork'=>'required',
            'candExpec'=>'required',
       ]); 
       $newjob = new NewJob;
       $newjob->Job_Title = $request->input('jobtitle');
       $newjob->Job_Requirements = $request->input('candReq');
       $newjob->Job_Work = $request->input('candWork');
       $newjob->Job_Expectations = $request->input('candExpec');
       $newjob->save();

       return redirect('/newjob')->with('success','New Job successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $jobs = DB::select('select * from new_jobs');
        return view('pages.index',['jobs'=>$jobs]);
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
}
