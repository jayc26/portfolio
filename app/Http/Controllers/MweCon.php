<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Image;
use Route;

use App\Http\Requests;

class MweCon extends Controller
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
       /* $this->validate(request(), [
            
            'pn' => 'required',
            'd' => 'required',
            'fileToUpload' => 'required',
           
            
            
        ]);*/
        $id = $request->get('eid');
        $wd = Project::where('pid',$id)->first();
        $pn=$wd->pname;
        $p=$wd->pid;
        $wd->pname=$request->get('pn');
        $wd->category=$request->get('c');
        $wd->description=$request->get('d');
        $wd->save();
        if($request->hasFile('fileToUpload'))
        {
            //dd('In');
        $ip = Image::where('des',$pn)->first();
        $ip->des=$request->get('pn');
        $ip->img = request()->file('fileToUpload')->getClientOriginalName();
        $ip->save();
        
        
        
        //$wd->save();
        $file = $request->file('fileToUpload');
        $originalname = $file->getClientOriginalName();
        $path = $file->storeAs('public/Images', $originalname);
    }
    else{
        $ip = Image::where('des',$pn)->first();
        $ip->des=$request->get('pn');
        $ip->save();
       // dd('out');
    }
        //return view('amyworks');
        //dd('here');
        echo "<script>alert('Data Edited Successfully')</script>.";
        return redirect()->action('AmwCon@index');
        //Route::get('/amyworks', '/amyworks'); 
        //redirect()->view('amyworks');
        //return back();
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
