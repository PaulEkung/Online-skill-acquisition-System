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
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">

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
        <a href="index.php" class="bi bi-arrow-left-circle fs-1 text-light"></a>

            <a href="#" class="navbar-brand text-center offset-2">Web Techology</a>

            <button class="navbar-toggler" onclick="openNav()" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        

            <div class="collapse navbar-collapse" id="navmenu">

                <ul class="navbar-nav ms-auto" id="lock">

                   
                 
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
    
    
    <!-- Boxes -->      

           <!-- Learn section -->
           <section id="learn" class="p-5">
               <div class="container">
                   <div class="row align-items-center justify-content-between">
                       <div class="col-md">
                           <img src="images/webman.jpg" class="image-fluid w-100 mb-5" alt="">
                       </div>
                       <div class="col-md">
                           <h2>Learn The Fundametals</h2>
                           <p class="lead">
                               <b>
                              Get to know about the fundamentals of web technology
                               </b>
                           </p>

                           <p class="lead" style="color:rgb(3, 22, 59)">
                               Make your skills real!!
                           </p>
                           <a href="https://www.learnwebtech.com" class="btn btn-dark mt-3"> 
                               
                               Read More
                           </a>
                       </div>
                   </div>
               </div>
           </section>
           
           <section id="learn" class="p-5 bg-dark">
               <div class="container">
                   <div class="row align-items-center justify-content-between">

                         <div class="col-md">
                           <h2 class="text-warning">Learn HTML</h2>
                           <p class="lead text-light">
                               HTML (Hypertext Markup Language) is primarily the building block of the web. Every web content displayed on the internet as a result of the application of HTML. 
                           </p>

                           <p class="lead text-light">
                               Beging a carrier as a web developer with HTML.
                           </p>
                           <a href="https://www.learnhtml.com" class="btn btn-primary mt-3"> 
                               
                               Start Learning
                           </a>
                       </div>
                       <div class="col-md">
                            <img src="images/download.png" class="image-fluid w-50 rounded-circle offset-3" alt="">
                        </div>
                   </div>
               </div>
           </section>
<br>
           <section id="learn" class="p-5">
               <div class="container">
                   <div class="row align-items-center justify-content-between">

                         <div class="col-md">
                           <h2 class="text-warning">Learn CSS</h2>
                           <p class="lead ">
                              CSS stands for Cascaded Style Sheet which is used to style the html contents on the web. Ordinarily, the html structure displays ordinary skeletal plane text on the web. CSS helps to beutify the web styling those elements.
                           </p>

                           <p class="lead text-light">
                               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, incidunt.
                           </p>
                           <a href="https://www.learncss.com" class="btn btn-secondary mt-3"> 
                               
                               Start Learning
                           </a>
                       </div>
                       <div class="col-md">
                            <img src="images/download-1.png" class="image-fluid w-50 offset-3" alt="">
                        </div>
                   </div>
               </div>
           </section>
<br>
           <section id="learn" class="p-5 bg-dark">
               <div class="container">
                   <div class="row align-items-center justify-content-between">

                         <div class="col-md">
                           <h2 class="text-warning">Learn Bootstrap</h2>
                           <p class="lead text-light">
                              Bootstrap is an extracted template from CSS. Bootstrap makes it easier to style html documents without actually writing much css codes. A little line of code written with bootsrap performs the same function as a bulky css code.
                           </p>

                           <p class="lead text-light">
                               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, incidunt.
                           </p>
                           <a href="https://www.learnbootstarp.com" class="btn btn-primary mt-3"> 
                               
                               Start Learning
                           </a>
                       </div>
                       <div class="col-md">
                            <img src="images/download.jpg" class="image-fluid w-50 offset-3 rounded-circle" alt="">
                        </div>
                   </div>
               </div>
           </section>
<br>
           <section id="learn" class="p-5">
               <div class="container">
                   <div class="row align-items-center justify-content-between">

                         <div class="col-md">
                           <h2 class="text-warning">Learn JavaScript</h2>
                           <p class="lead">
                             JavaScript is a server and client-side scripting language used for dynamic web development. It is a universally used programming language used to develop websites and web applications.                           </p>

                           <p class="lead text-light">
                               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, incidunt.
                           </p>
                           <a href="https://www.learnjavascript.com" class="btn btn-secondary mt-3"> 
                               
                               Start Learning
                           </a>
                       </div>
                       <div class="col-md">
                            <img src="images/download-3.png" class="image-fluid offset-1 w-75" alt="">
                        </div>
                   </div>
               </div>
           </section>
<br>
           <section id="learn" class="p-5 bg-dark">
               <div class="container">
                   <div class="row align-items-center justify-content-between">

                         <div class="col-md">
                           <h2 class="text-warning">Learn PHP</h2>
                           <p class="lead text-light">
                              PHP (Hypertext Pre-processor) is a server-side scripting language used in developing websites and web applications. Unlike JavaScript, PHP is handles large databases and provides facilities for DBMS.
                           </p>

                           <p class="lead text-light">
                               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, incidunt.
                           </p>
                           <a href="https://www.learnphp.com" class="btn btn-primary mt-3"> 
                               
                            Start Learning
                           </a>
                       </div>
                       <div class="col-md">
                            <img src="images/download-2.png" class="image-fluid w-50 rounded-circle offset-3" alt="">
                        </div>
                   </div>
               </div>
           </section>
<br>
           <section id="learn" class="p-5">
               <div class="container">
                   <div class="row align-items-center justify-content-between">

                         <div class="col-md">
                           <h2 class="text-warning">Learn React</h2>
                           <p class="lead">
                             React is declarative, efficient and flexible JavaScript library for building user interfaces.
                           </p>

                           <p class="lead text-light">
                               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, incidunt.
                           </p>
                           <a href="https://www.learnreact.com" class="btn btn-secondary mt-3"> 
                               
                               Start Learning
                           </a>
                       </div>
                       <div class="col-md">
                            <img src="images/download-4.png" class="image-fluid w-50 offset-3" alt="">
                        </div>
                   </div>
               </div>
           </section>

          
           <!-- Tags -->

           
           <!-- Question Accordion -->
         
                           <!-- Instructors -->
                          


          <!-- footer -->
          <footer class="p-3 bg-dark text-white text-center position-relative lead">
            <div class="container">
                <p class="offset-3">
                    Copyright &copy; 2023 Akanu Ibiam Federal Polytechnic Unwana.
                    <i class="bi bi-alarm"></i>
                    
                    <a href="#topMost" class="offset-3 bottom-0 p-3 mb-3 end-0 btn btn-primary">
                        Back to top
                    </a>
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