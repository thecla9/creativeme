<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NipeX WORKPLACE</title>
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
                    <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/nipex.jpg" alt="" /></a></div>
<button type="button" class="btn btn-success btn-lg active" role="button" aria-pressed="true">NipeX Flight Ticket Invoice Tracker</a></div> <br></br><br>

         <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">EDIT RECORDS</button>
</div></div></div></div></div><br></div></div></div></div></div><br></div></div></div></div></div><br></div></div><br></br>
  <p>  
  <p>  
</div>
</br>
</body>
</html>



<link rel="stylesheet" href="css/bootstrap.min.css" />
    <style type="text/css">
	#wrapper {
	margin: 0 auto;
	float: none;
	width:70%;
}
.header {
	padding:10px 0;
	border-bottom:1px solid #CCC;
}
.title {
	padding: 0 5px 0 0;
	float:left;
	margin:0;
}
.container form input {
	height: 30px;
}
body
{
    
    font-size:12;
    font-weight:bold;
}


		</style>



<body  align="center">

<br>
<div class="container home">
<font face="comic sans ms">

</font></br><br><br></br><br><br>

 <table class="table table-bordered">
  

 
    <tbody>






<?php
include('db_connection.php');

if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
    $agent_name=$_POST['agent_name'];
    $staff_name=$_POST['staff_name'];
    $travel_date=$_POST['travel_date'];    
      $destination=$_POST['destination'];
    $purpose=$_POST['purpose'];
    $amount=$_POST['amount'];
       $invoice_no=$_POST['invoice_no'];

$query3=mysqli_query($conn,"UPDATE flighttracker set agent_name='$agent_name',staff_name='$staff_name',travel_date='$travel_date',destination='$destination',purpose='$purpose',amount='$amount' WHERE `flighttracker`.`id`=$id'");
        
if($query3)
{
	
header('location:delete.php');
}
}

$query=mysqli_query($conn,"SELECT* from flighttracker where `flighttracker`.`id`='$id'");
$data=mysqli_fetch_array($query);
}

?>


<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>

<form name="form1" method="post" action="">
    

 <table class="table table-bordered">

            <tr> 
                <td>Agent Name</td>
                <td><input type="text"required name="agent_name"   value="<?php echo $data['agent_name'];?>"></td>
            </tr>
            <tr> 
                <td>Staff Name</td>
                <td><input type="text" required name="staff_name" value="<?php echo $data['staff_name'];?>"></td>
            </tr>
            <tr> 
                <td>Travel date</td>
                <td><input type="date" required name="travel_date" value="<?php echo $data['travel_date'];?>"></td>
            </tr>


  <tr> 
                <td>Destination</td>
                <td><input type="text" required name="destination" value="<?php echo $data['destination'];?>"></td>
            </tr>
            <tr> 
                <td>Purpose</td>
                <td><input type="text" required name="purpose" value="<?php echo $data['purpose'];?>"></td>
            </tr>
            <tr> 
                <td>Amount</td>
                <td><input type="text"  required name="amount" value="<?php echo $data['amount'];?>"></td>
            </tr>

<tr> 
                <td>Invoice_no</td>
                <td><input type="text"  required name="invoice_no" value="<?php echo $data['invoice_no'];?>"></td>
            </tr>

          <td>
                
            <input type="submit" name="submit" value="update" /></td>
            </tr>
        </table>
    </form>

</body>
</html>

