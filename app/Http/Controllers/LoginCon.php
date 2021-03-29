<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

use App\Http\Requests;

class LoginCon extends Controller
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
    public function login(Request $request){
        $this->validate(request(), [
            'username' => 'required|email',
            'password' => 'required|min:6',
           
            
            
        ]);
        $email=$request->username;
            $password=$request->password;
            $table = Login::where('email',$email)->where('Password',$password)->first();
            //dd($table);
            
            //dd($ps);
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if(empty($table))
            {
                    //session_start();
                    $l_err="Wrong Username or Password";
                    $_SESSION['Ler']=$l_err;
                    return view("login");
            }
            else{
                $ps=$table->Password;
                $role=$table->Role;
                //session_start();
                $_SESSION['username'] = $email;
                    $_SESSION['Role']=$role;
                    
					if($role=="User")
					{
					//echo "redirecting...";
					return view("index");
					}
					elseif($role=="Admin"){
						return view("index");
					}
					else{
                        $l_err="Wrong Username or Password";
                        return view("login");
						//header("Location: login.php");
					}

            }
            
        //    if(($table['email']=>$email) and ($table['Password']=>$password]))
        //    {
        //         //return redirect()->intended('/');
        //         return redirect()->route('Home');
        //    }
            
           //return Redirect::to('l');
        }
    
}
