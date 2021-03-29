<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Skill;

use App\Http\Requests;


class EeCon extends Controller
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
    public function update(Request $request)
    {
        //
        //dd('in');
        $this->validate(request(), [
            
            'in' => 'required',
            'type' => 'required',
            'd' => 'required',
            'des' => 'required',
           
            
            
        ]);
        //dd('in');
        $id = $request->get('eid');
        //dd('in');
        $wd = Skill::find($id);
        $wd->institution_name=$request->get('in');
        $wd->start_month=$request->get('sm');
        $wd->start_year=$request->get('sy');
        $wd->end_month=$request->get('em');
        $wd->end_year=$request->get('ey');
        $wd->type=$request->get('type');
        $wd->degree=$request->get('d');
        $wd->d_name=$request->get('des');
        $wd->save();
        //dd('in');     
        echo "<script>alert('Data Edited Successfully')</script>.";
         //return view('contact');   
        return redirect('askills');

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
