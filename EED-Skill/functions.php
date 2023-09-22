<?php

require 'connection.php';
if(!isset($_SESSION['sessionId'])){

  header("location: welcomePage.php");
  exit();

}



