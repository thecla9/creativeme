<?php
include('userlogin.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: home.php");
}
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
<div style=”height:100px; width:550px; overflow-y: scroll; padding-bottom:10px; border:3px solid black; “>

 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/nnpc1.jpg" alt=""  /></a>
                    <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/nipex.jpg" alt=""  /></a>
            </div></div></div>
     
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                         <!-- Slider 01 -->
                       <li>
                            
                             <a  href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#su">
                                 NipeX Account Receivable Tracker
                            </a>
                        <a  href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal" data-target="#ln">
                                 Flight Ticket Invoice Tracker</a>
                            </a>
              <a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                             NipeX Fees Payment
                            </a>
                      
                  
              
              <a  href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#bn">
                               NipeX Budget 
                            </a>
                             <a  href="#features-sec" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#un">
                               Approve All Request
                            </a>
                        </li>
                        <!-- End Slider 01 -->
                        
                        <!-- Slider 02 -->
                        <li>
                            
                             <a  href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#su">
                                 NipeX Account Receivable Tracker
                            </a>
              <a  href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal" data-target="#ln">
                                 Flight Ticket Invoice Tracker</a>
                            </a>
              <a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                             NipeX Fees Payment
                            </a>
                      
                  
              
              <a  href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#bn">
                               NipeX Budget 
                            </a>
                             <a  href="#features-sec" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#un">
                               Approve All Request
                            </a>
                        </li>
                        <!-- End Slider 02 -->
                        
                        <!-- Slider 03 -->
                        <li>
                            
                             <a  href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#su">
                                 NipeX Account Receivable Tracker
                            </a>
              <a  href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal" data-target="#ln">
                                 Flight Ticket Invoice Tracker</a>
                            </a>
              <a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                             NipeX Fees Payment
                            </a>
                      
                  
              
              <a  href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#bn">
                               NipeX Budget 
                            </a>
                             <a  href="#features-sec" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#un">
                               Approve All Request
                            </a>
                        </li>
                        <!-- End Slider 03 -->
                    </ul>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div><span>
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
<br />


<div class="modal fade" id="su" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:orange;background-color:white" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">NipeX ACCOUNT RETRIEVABLE TRACKER</h4>
              </div>
              <div class="modal-body">
            
                <form action="searchfetch4.php" method="post">
      <h6>Search by Company name</h6>

        <label>Company name:</label><P>
  <input name="search" type="search" autofocus><input type="submit" name="button">
</form>
        
              </div>
            </div>
          </div>
        </div>

<div class="modal fade" id="ln" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:green;background-color:white" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">NipeX FLIGHT TICKET TRACKER</h4>
              </div>
              <div class="modal-body">
            
                 <form action="searchfetch1.php" method="post">
      <h5>Search by Agent name</h5>

        <label>Agent name:</label><P>
  <input name="search" type="text" autofocus>
  <input type="submit" name="button">
</form>
        
              </div>
            </div>
          </div>
        </div>

<div class="modal fade" id="an" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:grren;background-color:white" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">NipeX FEES PAYMENT</h4>
              </div>
              <div class="modal-body">
            
            <form action="searchfetch3.php" method="post">
      <h5>Search by Year</h5>

        <label>Year:</label><P>
  <input name="search" type="text" autofocus>
  <input type="submit" name="button">
</form>
              </div>
            </div>
          </div>
        </div>
<!-- Script -->


     <div class="modal fade" id="bn" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:red;background-color:white" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:green" class="modal-title" id="myModalLabel">NipeX BUDGET TRACKER</h4>
              </div>
              <div class="modal-body">
            
             <form action="searchfetch2.php" method="post"> 
             <fieldset>
      <h5>Search by Budget</h5>

        <label>Budget:</label><P>
  <input name="search" type="text" autofocus>
  <input type="submit" name="button">
</form>>
           </form>
             </fieldset>
              </div>
            </div>
          </div>
        </div>
    
    <div class="modal fade" id="un" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
           <div style="color:orange;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:white" class="modal-title" id="myModalLabel"> Approve all Request</h4>
              </div>
              <div class="modal-body">
            
        
         <form role="form" method="post" action="searchfetch5.php">
                   <fieldset>
           <h5>Search by department</h5>

        <label>Department:</label><P>
  <input name="search" type="text" autofocus>
  <input type="submit" name="button">
</form>
              </div>
           
           </fieldset>
                  
            
              </div>
              
              </div>
      
              </div>
            </div>
          </div>
        </div>
     <br />
  
           
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
