<?php
session_start();
require ("connection.php");
require ("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
   
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap-icons.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/
    css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhF1dvKuh
    fTAU6auU8tT94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/
    font/bootstrap-icons.css"> -->

<style type="text/css" media="all">

@import url("https://fonts.googlealis/css?family=Anonymous+Pro");

body::before{
display:block;
content: '';
height: 60px;

}

@media (min-width:768){
    .news-input{
        width: 50%;
    }
}

.sidenav{
height: 100%;
width: 0;
position: fixed;
z-index: 1;
top: 30px;
right: 0;
background: rgb(1, 14, 32);
overflow-x: hidden;
padding-top: 90px;
transition: 0.3s;

}


.sidenav a{
    
display: block;
padding: 8px 8px 8px 30px;
text-decoration: none;
font-size: 22px;
transition: 0.3s;
color: #fffffff2;
font-family: 'Courier New', Courier, monospace;;
/* font-weight: bold; */
text-transform: capitalize;

}

.sidenav a:hover{
    background-color: rgba(4, 48, 56, 0.781);
    color:gold;
    transform: scale(1.2);
    font-weight: 500;
}

.sidenav .closebtn{
    position: absolute;
    color: #f1f2f2;
    top: 45px;
    right: 20px;
    font-size: 36px;
    margin-left: 50px;
    cursor: pointer;
  }

  .carousel-item img{
      height: 50vh;
      width: 100%;
  }

  .carousel-control-prev:hover{
      background:  #6b1e1e30;
  }
 
  .carousel-control-next:hover{
      background:  #6b1e1e30;
  }

  .navbar-brand{
      border: 3px solid #999999;
      width: 22%;
      padding: 7px;
  }
 
    </style>
    


</head>
<body>

        <script type="text/javascript">
            function openNav(){
                var x = document.getElementById("navmenu");
                if(x.style.display ==="block"){
                    x.style.display ="none";
                }else{
                    x.style.display ="block";
                }
            }
            </script>

            <script type="text/javascript">
            function myFunction(){
                document.getElementById("mySidenav").style.width ="270px";
            }


            function closeNav(){
                document.getElementById("mySidenav").style.width ="0";
            }
            
            </script>

            <div class="container">
                <div class="row">
                 <div class="container">

                      <div id="mySidenav" class="sidenav">
                      <span class="closebtn" onclick="closeNav()">&times;</span>
                      <a href="#">About Us</a>
                      <a href="#contact-info">Contact</a>
                        <a href="#" data-bs-target="#myModal" data-bs-toggle="modal">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" id="topMost"></a>
   
    <!-- <svg xmlns="http://www.w3.org/2000/svg"></svg> -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md bg-secondary navbar-dark py-3 fixed-top">

        <div class="container">

            <a href="#" class="navbar-brand text-center">Web Techology</a>

            <button class="navbar-toggler" onclick="openNav()" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        

            <div class="collapse navbar-collapse" id="navmenu">

                <ul class="navbar-nav ms-auto" id="lock">

                    <li class="nav-item">
                        <a href="#learn" class="nav-link">LEARN</a>
                    </li>
                    <li class="nav-item">
                        <a href="#questions" class="nav-link">QUESTIONS</a>
                    </li>
                 
                    <li class="nav-item">
                        <button href="" onclick="myFunction()"
                         class="nav-link btn btn-secondary text-white"
                        >MORE</button>
                    </li>

                </ul>
                
            </div>

        </div>
    </nav>
    
    <!-- Loguot modal -->

    <div class="container-fluid">
        <div class="row">
            <div class="modal fade" role="dialog" id="myModal">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-light lead mt-5">
                            We will miss you! Hope you visit us soon.
                        </h3>
                    </div>
                    <div class="col-md-6">
                        <div class="modal-dialog modal-md">
                         <div class="modal-content">
                <div class="modal-header p-2 bg-dark text-warning lead"><b>Ready to leave</b></div>
                    <div class="modal-body p-4 text-white" style="background: rgb(1, 11, 24)">
                        <h3 class="text-center">Are you sure you want to <h3 class="text-center">logout?</h3> </h3>
                        <button class="btn btn-danger center" data-bs-dismiss="modal">No</button>
                        <a href="logout.php" class="btn btn-primary">Yes</a>
                    </div>
                    <!-- <div class="modal-footer p-1"> -->
                    <!-- </div> -->
                </div>
                </div>
            </div>
        </div>  
                </div>
            </div>
        </div>
    </div>

    <!-- Rating Modal -->
    <div class="container">
        <div class="row">
            <div class="modal fade" id="ratingStar" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">Rate Us</div>
                        <div class="modal-body">
                            <span class="bs-tooltip-start"></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Showcase -->
    
    <section class="bg-light text-black p-3 p-lg-4 pb-lg-0 text-center text-sm-start">

        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                <?php 
                if(isset($_SESSION['sessionId'])){
                    echo "<div class='btn btn-success btn-sm'>" . 
                    "<script type='text/javascript'>document.write('Hello')</script> " . "</div>" .
                    "&nbsp;&nbsp;\t" . $_SESSION['sessionUser'];
                }else{
                    echo "You are logged in!";
                }
                ?>
                <!-- <?php 
                // $sql = "SELECT * FROM users WHERE id = 1";
                // $result = mysqli_query($conn, $sql);
                // $rowCount = mysqli_num_rows($result);
                // if($rowCount > 0){
                //     while ($row = mysqli_fetch_assoc($result)){
                //      echo $row['username'];
                //     }
                // }else{
                //     echo "No result found";
                // }
                ?> -->
                    <h2>Become a<span class="text-warning"> Web Developer</span></h2>
                    <p class="lead my-2">
                        We focus on teaching our students on<br> how to become good 
                        web developers.
                    </p>
                    <a href="start.php" class="btn btn-primary btn-lg my-2">Start Enrollment</a>
                </div>
                <!-- <div> -->
                <img class="image-fluid w-50 ms-auto d-none d-sm-block mt-5" src="images/Artboard11-IMG.png" alt=""
                 style="width:40vw; height:45vh;">
                <!-- </div> -->
            </div>
        </div>
    </section>

    <!-- News Letter -->
    <section class="bg-image text-light p-4 shadow-1-strong"
    style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.8)), url('images/about.jpg'); background-size: 100%;
    background-repeat: no-repeat;height: 55vh; background-attachment: fixed">
        <!-- <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Sign Up For Our NewsLetter</h3>
                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Recipient's username">
                     
                    <button class="btn btn-dark btn-md" type="button"
                      id="button-addon2">Submit</button>
                </div>
            </div>
        </div> -->
        <!-- <p class="text-center text-light lead mt-0 p-0 display-5 text-small">BECOMING A WEB DEVELOPER <br> IS OUR INTEREST.</p> -->
        <!-- <h3 class="text-white p-5 text-center lead"><b> We have trained <kbd>thousands</kbd>
             of <kbd>web developers</kbd> over the past <kbd>5 years</kbd> </b></h3>-->
             <p class="text-center p-4 mt-5">We train students to develop adequate skills in web development. 
             <br>
               Learn HTML, CSS, BOOTSTRAP, PHP, JAVASCRIPT, REACT and MYSQL databse.
                 Lets get started!</p> 
                 <br>
                 <br>
                 <center>
                 <a href="https://www.aboutweb.com" class="btn btn-primary">Read more</a>
                 </center>
    </section>

    <!-- Boxes -->
   

          <b> <hr></b>

          
          

          
           
          

                           <!-- Instructors -->
                          


          <!-- footer -->
          <footer class="p-3 bg-dark text-white text-center position-relative lead">
            <div class="container">
                <p class="">
                    copyright &copy; 2023 Akanu Ibiam Federal Polytechnic Unwana.
                    <i class="bi bi-alarm"></i>
                    
                </p>
            </div>
          </footer>


<!-- <script src="https://cdn/jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0G1n4gmtz2m1QnikT1wXgYsOg+OMhuP+I1RH9sENBOOLRn5q+8nbTov4+1p" crossorigin="anonymous">
    
    </script> -->
    <script src="bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>