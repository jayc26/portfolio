<?php



if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
$role="";
/*if (isset($_SESSION['username'])){

  $role=$_SESSION['Role'];
}*/

//$aname="";
$l_err="";
//require_once 'includes/config.php';

// LOGIN USER
 

  ?>


<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="portfolio.css">


<style>
      body{
  font-family: 'Open Sans', sans-serif;
  background:#3498db;
  margin: 0 auto 0 auto;  
  width:100%; 
  text-align:center;
  margin: 20px 0px 20px 0px;   
}

p{
  font-size:12px;
  text-decoration: none;
  color:#ffffff;
}

h1{
  font-size:1.5em;
  color:#525252;
}

.box{
  background:white;
  width:300px;
  border-radius:6px;
  margin: 0 auto 0 auto;
  padding:0px 0px 70px 0px;
  border: #2980b9 4px solid; 
}

.email{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:250px;
  color:#AAAAAA;
  margin-top:10px;
  font-size:1em;
  border-radius:4px;
}

.password{
  border-radius:4px;
  background:#ecf0f1;
  border: #ccc 1px solid;
  padding: 8px;
  width:250px;
  font-size:1em;
}

.btn{
  background:#2ecc71;
  width:125px;
  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #27ae60 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  float:left;
  margin-left:16px;
  font-weight:800;
  font-size:0.8em;
}

.btn:hover{
  background:#2CC06B; 
}

#btn2{
  float:left;
  background:#3498db;
  width:125px;  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #2980b9 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  margin-left:10px;
  font-weight:800;
  font-size:0.8em;
}

#btn2:hover{ 
background:#3594D2; 
}
        </style>
        <script>
        function val()
        {
        var e = document.getElementById('e').value;
        var p = document.getElementById('p').value;
        if(e=="" )
        {
          //alert('Invalid Name')
          document.getElementById('lerr').innerHTML ="Please Enter Valid Email";
                    return false;
        }
        if(p=="" )
        {
          document.getElementById('lerr').innerHTML ="Please Enter Valid Password";
                    return false;
        }
        }
        </script>


</head>

<body style="background-color:#05021B">
        <div id="wrapper">
            <header style="top: 0; position:fixed;width:100%">
            
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

    <a href="/logout">
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

    <a href="/logout">
      Logout
    </a>
    
    <?php } ?>
    
    </li>

<?php }?>

                    
                        </ul>


                            
                    
                        </ul>
                    </nav>
        </header>
        <section style="align-content: center;align-self:center; margin-left: 20px">
            <br>
            <br>
            <br>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

            <form method="post" action="/login" method="post">
            {{ csrf_field() }}
            <div class="box">
            <h1>Log In</h1>
            @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        
            <center>
                                                <span class="help-block" style="color:red;font-size:small" id="lerr" name="lerr"><?php if (isset($_SESSION['Ler'])){ echo $_SESSION['Ler']; unset($_SESSION["Ler"]); } ?></span>
												
		</center>
            <input type="email" value="Email" name="username" id="e" class="email" />
              
            <input type="password" value="Password" name="password" id="p" class="email" />
              
            <a href="#"><div > <button class="btn" name="login_user" onclick="val()">Sign In </button></div></a> <!-- End Btn -->
            
            <a href="register.php"><div id="btn2">Sign Up</div></a> <!-- End Btn2 -->
              
            </div> <!-- End Box -->
              
            </form>
            
           
              
                <form  method="post" action="">
                       
                      
                        <div class="container">
                          </section>
        <br>
        <br>
        <br>
        <br>
        <section> <footer>Copyrights Jay Chaphekar 2019 &copy;</footer></section>
       
    </div>
</body>

</html>