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
<body>
<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/nnpc.jpg" alt=""  /></a>
                    <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/nipex.jpg" alt=""  /></a>
                    <li><a href="fands.php">LOGOUT</a></li></div></div></div>
            
    <div id="faculty-sec" >
    <div class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">NipeX FLIGHT TICKET INVOICE TRACKER</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      
                      
</p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->
</body>
</html>
<?php



include("db_conection.php");

if(isset($_POST['button'])){    //trigger button click

  $search=$_POST['search'];
  
 $query=mysqli_query("select * from flighttracker where agent_name like '%{$search}%'");

if ( mysqli_num_rows($query) > 0) {
  while ($row = mysqli_fetch_array($query)) {
    
    echo "<table border=1 border-color=green cellspacing=1 bordercolor=green>";
    echo "<tr>
   
  <th>agent_name</th>
  <th>staff_name</th>
   <th>T=travel_date</th>
    <th>destination</th>
  <th>purpose</th>
  <th>amount</th>
  <th>invoice_no</th>";
   class TableRows extends RecursiveIteratorIterator { 
     function __construct($it) { 
         parent::__construct($it, self::LEAVES_ONLY); 
     }

     function current() {
         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
     }

     function beginChildren() { 
         echo "<tr>"; 
     } 

     function endChildren() { 
         echo "</tr>" . "\n";
     } 
} 
   echo"</tr>";
     echo"<td>".$agent_name=$row["agent_name"]."</td>" ;
     echo"<td>".$staff_name=$row["staff_name"]."</td>" ;
      echo"<td>".$travel_date=$row["travel_date"]."</td>" ;
       echo"<td>".$destination=$row["destination"]."</td>" ;
        echo"<td>".$purpose=$row["purpose"]."</td>" ;
        echo"<td>".$amount=$row["amount"]."</td>" ;
         echo"<td>".$invoive_no=$row["invoice_no"]."</td>" ;
          echo "</td>";
echo"</table>";
  }
}else{
    echo "No result found <br><br>";
  }


}

mysqli_close();
?>
</body>
</html>
+