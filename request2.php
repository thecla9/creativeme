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
    <title>REQUEST FORM</title>
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
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/nnpc1.jpg" alt=""  /></a>
                    <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/nipex.jpg" alt=""  /></a>
                    <h4> REQUEST FORM </h4>                    <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="home.php">HOME</a></li>
                   
                     <li><a href="galleria.php">PHOTO GALLERIA</a></li>
                               <li><a href="https://www.youtube.com/results?search_query=nipex">NipeX YOUTUBE CHANNEL</a></li>
                      <li><a href="trueconf.php">VIDEOCALL</a></li>
                       <li><a href="https://trueconf.com/">NipeX Connect</a></li>
                      <li><a href="index.php">LOGOUT</a></li>
                </ul>
            </div></div></div>
     
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
                            <a  href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#ln">
                                NipeX Store Requisition Form
                            </a>
                             <a  href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal" data-target="#su">
                                Repairs/Replacement Form
                            </a>
              
              <a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                               Authority To Travel Form
                            </a>
                            <a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                               Acknowledge Request Approval
                            </a>
                        </li>
                        <!-- End Slider 01 -->
                        
                        <!-- Slider 02 -->
                        <li>
                           
                             <a  href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#ln">
                               NipeX Store Requisition Form
                            </a>
                             <a  href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal" data-target="#su">
                               Repairs/Replacement Form
                            </a>
              
              <a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                                Authority To Travel Form
                            </a>
                            <a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                               Acknowledge Request Approval
                            </a>
                        </li>
                        <!-- End Slider 02 -->
                        
                        <!-- Slider 03 -->
                        <li>
                            
                             <a  href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#ln">
                                NipeX Store Requsition Form
                            </a>
                             <a  href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal" data-target="#su">
                               Repairs/Replacement Form
                            </a>
              <a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                                Authority To Travel Form
                            </a>
                            <a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                               Acknowledge Request Approval
                            </a>
                        </li>
                        <!-- End Slider 03 -->
                    </ul>
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
<br />
<div class="modal fade" id="su" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:orange;background-color:white" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Repairs/Replacement Form</h4>
              </div>
              <div class="modal-body">
            
        
         <form role="form" method="post" action="requisition.php">
                   <fieldset>
          
              <div class="form-group">
                                <input class="form-control" placeholder="To" name="ruser_To" type="text" required>
              </div>
              
              <div class="form-group">
                                <input class="form-control" placeholder="From" name="ruser_From" type="text" required>
              </div>
              
              <div class="form-group">
                                <input class="form-control" placeholder="Date" name="ruser_Date" type="text" required>
              </div>
              
              <div class="form-group">
                                <input class="form-control" placeholder="Department" name="ruser_Department" type=""text required>
              </div>
                           <div class="form-group">
                                <input class="form-control" placeholder="Description" name="ruser_Description" type="text" required>
              </div>
              
           </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="register">Sign Up</button>
        
         <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
           </form>
              </div>
            </div>
          </div>
        </div>
<!-- Script -->


     <div class="modal fade" id="ln" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:white" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:green" class="modal-title" id="myModalLabel">NipeX Store Requisition Form</h4>
             </div>
              <div class="modal-body">
            <form role="form" method="post" action="requestition.php">
                   <fieldset>
          <div class="form-group">
                                <input class="form-control" placeholder="To "ruser_To" type="text" required>
              </div>
              
              <div class="form-group">
                                <input class="form-control" placeholder="From" name="ruser_Department" type="text" required>
              </div>
              
              <div class="form-group">
                                <input class="form-control" placeholder="Date" name="ruser_Date" type="text" required>
            </div>
              <div class="form-group">
                                <input class="form-control" placeholder="Description(Name all the items)" name="ruser_Description" type="text" required>
              </div>
              
              <div class="form-group">
                                <input class="form-control" placeholder="Quantity Required" name="ruser_Quantity Required" type="number" required>
              </div>
              
                            <div class="form-group">
                                <input class="form-control" placeholder="Allocation(for store use only)" name="ruser_Allocation" type="text" required>
            
           
           </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="register">Request now</button>
        
         <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
           </form>
        
         
       
           
              </div>
            </div>
          </div>
        </div>
    
    <div class="modal fade" id="an" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
           <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:white" class="modal-title" id="myModalLabel">Authority to Travel</h4>
              </div>
              <div class="modal-body">
            
        
         <form role="form" method="post" action="requisition.php">
                   <fieldset>
          
            
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="staff_username" type="text" required>
              </div>
              
              <div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_password" type="password" required>
              </div>
           
           </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="admin_login">Login</button>
        
         <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
           </form>
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
