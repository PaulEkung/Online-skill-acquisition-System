<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap3/css/bootstrap.css">
    <title>Create-New-Password</title>
</head>
<body>

<?php

$selector = $_GET["selector"];
$validator = $_GET["validator"];

if (empty($selector) && empty($validator)) {

echo "<div class='alert alert-danger'>" . "<b>Sorry, we could not validate your request!</b>" . "</div>";
    
}else{
    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {

        ?>

        <form action="confirm-reset-password.php" method="post">
        
        <input type="hidden" name="selector" value="<?php echo $selector ?>">
        <br>
        <input type="hidden" name="validator" value="<?php echo $validator ?>">
        <br>
        <input type="password" name="pwd" placeholder="Enter a new password.." class="form-control">
        <br>
        <br>
        <input type="password" name="pwd-repeat" placeholder="Confirm password.." class="form-control">
        <br>
        <br>
        <button type="submit" class="btn btn-success" name="reset-password-submit">Reset password</button>

        </form>

        <?php
        
    }
}

?>
    
</body>
</html>