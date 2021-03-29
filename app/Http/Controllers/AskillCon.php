<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Skill;
use App\Work;
use App\Http\Controllers\LoginCon;

use App\Http\Requests;
class AskillCon extends Controller
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
        //dd('index');
        $se = Work::all()->toArray();  
        $sed = Skill::all()->toArray();  
        //dd($se);
        return view('askills', compact('se','sed'));
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
        //dd('in');
        $id = $request->get('Ec');
        $wd = Work::find($id);
        //dd($wd);
        return view('wedit',compact('id','wd'));
    }
    public function wedit(Request $request)
    {
        //dd('edit');
        $id = $request->get('Ee');
        $wd = Skill::find($id);
        //dd($wd);
        return view('eedit',compact('id','wd'));
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
    public function wdel(Request $request)
    {

        $id = $request->get('ne');
        $wd = Skill::find($id); 
        //dd($wd);
        $wd->delete();
        return redirect('askills');

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
        //dd($request->get('name'));
        $id = $request->get('name');
        $wd = Work::find($id); 
        // dd($wd);
        $wd->delete();
        return redirect('askills');
    }
    
}
