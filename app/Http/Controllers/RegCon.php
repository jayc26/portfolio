<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

use App\Http\Requests;
use App\Http\Controllers\RegCon;
class RegCon extends Controller
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
        $this->validate(request(), [
            'email' => 'required|email|unique:login_details',
            'fname' => 'required',
            'lname' => 'required',
            'company' => 'required',
            'password' => 'required|confirmed|min:8',
           
            
            
        ]);
        $l = new Login;
        //
        //$customers = Customer::all();
      
     $ue="";
        if(empty($ue_err))
        {
        //$l = new Login;
        $l->email = request('email');
        $l->Password = request('password');
        $l->fname = request('fname');
        $l->lname = request('lname');
        $l->company = request('company');
        $l->contact = request('contact');
        $l->Role = 'User';
        $l->save();
        return view('login');
        
       
        }
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
}
