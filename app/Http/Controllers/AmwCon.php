<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use App\Image;

use App\Http\Requests;

class AmwCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

        $role="";
        if (isset($_SESSION['username'])){
        
            $role=$_SESSION['Role'];
        }
        
        if($role!="Admin")
        {
            //dd('in');
            return view("/login");
            //return redirect()->action('LoginCon@index');
            //return redirect()->action('LoginCon@index');
            //header("Location: skills.php"); 
        }
        //
        $pim=DB::select("SELECT projects.pid, projects.pname, projects.description, projects.category, uploads.img, uploads.des from projects INNER JOIN uploads on projects.pname = uploads.des");
 
        //dd($se);
        return view('amyworks', compact('pim'));
    }
    public function all()
    {
        $pim=DB::select("SELECT projects.pid, projects.pname, projects.description, projects.category, uploads.img, uploads.des from projects INNER JOIN uploads on projects.pname = uploads.des");
 
        //dd($se);
        return view('amyworks', compact('pim'));

    }
    public function web()
    {
        $pim=DB::select("SELECT projects.pid, projects.pname, projects.description, projects.category, uploads.img, uploads.des from projects INNER JOIN uploads on projects.pname = uploads.des where projects.category = 'Website'");
 
        //dd($pi);
        return view('amyworks', compact('pim'));

    }
    public function app()
    {
        $pim=DB::select("SELECT projects.pid, projects.pname, projects.description, projects.category, uploads.img, uploads.des from projects INNER JOIN uploads on projects.pname = uploads.des where projects.category = 'Mobile Application'");
 
        //dd($se);
        return view('amyworks', compact('pim'));

    }
    public function res()
    {
        $pim=DB::select("SELECT projects.pid, projects.pname, projects.description, projects.category, uploads.img, uploads.des from projects INNER JOIN uploads on projects.pname = uploads.des where projects.category = 'Research'");
 
        //dd($se);
        return view('amyworks', compact('pim'));

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
    public function edit(Request $request)
    {
        //
        $pn = $request->get('Ee');
        //$in = Image::where('des',$pn)->get();
        $pm = Project::where('pname',$pn)->get()->first();
        $ip = Image::where('des',$pn)->get()->first();
        //$in = Image::where('des',$pn)->get();
        
        //dd($ip->imgid);
        return view('mwedit',compact('ip','pm'));
        //dd($pm);

        //return view('mwedit',compact('pm','in'));
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
    public function destroy(Request $request)
    {
        //
        //dd('in');
        $pn = $request->get('Ed');
        $in = Image::where('des',$pn)->first();
        $pm = Project::where('pname',$pn)->first();
        $pm->delete();
        $in->delete();
        
        return redirect()->action('AmwCon@index');
    }
}
