<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Hire;
use App\Image;
use App\Perks;

use App\Http\Requests;

//use Illuminate\Http\Request;

class HaCon extends Controller
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
            'jp' => 'required',
            'r' => 'required',
            'at' => 'required',
            'fileToUpload' => 'required',
            
            
            
        ]);

        $wd = new Hire;
        $im = new Image;
        $p = new Perks;
        //$wd = Skill::find($id);
        //$wd->pname=$request->get('pn');
        $wd->job_profile=$request->get('jp');
        $wd->rate=$request->get('r');
        $wd->save();
        $im->img = request()->file('fileToUpload')->getClientOriginalName();

        $file = $request->file('fileToUpload');
        $originalname = $file->getClientOriginalName();
        $path = $file->storeAs('public/Images', $originalname);
        //$ig=request()->file('fileToUpload');
        //$ig->save('/Images');

        //$ig = move(public_path('/Images'), request()->file('fileToUpload')->getClientOriginalName());
        $im->des = $request->get('jp');
        $im->save();
        $co = $request->get('at');
        //$co = implode(",", $request->get('at'));
        $jp= $request->get('jp');
        $i=1;
        foreach($co as $c)
        {
            DB::insert("INSERT INTO perks (project, pd, pid) VALUES ('$jp', '$c', $i)");
            
            $i = $i+1;
        }
        //dd($co);
        //dd(count($co))
        /*$p->pd = implode(",", $request->get('at'));
        foreach($p)
        //for($i=0;$i<=count($co); $i++)
        {
            $p->project=$request->get('jp');
        }*/
        echo "<script>alert('Data Added Successfully')</script>.";
        return redirect()->action('AhCon@index');

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
