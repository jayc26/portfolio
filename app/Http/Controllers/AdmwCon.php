<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Image;

use App\Http\Requests;
class AdmwCon extends Controller
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
         //
         $this->validate(request(), [
            'pn' => 'required',
            'd' => 'required',
            'fileToUpload' => 'required',
            
            
            
        ]);
        $wd = new Project;
        $im = new Image;
        //$wd = Skill::find($id);
        //$wd->pname=$request->get('pn');
        $wd->pname=$request->get('pn');
        $wd->category=$request->get('c');
        $wd->description=$request->get('d');
        //$wd->end_month=$request->get('em');
        $wd->save();
        $im->img = request()->file('fileToUpload')->getClientOriginalName();

        $file = $request->file('fileToUpload');
        $originalname = $file->getClientOriginalName();
        $path = $file->storeAs('public/Images', $originalname);
        //$ig=request()->file('fileToUpload');
        //$ig->save('/Images');

        //$ig = move(public_path('/Images'), request()->file('fileToUpload')->getClientOriginalName());
        $im->des = $request->get('pn');
        $im->save();
        echo "<script>alert('Data Added Successfully')</script>.";
        return redirect()->action('AmwCon@index');
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
