<?php 
session_start();

include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap3/fonts/bootstrap.mcss">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap3/fonts/glyphicons-halflings-regular.svg">
   
</head>
<body>
<!-- div.bg-body -->

<!-- Navbar section -->

<section class=" text-center text-light" style="background:rgb(63, 5, 5);">
<div class="container p-4" style="margin-left:20px">
<div class="d-flex justify-content-center align-items-center p-1">

 <h2 class="offset-2"><b> AKANU IBIAM FEDERAL POLYTECHNIC UNWANA </b><br>
 <span class="fw-normal font-monospace fs-6" style="margin-left:0px">Skill For Technolgical Freedom</span></h2>

</div>
</div>
</section>

<!-- body section -->
<section class="p-5 text-center shadow-1-strong" 
 style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.8)),
  url('Images/hero.jpg'); background-size: cover;
    background-repeat: no-repeat;height: 76vh; background-attachment: fixed">
    <img src="images/aifpu.jpg" style="width:105px;height:5px margin-top:40px" class="offset-0" alt="">
    <br>
    <br>
    <br>
    <br>
    <span class="mt-5 text-warning bg-gradient-2 lead fw-bold p-2" style="font-family:bondolos;font-size:3.5rem">

   <b>Enterpreneurship Education Development</b>

    </span>

   <p class="font-monospace text-light lead">Learn Web Technology</p>
    <a href="register.php" class="mt-5 p-2 w-25 text-black fw-semibold btn btn-light">Start </a>

</section>



<!-- footer section -->
<section>
<footer class="text-center text-light p-2 mt-0" style="background:rgb(63, 5, 5);">
<!-- <a href="#about" class="text-light btn btn-dark
 position-fixed bottom-1 end-0 p-2 fw-semibold mb-4" data-bs-toggle="modal" style="">About system and developer</a> -->
<p clas=""> <span class="fs-3">&copy;</span>  2022 Akanu Ibiam Federal Polytechnic Unwana</p>
</footer>
</section>

    
<script src="bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>