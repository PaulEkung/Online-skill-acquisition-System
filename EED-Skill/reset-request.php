<?php
if(isset($_POST["reset-request-submit"])){

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "www.squarefashion.net/forgottenpwd/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;

    require 'connection.php';

    $userEmail = $_POST["email"];
    
    if(empty($userEmail)){

        echo "You are required to input your email address";

    }elseif(!filter_var($userEmail, FILTER_VALIDATE_EMAIL)){

        echo "Email address is invalid. Please provide a valid email";

    }else{  

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail= ?;";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){

    echo "<center>" . "Failed to connect! Please try again." . "</center>";
   
        
    }else{

mysqli_stmt_bind_param($stmt, "s", $userEmail);
mysqli_stmt_execute($stmt);
    
$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires)
VALUES (?, ?, ?, ?);";

$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){

 echo "<center>" . "<div class='alert alert-danger'>" . "Failed to connect! Please try again." . "</div>" . "</center>";

exit();

}else{

$hashedToken = password_hash($token, PASSWORD_DEFAULT); 

mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);

 mysqli_stmt_execute($stmt);

}

mysqli_stmt_close($stmt);
mysqli_close($conn);

}
    }
$to = $userEmail;
$subject = 'Reset your password for square fashion.';
$message = '<p>We recieved a password reset request. Below is the link to reset your password.
If you did not make this request, you can ignore this email</p>';
$message .= '<p>Here is your password reset link' ."<br>";
$message .= '<a href="' . $url . '">' . $url . '</a></p>';
$headers = "From: square fashion <pauldrums32@gmail.com>\r\n";
$headers .= "Reply-To: pauldrums32@gmail.com\r\n";
$headers .= "Content-type: text/html\r\n";
    
mail($to, $subject, $message, $headers);

header("Location: confirm-reset-password.php?reset=successful");

 }
 else{
    header("Location: password-reset.php");
 }



