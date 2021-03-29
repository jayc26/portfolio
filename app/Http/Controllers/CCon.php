<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class CCon extends Controller
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
        //
    }

    public function send(Request $request)
    {
        $this->validate(request(), [
            'e' => 'required|email',
            'fn' => 'required',
            'ln' => 'required',
            'c' => 'required',
            'cn' => 'required',
           
            
            
        ]);
        $e=$request->get('e');
        $fn=$request->get('fn');
        $ln=$request->get('ln');
        $c=$request->get('c');
        $cn=$request->get('cn');
        $to_name="J C";
        $to_email="chaphekarjay@gmail.com";
        $data=['e' => $e, 'fn' => $fn, 'ln' => $ln, 'c' => $c, 'cn' => $cn];

        Mail::send("mail", $data, function($message) {
            $message->to('chaphekarjay@gmail.com', 'J C')->subject
               ('Laravel Basic Testing Mail');
            $message->from('chaphekarjay@gmail.com','J C');
         });
         echo "<script>alert('Mail Sent to chaphekarjay@gmail.com')</script>.";
         return view('contact');
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
