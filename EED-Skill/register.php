<?php 
    session_start();
    require 'connection.php';
    require 'server.php';
   
    
    if(isset($_POST['register'])){

        $username = $_POST["username"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $department = $_POST["dept"];
        $reg_number = $_POST["reg"];
        $password = $_POST["password"];
        $unique_id = bin2hex(random_int(666, 999));

        if(!empty($username) && !empty( $email) && !empty($number) && !empty($department) && !empty($reg_number) &&!empty($password))
        {
           
        
           $sql = "SELECT username FROM users WHERE username = ?";
    
            $stmt = mysqli_stmt_init($conn);
    
             if(!mysqli_stmt_prepare($stmt, $sql)){
    
             echo "failed to connect";
    
              }else{
    
                mysqli_stmt_bind_param($stmt, "s", $username);
    
                mysqli_stmt_execute($stmt);
    
                mysqli_stmt_store_result($stmt);
    
                $rowCount = mysqli_stmt_num_rows($stmt);
            
                if($rowCount > 0){
            
                echo "<center>" . "<div class='alert alert-danger'
                style='background:transparent;border:2px solid red; color:red;padding:7px'>" . 
                "The username '$username' already exist." . "</div>" . "</center>";
    
                 }else{ 
    
                $sql = "INSERT INTO users (unique_id, username, email, number, department, reg_number, password)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
    
               $stmt = mysqli_stmt_init($conn);
    
              if(!mysqli_stmt_prepare($stmt, $sql)){
                  echo "failed to connect";
                    
              }else{
                    
               $hashPass = password_hash($password, PASSWORD_DEFAULT);
    
              mysqli_stmt_bind_param($stmt, "sssssss", $unique_id, $username, $email, $number, $department, $reg_number, $hashPass);
    
               mysqli_stmt_execute($stmt);
            //    mysqli_query($conn, $sql);
                
               header("Location: login.php");
               die;
           }
    
    }
           
     }
    
     mysqli_stmt_close($stmt);
     mysqli_close($conn);
    }

    }
   
    
    ?>

    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="bootstrap-5.1.3/">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="screen">
    <style type="text/css">
    @import url("https://fonts.googlealis/css?family=Anonymous+Pro");

/* @import url('wide.css') screen and (min-width:800px); */


    *{
        margin: 0;
        padding: 0; 
        box-sizing: border-box;
        /* font-family: consolas; */

        }
        
    body{
        min-height: 100vh;
        justify-content: center;
        display: flex;
        align-items: center;
        background-blend-mode: color-burn;
        background-image: url("images/snap-guys.jpg");
        background-repeat: no-repeat;
        background-attachment:fixed;
        background-size:cover;
        background-position: fixed;
        animation: bg-animation 25s infinite alternate;
    }

    @media (max-width:500px){
        #span{
            display: none;
        }
    }
    @media (max-width:765px){
        #span{
            display: none;
        }
    }

    
    

    @keyframes bg-animation{
        0%{background-position: left;}
        100%{background-position: right;}
    }

    /* :root{
        --gradient: linear-gradient(
            60deg,
            #845ec2,
            #d65db1,
            #ff6f91,
            #ff9671,
            #ffc75f,
            #f9f871
            
        );
    } */

    h2{
        text-align: center;
    }

    .tittle{
        font-weight: bold;
        color: #f3f3f3;
        font-size: 5rem;
        padding: 5%;
        line-height: 1.3;
        margin: 0;
        text-transform: uppercase;
        /* background-image: var(--gradient); */
        background-clip: text;
        /* animation: bg-animation 5s infinite alternate; */
        text-shadow: 1px 1px 1px  #919191,
        1px 1px 1px  #919190,
        1px 2px 1px  #919190,
        1px 3px 1px  #919190,
        1px 4px 1px  #919190,
        1px 5px 1px  #919190,
        1px 6px 1px  #919190,
        1px 7px 1px  #919190,
        1px 8px 1px  #919190,
        1px 9px 1px  #919190,
        1px 10px 1px  #919190,
        /* 1px 18px 1px  #919190,
        1px 22px 1px  rgba(16, 16, 16, 0.4), */
        1px 25px 1px  rgba(16, 16, 16, 0.4),
        1px 3px 1px   rgba(16, 16, 16, 0.4);
    }

    /* .line1{
        position: relative;
        margin: 0 auto;
        top:50%;
        width: 24rem;
        overflow: hidden;
        white-space: wrap;
        transform: translateZ(50%)
    } */

    /* .anim-typewriter{
        animation: typewriter 3.5s
        steps(50) 1s 1 normal both,
        blinkTextCursor 500ms steps(50) infinite normal

    } */

    /* @keyframes typewriter{
        from{width: 0;}
        to{width: 35rem;}
    }

    @keyframes blinkTextCursor{
        from{border-right-color: transparent;}
        to{border-right-color: transparent;}
    } */

    .form-control{
        border: 2px solid dodgerblue;
        border-top: none;
        border-left: none;
        border-right: none;
        background: transparent;
        font-weight: bold;
        font-size: 15px;
        
    }

    #primary{
        
        /* border: none; */
        width: 100%;
        outline: none;
        left: 45%;
        padding: 1rem;
        font-style: auto;
        font-weight: bold;
        font-size: 2rem;
        text-transform: uppercase;
        background: dodgerblue;
        /* box-shadow: -2px -2px 10px 2px rgb(0,0,0.2); */
       /* inset 2px 10px 15px rgb(0,0,0,0.15), */
       /* inset 2px 10px 15px rgb(0,0,0,0.15); */
    
        
    }

    #primary:hover{
        background-color: transparent;
        -webkit-transition-duration: 0.7s;
        transition: 0.7s;
        box-shadow: -2px -2px 10px 2px rgb(0,0,0.2),
       inset 2px 10px 10px rgb(0,0,0,0.15),
       inset 2px 10px 15px rgb(0,0,0,0.15);
    
    }

    txt{
        font-family: 'Courier New', Courier, monospace;
        padding: 20px;
        padding-bottom: 20px;
        font-size: 7rem;
    
    }

    #span{
        left: 104%;
        top: -8rem;
        bottom: 0;
        margin: 0;
        border-radius: 10px;    
        background: orange;
        font-size: 2rem;
       color: aliceblue;
       
       
       
    }

    .jumbotron{
        border-top-width: 10rem ;
        box-sizing: border-box;
        
        
    }

       
    #psw{
        border: 2px solid dodgerblue;
        border-top: none;
        border-left: none;
        border-right: none;
        background-color: transparent;
        font-weight: bold;
    
    }


    a{
        width:20rem;
    
    }

    #login:hover{

        background-color: transparent;
        color: #f3f3f3;
        -webkit-transition-duration: 1s;
        transition-duration: 1s;
        box-shadow: -2px -2px 10px 2px rgb(0,0,0.2),
       inset 2px 10px 10px rgb(0,0,0,0.15),
       inset 2px 10px 15px rgb(0,0,0,0.15);
    
        
    }


    #p{
        font-weight: 700;
        text-align: center;
        text-transform: uppercase;
        font-size: 17px;
        line-break: auto;
        font-family: consolas;
    }

    /* #eye{
        font-size: 3rem;
        bottom:0;
        top: 5rem;
        left: 10rem;
        color: #f9f9f9;
    }

    #eye:hover{

        color: dodgerblue;
        -webkit-duration-transition: -10s;
        transition: -10s;
    } */

    #panel{
        padding: 1.5rem;
        background:  #f822;
        padding: 0;
        /* background: linear-gradient(180deg, #333); */
    

    }

    #container{
        background: #f823;
        box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
    }

    .form-control{
        color: #f3f3f3;
    }

    input[type="password"]:placeholder-shown{
        border: 2px solid red !important;
    }
    input[type="password"]{
        border: 2px solid dodgerblue !important;
    }
    input[type="email"]:placeholder-shown{
        border: 2px solid red !important;
    }
    input[type="email"]{
        border: 2px solid dodgerblue !important;
    }

    input[type="checkbox"]{
        margin: 0 0 0 0;
    }

    i{
        color: #f2f2f2;
    }

    

    </style>

 </head>
 

  <body style="background-color:rgba(18, 18, 19, 0.87)">


    <div class="page-header"></div>
    <div class="container">
    <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
    <br>
    <br>
    <a href="home.php" class="glyphicon glyphicon-circle-arrow-left" style="font-size:3rem"></a>
    <div class="panel panel-secondary" id="panel">

    <h2 class='tittle line1 anim-typewriter'><txt>Web Technology</txt></h2>

   </div>
    <br>

    

    <form class="registration-form" action="register.php" method="post">

     <?php include("errors.php"); ?>

    <div class="form-group">

     
     <div class="jumbotron" id="container">
    
  <input type="text" class="form-control" name="username" placeholder="ENTER FULLNAME">
  <span class="glyphicon glyphicon-user btn btn-light" id="span"></span> 

  <?php 
  // checks valid username
     
     
//  if(is_numeric($username)){

//     echo "<center>" . "<div class='alert alert-danger'
//     style='background:transparent;border:2px solid red; color:red; padding:4px'>" . 
//    "<B>Invalid username format." . "<br>" . "Username must NOT consist of numeric values olnly</B>" . "</div>" . "</center>";


//  }
          
     

     ?>
   
   
   </div>
    
    <div class="jumbotron" id="container">
    
   <input type="email" class="form-control" name="email" placeholder="ENTER EMAIL">

   <span  class="glyphicon glyphicon-envelope btn btn-light" id="span"></span> 

   <!-- <?php 

   //validating email address entered by the user.
   
   if(isset($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
       echo  "Invalid email format";
       $valid = false;
   }

   ?> -->
   
   </div>
    <div class="jumbotron" id="container">

    <input type="tel"

    class="form-control" name="number" placeholder="ENTER PHONE NUMBER">

   <span class="glyphicon glyphicon-earphone btn btn-light" id="span"></span> 

   
   </div>
    <div class="jumbotron" id="container">

    <input type="text"

    class="form-control" name="dept" placeholder="ENTER DEPARTMENT">

   <span class="glyphicon glyphicon-earphon btn btn-light" id="span"></span> 

   
   </div>
    <div class="jumbotron" id="container">

    <input type="text"

    class="form-control" name="reg" placeholder="ENTER REG. NUMBER">

   <span class="glyphicon glyphicon-earphon btn btn-light" id="span"></span> 

   
   </div>
    <div class="jumbotron" id="container">
    
   <input type="password" class="form-control" name="password"  placeholder="INPUT PASSWORD" id="pwd">
   <span style="top: -8.5rem" class="glyphicon glyphicon-lock btn btn-light" id="span"></span> 
   <br>
   <br>
   <input type="checkbox" onclick="getvalue()" style="margin-left:1px;cursor:pointer"> <strong style="color:#f1f1f1"> See password</strong>
   </div>

   
   <br>

   <script type="text/javascript">

    function getvalue() {

        var x = document.getElementById("pwd");

        if (x.type =="password") {
            
        x.type = "text";
        }
        else{
            x.type = "password";
        }
    }  
    </script> 

   <input type="submit" value=" Sign Up" class="btn btn-primary bg-gradient" id="primary" name="register">

    
     </div>
     <br>

     <div class="jumbotron" id="container-login" style="padding: 10px;">
    
    <p class="text-primary message" id="p">Already registered?</p>
  <center>

  <a href="login.php" style="font-weight: bold; background: #f82; color: #f3f3f3" type="button" class="btn btn bg-gradient"
   id="login">LOGIN</a>
  </center>
    
    
    </div>
 
    
    </form>
    
    </div>
    <div class="col-sm-3"></div>
    </div>
    </div>

    
 <script src="bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 <script src="bootstrap-5.1.3/dist/js/bootstrap.min.js"></script> 
  </body>
   </html>