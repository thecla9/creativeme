<?php
session_start();

  ?>
        
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NipeX WORKGROUP PLATFORM</title>
     <link rel="shortcut icon" href="assets/img/nnpc2.jpg" type="image/x-icon" />


    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />    
 
</head>
<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/nnpc.jpg"  alt=""  /></a>
 
                    <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/nipex.jpg" alt=""  /></a>
                   
                     <div class="navbar-collapse collapse move-me">

                <ul class="nav navbar-nav navbar-right">


                    <li ><a href="index.php">HOME</a></li>
                    <li><a href="request2.php">REQUEST FORMS</a></li>
                    <li><a href="access.php">F&S WORK ENVIRONMENT</a></li>
                     <li><a href="galleria.php">PHOTO GALLERIA</a></li>
                               <li><a href="https://www.youtube.com/results?search_query=nipex">NipeX YOUTUBE CHANNEL</a></li>
                      <li><a href="https://trueconf.com/">VIDEO</a></li>
                      <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div></div></div>
     Welcome Dear user!":<i><?php echo$_SESSION['staff_id']; ?></i></a>
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <!-- Slider 01 -->
                        <li>
                              <h3>Welcome to NipeX workgroup platform</h3>
                           <h1>NipeX-Nigerian Petroleum Exchange</h1>
                              <br>EXPLORE NOW!</br></h1>
                        </li>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i>NipeX Workgroup platform <i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
             </div>
        
    </div>

  
           
                 <div id="footer">
          &copy 2016 NipeX Workgroup Platform| All Rights Reserved |  <a style="color: #fff" target="_blank">Design by : THECLA</a>
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>

    



