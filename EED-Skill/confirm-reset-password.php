<?php
if (isset($_POST["reset-password-submit"])) {

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];
    
    if (empty($password) || empty($passwordRepeat)) {

        echo "<center>" . "<div class='alert-danger'>" . "Please fill in the input fields" . "</div>" . "<center>";
        exit();
    }else if($password !== $passwordRepeat){
        echo "<center>" . "<div class='alert alert-danger'>" . "The two password didn't match." . "</div>" . "<center>";
        
        exit();
    }else{

    $currentDate = date("U");

    require 'connection.php';

    $sql = "SELECT * FROM pwdReeset WHERE pwdRessetSelector=? AND pwdResetExpires >= ?";
    
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt, $sql)){

        echo "<center>" . "<div class='alert-alert-danger'>" . "Failed to connect!" . "</div>" . "</center>";
        exit();

    }else{

        mysqli_stmt_bind_param($stmt, "s", $selector);
        
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        
        if(!$row = mysqli_fetch_assoc($result)){

        echo "<center>" . "<div class='alert alert-danger'>" . "You need to re-submit your reset request!" . "<div>" . "</center>"; 
        
        exit();
        }else{

            $tokenBin = hex2bin($validator);
            
            $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

            if($tokenCheck === false){

                echo "<center>" . "<div class='alert alert-danger'>" . "You need to re-submit your reset request." . "</div>" . "</center>";
               
                exit();

            } elseif($tokenCheck === true){

                $tokenEmail = $row['pwdResetEmail'];

                $sql = "SELECT * FROM users WHERE emailUsers=?;";
                
                $stmt = mysqli_stmt_init($conn);
                
                if(!mysqli_stmt_prepare($stmt, $sql)){
            
                echo "<center>" . "<div class='alert-alert-danger'>" . "Failed to connect!" . "</div>" . "</center>";
                exit();

                }else{
                    
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    
                    mysqli_stmt_execute($stmt);
                   
                    $result = mysqli_stmt_get_result($stmt);
                   
                    if(!$row = mysqli_fetch_assoc($result)){

                    echo "<center>" . "<div class='alert alert-danger'>" . "Unable to complete reset request!" . "<div>" . "</center>";
                    
                    exit();
                }else{

                    $sql = "UPDATE users SET pwdUsers=? WHERE emailUsers=?;";

                   $stmt = mysqli_stmt_init($conn);
                    
                   if(!mysqli_stmt_prepare($stmt, $sql)){
                
                        echo "<center>" . "<div class='alert-alert-danger'>" . "Unable to complete request" . "</div>" . "</center>";
                        exit();
                        
                    }else{
                    $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                    
                    mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                    
                    mysqli_stmt_execute($stmt);
                    
                    $sql = "DELETE * FROM users pwdReset WHERE pwdResetEmail=?;"; 
                    
                    $stmt = mysqli_stmt_init($conn);
                   
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                   
                        echo "<center>" . "<div class='alert-alert-danger'>" . "Unable to complete request" . "</div>" . "</center>";
                        exit();

                    }else{
                   
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    
                    mysqli_stmt_execute($stmt);
                    
                    header("Location: login.php?new-passwordupdated");

                    }     

                    }
                }

            }
        }

    }
 }
}
    
}else{
    header("Location: password-reset.php");
}
