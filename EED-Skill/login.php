<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap3/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap3/fonts/glyphicons-halflings-regular.eot">
    <style type="text/css">
    @import url("https://fonts.googlealis/css?family=Anonymous+Pro");


{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins" sans-serif;

} 


body{

    font-weight: bold;
    min-height: 100vh;
    display: flex;
    justify-content: center;
     background: url("images/coder.jpg") center center no-repeat;
    background-size: cover;
    /* background-attachment: fixed; */
    background-position: fixed;
    background-repeat: no-repeat;
    background-blend-mode: color-burn;
    align-items: center;
}

@keyframes bg-animation{

        0%{background-position: left;}
        100%{background-position: right;}

    }

.form-control{

    border-top: none;
    border-right: none;
    border-left: none;
    border-bottom: 2px solid dodgerblue;
    background: transparent;
    

}

#button{
    width: 45rem;
    background: #f822;
    border: 0.2px solid #f2f2f2;
    color: #f2f2f2;
    padding: 1rem;
    box-shadow: -2px -2px 10px 2px rgb(0,0,0.2),
   inset 2px 10px 10px rgb(0,0,0,0.15),
   inset 2px 10px 15px rgb(0,0,0,0.15);
   
       
   }
   




#signup-btn{
    color: #f4f4f4;
    box-shadow: -2px -2px 10px 2px rgb(0,0,0.2),
   inset 2px 10px 10px rgb(0,0,0,0.15),
   inset 2px 10px 15px rgb(0,0,0,0.15);
    width: 20rem;
    padding: 1rem;
    background: #f82;

}

span{
    font-size: 3rem;
    margin-left:10px;
}

span:hover{

    color: blue;
    cursor: pointer;
}

p{
    text-transform: uppercase;
    font-family: consolas;

}

#signup-panel{
    
    padding: 10px;
}

#jumbotron{
    background: transparent;
    border: 1px solid #f3f3f3;
}

 .form-control{
    background: transparent;
    color: #f3f3f3; 
} 

input[type="password"]:placeholder-shown{
    border: 2px solid red !important;
}
input[type="password"]{
    border: 2px solid dodgerblue;
    
}

input:not(:placeholder-shown){
    font-size: 1.5rem;

}

input[type="checkbox"]{
    margin-left: 10rem;
    margin-top: 4rem;
}




a[href="password-reset.php"]:hover{
    color: #f3f3f3;
}





    
    
    </style>

</head>
<body style="background-color:rgba(18, 18, 19, 0.87)">

<div class="container">

<div class="row">

<div class="col-md-3"></div>

<div class="col-md-6">
<br>

    
<form class="login-form" action="login.php" method="POST">

<!-- <div class="aler alert-danger" style="padding: 1rem; border-radius: 1.2rem;"> -->
<?php
session_start();
require "connection.php";
if(isset($_POST['submit']))
{
    
    //something was posted
    $reg_number = $_POST['reg'];
    $password = $_POST['password'];
    if(empty($reg_number) || empty($password))
    {
        echo "<center>" . "<div class='alert alert-danger'
         style='background:transparent;border:2px solid red; color:red'>" . 
        "All input fields are required with some valid information." . "</div>" . "</center>";

    }
        elseif(!empty($reg_number) || !empty($password)){

        $sql = "SELECT * FROM users WHERE reg_number = ?";

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){

            echo "<center>" . "<div class='alert alert-danger' style='color:red;
             background: transparent; border: 2px solid red'>"
             . "Unable to perform request" . "</div>" . "</center>";

        }else{
            mysqli_stmt_bind_param($stmt, "s", $reg_number);

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)){

                $passCheck = password_verify($password, $row['password']);

                if($passCheck == false){

                 echo "<center>" . "<div class='alert alert-danger' style='color:red;
                  background: transparent; border: 2px solid red'>"
                 . "Incorrect username or password.." . "</div>" . "</center>";

                }elseif($passCheck == true){
                    
                    $_SESSION['sessionId'] = $row['id'];
                    $_SESSION['sessionUser'] = $row['username'];
                    header("location: index.php");
                    die;

                }else{

                    echo "<center>" . "<div class='alert alert-danger' style='color:red;
                    background: transparent; border: 2px solid red'>"
                    . "Incorrect username or password.." . "</div>" . "</center>"; 
                }

            }else{

               echo "<center>" . "<div class='alert alert-danger' style='color:red;
                background: transparent; border: 2px solid red'>"
               . "Incorrect username or password.." . "</div>" . "</center>";
         
            }
        
        
        }
    }
}

        //read from database
//         $query = "SELECT * FROM users WHERE username = '$username' limit 1";
//        $result = mysqli_query($conn, $query);
//        if($result)
//        {
//        if($result && mysqli_num_rows($result) > 0)
//        {
//            $user_data = mysqli_fetch_assoc($result);
           
//            if($user_data['password'] === $password)
//            {
//                $_SESSION['user_id'] = $user_data['user_id'];
//                header("location: index.php");
//                die;

               
              
//          }
    

//      }

//  }

//     echo "<center>" . "<div class='alert alert-danger' style='color:red;
//      background: transparent; border: 2px solid red'>"
//      . "Incorrect username or password.." . "" . "</div>" . "</center>";
 
   
?>
<!-- </div> -->

<br>

<div class="jumbotron" id="jumbotron">

<div class="form-group">

<input type="text" class="form-control" name="reg" placeholder="ENTER REG. NUMBER">

</div>

</div>



<div class="jumbotron" id="jumbotron">

<div class="form-group">

<input type="password" class="form-control" name="password"
 placeholder="ENTER PASSWORD" id="pwd">

</div>

<input type="checkbox" onclick="getValue()" 
style="cursor: pointer;"> <txt style="color: #c5c5c5"> See password<txt>

</div>



<script type="text/javascript">

function getValue() {

    var x = document.getElementById("pwd");
    if (x.type == "password") {
    x.type="text";
    }
    else{
        x.type="password";
    }
}

  //#endregion

    function myFunc(element){
        var currentColor = element.style.color;
        if(currentColor =="black"){
         element.style.color ="yellow";
        }else{
            element.style.color ="black";
        }
    }
    
    </script>

   &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
    <a href="password-reset.php">Forgotten password?</a> 

    <br>
    <br>

<center><input type="submit" value="LOGIN" name="submit"  id="button"></center>
<br>

<div class="jumbotron" id="signup-panel">
<center><p class="text-primary">Still new here?</p></center>
<center><a href="register.php" type="button" class="btn btn" value="Sign up" id="signup-btn">SIGN UP</a></center>
</div>

</form>

<?php

if(isset($_GET["newpwd"])){
    if($_GET["newpwd"] == "passwordupdated"){

        echo "<p class='signupsuccess'>" . "Your password has successfully been reset." . "</p>";
    }
}

?>

</div>

<div class="col-md-3"></div>

</div>


</div>



</body>


</html>