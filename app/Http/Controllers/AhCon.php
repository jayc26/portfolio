<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Hire;
use App\Image;
use App\Perks;

use App\Http\Requests;

class AhCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //$pim=DB::select("SELECT jobprofile.jid, jobprofile.job_profile, jobprofile.rate,  uploads.img, uploads.des, perks.project, perks.pd from jobprofile INNER JOIN uploads on jobprofile.job_profile = uploads.des  INNER JOIN perks on jobprofile.job_profile = perks.project ");

        $pim=DB::select("SELECT jobprofile.jid, jobprofile.job_profile, jobprofile.rate,  uploads.img, uploads.des from jobprofile INNER JOIN uploads on jobprofile.job_profile = uploads.des");
        $pr=DB::select("SELECT jobprofile.jid, jobprofile.job_profile, jobprofile.rate,  perks.project, perks.pd from jobprofile INNER JOIN perks where jobprofile.job_profile = perks.project limit 3");
        //dd($pim);
        return view('ahire', compact('pim','pr'));
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
        $pn = $request->get('Eh');
        //dd($pn);
        //$in = Image::where('des',$pn)->get();
        $pm = Hire::where('jid',$pn)->first();
        $pj=$pm->job_profile;
        $ip = Image::where('des',$pj)->first();
        //dd($ip);
       // dd($pm->jid);//
       $pj=$pm->job_profile;
       //dd($pj);
       //$pr=DB::select("SELECT * from perks where project = '$pj'");

        $pe = Perks::where('project',$pj)->get();
        //dd($pe);
        return view('hedit', compact('pm','ip','pe'));

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
        $pn = $request->get('Ed');
        $ph = Hire::where('jid',$pn)->first();
        $pj=$ph->job_profile;
        $in = Image::where('des',$pj)->first();
        $pm = Perks::where('project',$pj)->first();
        $ph->delete();
        $pm->delete();
        $in->delete();
        return redirect()->action('AhCon@index');
    }
}
