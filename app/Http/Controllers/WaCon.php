<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

use App\Http\Requests;

class WaCon extends Controller
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
        $this->validate(request(), [
            'company' => 'required',
            'job' => 'required',
            'pos' => 'required',
            'des' => 'required',
            
            
        ]);
        $wd = new Work;
        //
        //$customers = Customer::all();
      
    
        //$l = new Login;
        $wd->company_name=$request->get('company');
        $wd->start_month=$request->get('sm');
        $wd->start_year=$request->get('sy');
        $wd->end_month=$request->get('em');
        $wd->end_year=$request->get('ey');
        $wd->job_type=$request->get('job');
        $wd->pos=$request->get('pos');
        $wd->description=$request->get('des');
        $wd->save();     
        echo "<script>alert('Data added successfully')</script>.";
         //return view('contact');   
        return redirect('askills');
        
       
        

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
