<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Hire;
use App\Image;
use App\Perks;
//require 'public\includes\config.php';

use App\Http\Requests;

class HeCon extends Controller
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
            
            'company' => 'required',
            'job' => 'required',
            'pos' => 'required',
            'des' => 'required',
           
            
            
        ]);*/
        $id = $request->get('eid');
        $wd = Hire::where('jid',$id)->first();
        $pn=$wd->job_profile;
        $wd->job_profile=$request->get('jp');
        $wd->rate=$request->get('r');
        $wd->save();
        if($request->hasFile('fileToUpload'))
        {
        $ip = Image::where('des',$pn)->first();
        $ip->des=$request->get('jp');
        $ip->img = request()->file('fileToUpload')->getClientOriginalName();
        $ip->save();
        //$wd->save();
        $file = $request->file('fileToUpload');
        $originalname = $file->getClientOriginalName();
        $path = $file->storeAs('public/Images', $originalname);
        }
        else{
            $ip = Image::where('des',$pn)->first();
        $ip->des=$request->get('jp');
        $ip->save();
        }


        $co = $request->get('at');
        //$co = implode(",", $request->get('at'));
        $jp= $request->get('jp');
        $i=1;
        $host = "localhost";
	$username = "root";
	$password = "";
	$dbName = "portfolio";
	
	$conn = mysqli_connect($host, $username, $password, $dbName);
	
        foreach($co as $c)
        {
            $qr="update perks set project='$jp', pd='$c' where project='$pn' and pid='$i'";
            mysqli_query($conn, $qr);
            //DB::update("update perks set project = '$jp', pd = '$c', pid = $i where project = '$pn'");
            
            $i = $i+1;
            //($co);
        }
        $i=0;
        echo "<script>alert('Data Edited Successfully')</script>.";
        return redirect()->action('AhCon@index');

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
