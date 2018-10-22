<?php
session_start();

?>
<?php
include("db_conection.php");
if(isset($_POST['register']))
{

$staff_id = $_POST['staff_id'];
$department = $_POST['department'];
$user_password = $_POST['user_password'];
$user_firstname = $_POST['user_firstname'];
$user_lastname = $_POST['user_lastname'];




$check_user="select * from nipex WHERE staff_id='$staff_id'";
    $run_query=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('user is already exist, Please try another one!')</script>";
 echo"<script>window.open('index.php','_self')</script>";
exit();
    }
 
$saveaccount="insert into nipex (staff_id, department,user_password,user_firstname,user_lastname) VALUE ('$staff_id', '$department', '$user_password','$user_firstname','$user_lastname')";
mysqli_query($dbcon,$saveaccount);
echo "<script>alert('Data successfully saved, You may now login!')</script>";				
echo "<script>window.open('index.php','_self')</script>";


				
	
			
		
	
		

}

?>
