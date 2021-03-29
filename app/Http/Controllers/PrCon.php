<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use App\Image;

use App\Http\Requests;

class PrCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$j = 1;
        //$p = Project::all()->toArray();  
        // dd();
        //$i = Image::all()->toArray(); 
       $pim=DB::select("SELECT projects.pid, projects.pname, projects.description, projects.category, uploads.img, uploads.des from projects INNER JOIN uploads on projects.pname = uploads.des");
       //dd($pi);
       // foreach($p as $pi)
        //{
            /*for($j=0;$j<count($p);$j++)
            {
            $i= Image::all()->where('des', $p[$j]['pname'])->toArray(); 
            
            }*/
        //$j = $j+1;
        //} 
        //dd($i);
        return view('myworks', compact('pim'));

    }
    public function all()
    {
        $pim=DB::select("SELECT projects.pid, projects.pname, projects.description, projects.category, uploads.img, uploads.des from projects INNER JOIN uploads on projects.pname = uploads.des");
 
        //dd($se);
        return view('myworks', compact('pim'));

    }
    public function web()
    {
        $pim=DB::select("SELECT projects.pid, projects.pname, projects.description, projects.category, uploads.img, uploads.des from projects INNER JOIN uploads on projects.pname = uploads.des where projects.category = 'Website'");
 
        //dd($pi);
        return view('myworks', compact('pim'));

    }
    public function app()
    {
        $pim=DB::select("SELECT projects.pid, projects.pname, projects.description, projects.category, uploads.img, uploads.des from projects INNER JOIN uploads on projects.pname = uploads.des where projects.category = 'Mobile Application'");
 
        //dd($se);
        return view('myworks', compact('pim'));

    }
    public function res()
    {
        $pim=DB::select("SELECT projects.pid, projects.pname, projects.description, projects.category, uploads.img, uploads.des from projects INNER JOIN uploads on projects.pname = uploads.des where projects.category = 'Research'");
 
        //dd($se);
        return view('myworks', compact('pim'));

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
