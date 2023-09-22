<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Musical+1937"; //Note that if you are to upload this site on the online server,
// you need a dbPass, else it wont work.
$dbname = "database";

if(!$conn = mysqli_connect('localhost', 'root', 'Musical+1937', 'eed'))
// variable names given above can still be used
{
die("failed to connect!" . mysqli_error($conn));

}

// you can still use:
// $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// if(!$conn){
    // die("Database connection failed");
//}
