<?php
require "connection.php";
// $username ="";
// $email ="";
// $number ="";
// $password ="";
$errors = array();
// $conn = mysqli_connect('localhost','root', '', 'database');
//an associative array of variables passed to the current script via the HTTP POST method.


if(isset($_POST['register'])) {

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $number = mysqli_real_escape_string($conn, $_POST['number']);
  $department = mysqli_real_escape_string($conn, $_POST['dept']);
  $reg_number = mysqli_real_escape_string($conn, $_POST['reg']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  
  if(empty($username) || empty($email) || empty($number) || empty($department) || empty($reg_number) || empty($password)) {

    array_push($errors, "<center>" . "<span class='alert alert-danger offset-1'>" . 
    'All input fields are required with some valid information..' . "</span>" . "</center>");
  
    
  //   if (count($errors)==0) {
  //       # code...  
  //       $sql = "insert into user(username, email, number, password)
  //               values('$username', '$email', '$number', '$password')";
  //               mysqli_query($db, $sql);
  //               header('location: login.php');
  //               die;
  //     }
      
      
    }
  }
    // if(!preg_match("/^[a-zA-Z0-9]*/", $username)){ 

   //}-->  
   //if(isset($_POST["register"])){
    //   $number = $_POST["number"];
    //   if(strlen($number) !== (11)){

    //         echo "<br>";

    //      echo "<center style='border:1px solid red;color:red;padding: 5px'>" . 
    //      "<b>Invalid number length." . "<br>" . "Phone number must be accurately 11 digits.</b>" . "</center>";
            

    //       }

?>