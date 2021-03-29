<?php 
//session_start();
//use  App\Http\Controllers\LoginCon;
$role="";
if (isset($_SESSION['username'])){

    $role=$_SESSION['Role'];
}

if($role!="Admin")
{
    //return view("login");
    //return redirect()->action('LoginCon@index');
    //header("Location: skills.php"); 
}
//require_once 'includes/config.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="portfolio.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function delw(i)
{
    if(confirm("Are you sure you want to delete"))
    {
    // var data = {
												
	// 											i: i
	// 										};
				
											
											
	// 										$.post("delw.php",data);
	// 										alert('Record Deleted Successfully');
	// 										window.location.assign("askills.php");
    }
    else
    {return false;}
}

function dele(i)
{
    if(confirm("Are you sure you want to delete"))
    {
    var data = {
												
												i: i
											};
				
											
											
											$.post("",i);
											alert('Record Deleted Successfully');
											//window.location.assign("askills.php");
    }
    return false;
}
</script>

</head>

<body style="background-color:#05021B">
        <div id="wrapper">
        <header style="top: 0; position:fixed;width:100%; text-align: center">
            
                <nav>
                        
                        <ul>
                             <li> <h1 style="color: aqua"> Jay Chaphekar </h1>
                                  <!-- <img src="name.png" alt="name"/> --><li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li><li>   </li><li>   </li><li>   </li><li>   </li><li>   </li><li>   </li><li>   </li><li>   </li><li>   </li>
                                 <?php

if($role=="Admin")
{?>
<li><a href="index">Home</a></li>
<li><a href="askills">My Skills</a></li>
<li><a href="amyworks">Works</a></li>
<li><a href="recommendation">Recommendation</a></li>
<li><a href="aHire">Hire Me</a></li>

<li><a href="contact">Contact Me</a></li>
<?php if (!isset($_SESSION['username'])){ ?>
<li><a href="login">Login</a></li>
<li><a href="register">Sign Up</a></li>
<?php } else
{?>
<li>

                                      <a href="logout">
                                          Logout
                                      </a>
                                      
                                      <?php } ?>
    
    </li>
<?php } 
else
{
?>
<li><a href="index">Home</a></li>
<li><a href="skills">My Skills</a></li>
<li><a href="myworks">Works</a></li>
<li><a href="recommendation">Recommendation</a></li>
<li><a href="Hire">Hire Me</a></li>

<li><a href="contact">Contact Me</a></li>
<?php if (!isset($_SESSION['username'])){ ?>
<li><a href="login">Login</a></li>
<li><a href="register">Sign Up</a></li>
<?php } else
{?>
<li>

                                      <a href="logout">
                                          Logout
                                      </a>
                                      
                                      <?php } ?>
    
    </li>

<?php }?>

                    
                        </ul>

                            
                    
                        </ul>
                    </nav>
        </header>

        <section style="width: 30%; margin-top: 80px; margin-left: 5%"> 
                <p  style="float: right; margin-left: 400px"><b style="color: white; font-size:55px;">SKILLS & EXPERTISE</b>
               
               
                </p>
                <p style="margin-right:0px; float: right">Web Developer and Front end designer.</p> 
            </br>
           
            <img src="images//profile1.png" alt="profile" style="height: 70%; width: 70%;float: right"/>
        </section>
        <section style=" width:50%;float: right; margin-left: 550px; margin-top: 20px; position: absolute">
            <div style="position: absolute;margin-left: 100px;">
            <img src="images//branding.png" alt="" style="border-radius: 50%; background-color:white;"/>
            <p><b>Branding</b> <br><br>Branding your product</p>
            </div>
            <div style="position: absolute; margin-left:500px; margin-top: 10px">
            <img src="images//paint.png" alt="" style="border-radius: 50%; background-color:white;" />
            <p><b>Designing</b> <br><br>Designing with grace</p>
        </div>
        <div style="position: absolute; margin-top: 160px;margin-left: 100px;">
            <img src="images//desktop.png" alt="" style="  position: relative;border-radius: 50%; background-color:white; margin-top: 10px "/>
            <p><b>Technology</b> <br><br>Looks as they should be</p>
        </div>
        <div style="position: absolute; margin-left:500px; margin-top: 190px">
            <img src="images//code.png" alt="" style="border-radius: 50%; background-color:white"/>
            <p><b>Coding</b> <br><br>Creating the masterpiece</p>
        </div>
        <div style="position: absolute; margin-left:100px; margin-top: 300px">
            <br>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label style="color: white; font-size:24px">Web Developer</label> &nbsp; &nbsp;<label style="font-size: 24px"> PHP Developer</label>
   <br>
    <img src="images//device01.png" alt="img" style="width: 30%;"/>
    <img src="images//device02.png" alt="img"  style="width: 30%"/>
    <img src="images//device03.png" alt="img"  style="width: 30%"/>
    </p>
        </div>
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br> <br>
        <br>
        <br> <br>
        <br>
        <br> <br>
        <br>
        <br> <br>
        <br>
        <br> <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br> <br>
        <br>
        <br>
        <section style="margin-left: 70px">
            
            <br><br><br>
           
            <p ><b style="color: white; font-size:xx-large">WORK EXPERIENCE</b>
            </br> </br> </br>
            I'm looking to expand my portfolio while I'm on top and while I'm young.</br>
            Jay Chaphekar brings your content to life in stunning clarity.
            <a href="/wadd"><button style="float:right; margin-right:100px">Add</button></a>
            </p>
        </br>
        <br>
        
       
        
       
        
              </section>
             
            <section style="margin-left: 70px">
            @foreach($se as $s)
            <?php 
                    //dd($s['id']);
                    ?>
                    <form method="post" action="/askills/edit">
                    {{ csrf_field() }}
                    <input type="hidden" name='Ec' value="{{$s['id']}}"  />
                    <button style="float:right; margin-right:80px;" onclick="return confirm('Are you sure?');" name="Edit">Edit</button>
                    </form>
                    <form method="POST" action="/askills/destory">
                    {{ csrf_field() }}
                    
                    <input name="name" type="hidden" value="{{$s['id']}}">
                    <button type="submit" style="float:right; margin-right:50px;" onclick="return confirm('Are you sure?');" name="Del" >Delete</button>
                    </form>
                    <div class="vl" style=" border-left: 2px solid white;
                    height: 180px;
                    position: absolute;
                    left: 50%;
                    margin-left: -3px;"></div>
                    
                    <section style="position:absolute;margin-left:700px; margin-top:10px">
                    
                    
                    <p ><h1>{{$s['job_type']}}</h1><br>
                    {{$s['description']}}
                   
                    </p>
                </section>
                
                   <p><b style="font-size:small;color:white">{{$s['start_month']}}</b> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:small;color:white">{{$s['end_month']}}</b>
                    <br>
                    <label style="font-size: xx-large; color: aqua">{{$s['start_year']}}</label> <label style="font-size:50px; color: aqua">  - </label ><label style="font-size: xx-large; color: aqua">{{$s['end_year']}}</label>
                    <br> <br> <br>
                    <label style="font-size:16px; color:white">{{$s['company_name']}}</label> 
            
                    <br>
                    <label style="font-size:12px; color:#77777">{{$s['pos']}}</label> 
                </p>
                
               <br>
               <br>
                <hr style="width: 90%">  
                <br>
                <br>
                <br>
                @endforeach


            </section>
           
            <section style="margin-left: 70px">
            
            
                <br><br><br>
               
                <p ><b style="color: white; font-size:xx-large">Education</b>
                </br> </br> </br>
                I'm looking to expand my portfolio while I'm on top and while I'm young.</br>
                Jay Chaphekar brings your content to life in stunning clarity.
                <a href="/eadd"><button style="float:right; margin-right:100px">Add</button></a>
                </p>
            </br>
            <br>
            @foreach($sed as $ed)
            <form method="post" action="/askills/edite">
            {{ csrf_field() }}
                    <input type="hidden" name='Ee' value="{{$ed['id']}}"  />
                    <button style="float:right; margin-right:80px;" onclick="return confirm('Are you sure?')"  name="Edite">Edit</button>
                    </form>
                    <form method="post" action="/askills/destorye">
                    {{ csrf_field() }}
                    
                    <input name="ne" type="hidden" value="{{$ed['id']}}">
                    <button style="float:right; margin-right:50px;" onclick="return confirm('Are you sure?')" name="Dele">Delete</button>
                    </form>
            <div class="vl" style=" border-left: 2px solid white;
            height: 180px;
            position: absolute;
            left: 50%;
            margin-left: -3px;"></div>
           
            <section style="position:absolute;margin-left:700px; margin-top:10px">
            <p ><h1>{{$ed['degree']}}</h1><br>
            {{$ed['d_name']}}
               
            </p>
        </section>
           <p><b style="font-size:small;color:white">{{$ed['start_month']}}</b> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:small;color:white">{{$ed['end_month']}}</b>
            <br>
            <label style="font-size: xx-large; color: aqua">{{$ed['start_year']}}</label> <label style="font-size:50px; color: aqua">  - </label ><label style="font-size: xx-large; color: aqua">{{$ed['end_year']}}</label>
            <br> <br> <br>
            <label style="font-size:16px; color:white">{{$ed['institution_name']}}</label> 
    
            <br>
            <label style="font-size:12px; color:#77777">{{$ed['type']}}</label> 
        </p>
        
       <br>
       <br>
        <hr style="width: 90%">  
        <br>
        <br>
        @endforeach 
                  </section>
            
    
               
                   
                
        <br>
        <br>
        <br>
        <br>
        <section> <footer style="width:100%; position:static; bottom:0">Copyrights Jay Chaphekar 2019 &copy;</footer></section>
       
    </div>
</body>

</html>
