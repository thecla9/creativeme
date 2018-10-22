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
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/nnpc1.jpg" alt=""  /></a>
                    <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/nipex.jpg" alt=""  /></a>
                <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right" >
              
                <br><a href="request.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Request Forms</a>
                 <a href="request2.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">NJQS Docs.</a>
                  <a href="nipexconnect2.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true">NipeX Connect</a>
                     <a href="galleria.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">NipeX Photo Galleria</a>
                      
                      <a href="https://www.youtube.com/channel/UCHs8lFSLMYxscj454Leozrw" class="btn btn-success btn-lg active" role="button" aria-pressed="true">NipeX You Tube Channel</a>
                               
                     <a href="logout.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Log out</a>
                    
                </ul>
       
     Welcome Dear user!":<i><?php echo$_SESSION['staff_id']; ?></i></a>
            </div></div>  </div></div>
     
      

<p>
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me"><br>
                        <!-- Slider 01 -->
                        <div id="faculty-sec" >
    
               <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      
 <!--jumbotron start here-->
  
    

        
            <div style="color:green;background-color:white" class="modal-content">
              <div class="modal-header">
                 <div class="modal-body">
               
                <h2><b> Nipex Vision</b></h2>
      To provide an industry platform for fast, efficient and transparent supply chain transactions. </b>
      <h2><b> Nipex Mission</b></h2>
 Build transaction confidence in the supply of goods and services in Nigeria’s oil and gas industry by continually adapting to the needs of customers and other stakeholders.</b>


<h2><b>NipeX Goals and Objectives</b></h2>
The primary objective of NipeX (a Division of NAPIMS) is to provide an electronic platform for NNPC and Its operating partners in the JV and PSC arrangement with a view to:
Establishing a Joint Qualification System for the Pre-qualification of Contractors/ Suppliers for ease of Supplier selection.
 Reducing the prolonged cycle time for contract processing (average 18 months).
 Entrenching transparency into the tendering and procurement phases thereby ensuring the integrity of the process
To increase visibility of contract opportunities to indigenous Contractors/Suppliers for capacity building
NipeX Operational scope is targeted at contracts within NNPC approval limit: N10,000,000
 (or $500,000) and above for JV companies and $250,000 for PSCs


                </div>

                   </br>
     
              </p>
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
                </div>
                   
     
              </div>
                
               </div>
                </div>
              
            </div>
                
               </div>
                </div>
           </div>
               <!-- Slider 01 -->
                    
                      
            
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

<!-- Script -->


    

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
