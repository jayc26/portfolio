<?php 
//session_start();
$role="";
if (isset($_SESSION['username'])){

    $role=$_SESSION['Role'];
}

if($role!="Admin")
{
    //header("Location: myworks.php"); 
}
//require_once 'includes/config.php';

/*$si = "SELECT * FROM projects";
$r = mysqli_query($conn,$si);
if (isset($_POST['all'])){
    $si = "SELECT * FROM projects";
$r = mysqli_query($conn,$si);
}
if (isset($_POST['websites'])){
    $si = "SELECT * FROM projects where category='Website'";
$r = mysqli_query($conn,$si);
}
if (isset($_POST['app'])){
    $si = "SELECT * FROM projects where category='Mobile Application'";
$r = mysqli_query($conn,$si);
}
if (isset($_POST['analytics'])){
    $si = "SELECT * FROM projects where category='Research'";
$r = mysqli_query($conn,$si);
}*/


?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="{{ url('portfolio.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.grid-container {
  display: grid;
  grid-template-columns: 400px 400px 400px;
  grid-gap: 2px;
  float: left;
  padding: 10px;
}

.grid-container > div {
  float: left;
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}


</style>
<script>
function delmw(i)
{
    if(confirm("Are you sure you want to delete"))
    {
    var data = {
												
												i: i
											};
				
											
											
											$.post("delmw.php",data);
											alert('Record Deleted Successfully');
											window.location.assign("amyworks.php");
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
<li><a href="ahire">Hire Me</a></li>

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
<li><a href="hire">Hire Me</a></li>

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
        <section style="margin-left: 70px">
            <br><br><br><br><br>
           
           
            <p ><b style="color: white; font-size:xx-large">MY LATEST WORK</b>
            </br> </br> </br>
            I'm looking to expand my portfolio while I'm on top and while I'm young.</br>
            Jay Chaphekar brings your content to life in stunning clarity.
 </p>
        </section>
        <br>
        <br>
        <section style="margin-left:180px;">
        <form  method="post" action="/amyworks/all" style="float:left">
        {{ csrf_field() }}
            <button style="background:transparent; border-color:aquamarine; color: white; height: 25px" name="all">
                All
            </button>
            </form>
            <form  method="post" action="/amyworks/web" style="float:left">
            {{ csrf_field() }}
            <button style="background:transparent; border-color:aquamarine;color: white; height: 25px"  name="websites">

                    Websites
                </button>
                </form>
                <form  method="post" action="/amyworks/app" style="float:left">
                {{ csrf_field() }}
                <button style="background:transparent; border-color:aquamarine; color: white; height: 25px" name="app">
                        Applications
                    </button>
                    </form>
                    <form  method="post" action="/amyworks/res">
                    {{ csrf_field() }}
                    <button style="background:transparent; border-color:aquamarine; color: white;height: 25px" name="analytics">
                           Analytics
                        </button>
                        </form>
                        <a href="/mwadd"><button style="float:right; margin-right:100px">Add</button></a>
        </section>
       
            
        <section style="float: left;">
        
            <div class="grid-container">
            
                    @foreach($pim as $p)
                <div class="item1" style="float: left;">
                
                        <p style="font-size: 18px; margin-right: 20px;  margin-top: 50px; float: right; width: 10%">  <b>{{$p->description}}</b>
                           <br> {{$p->category}}
                           <br>
                           <br>
                           {{$p->pname}}
                            </p>
                            
                        <img src='{{URL::asset("storage/images"."/".$p->img)}}' alt="" style="height: 220px; margin-top: 10; position: absolute;"/>

            
                        <hr style="width: 200px; height:10px; background-color:darkslategrey; border:1px solid black; border-radius: 5px; margin-top: 200px; margin-left: 200px">
                   
                        <form method="post" style="float:right" action="/amyworks/edit">
                        {{ csrf_field() }}
                    <input type="hidden" name='Ee' value="{{$p->pname}}"  />
                    <button  name="Editw" onclick="return confirm('Are you sure?')">Edit</button>
                    </form>
                    <form method="post" style="float:right" action="/amyworks/delete">
                    {{ csrf_field() }}
                    <input type="hidden" name='Ed' value="{{$p->pname}}"  />
                    <button  name="Dele" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                  

                </div>
                
           @endforeach
                
               
              </div>
        </section>
              
              
   
        <section> <footer style="width:100%; position: fixed; bottom:0">Copyrights Jay Chaphekar 2019 &copy;</footer></section>
       
    </div>
</body>

</html>
