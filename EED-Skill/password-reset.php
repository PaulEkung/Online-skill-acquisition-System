
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap3/css/bootstrap.css">
    <title>Password Reset</title>

    <style type="text/css">

    input[type="submit"]{
        width: 24rem;
        border-radius: 1;
        
    }

    input[type="email"]:placeholder-shown{
        border: 2px solid red !important;
    }
    input[type="email"]{
        border: 2px solid dodgerblue;
    }
    
    </style>
</head>
<body>

<div class="container">

<div class="row">

    <div class="container">
        <div class="row">

<div class="col-sm-3"></div>
<div class="col-sm-6">

<br>
<br>
<br>
<br>
<br>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3><b>Reset Password</b></h3>
            <p>You will recieve an E-mail with instructions on how to reset your password..</p>
        </div>
        <br>
        <div class="panel-body">

        <form class="password-reset-form" action="reset-request.php" method="post">

            <?php 

            if(isset($_POST["email"])){

                $userEmail = $_POST["email"];
            
            if(empty($userEmail)){
                echo "blablablablabla";
            }
        }
            
            ?>

            <input type="email" class="form-control" name="email" placeholder="Enter your e-mail address..">
            <br>
            <br>

            <input type="submit" value="Recieve new password via e-mail"
             name="reset-request-submit" class=" btn btn-primary" style="outline:none">
        
            </form>

                <?php

                if (isset($_GET["reset"])) {
                    if ($_GET["reset"] == "successful") {
                        echo "<p class='signupsuccess'> A password reset authentification has been sent to your e-mail.</P>" . "<br>";
                        echo "Please, kindly check your e-mail.";

                    }
                   
                }

                ?>

        </div>

    </div>
</div>
<div class="col-sm-3"></div>
</div>
</div>
</div>
</div>
    
</body>
</html>

