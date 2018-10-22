<?php
session_start();

?>
<?php

include("db_conection.php");

                
if(isset($_POST['user_login']))
{
    $staff_id=$_POST['staff_id'];
    $user_password=$_POST['user_password'];
	

    $check_user="select * from nipex WHERE staff_id='$staff_id' AND user_password='$user_password'";


    $run=mysqli_query($dbcon,$check_user);

   //if(mysqli_num_rows($run))
    {
	 echo "<script>alert('You're successfully login!')</script>";
       
 echo "<script>window.open('home.php','_self')</script>";
       
$_SESSION['staff_id']=$staff_id;



    }
  // else
    {
        echo "<script>alert('staff_id or password is incorrect!')</script>";
		  echo "<script>window.open('index.php','_self')</script>";
		
		 exit();
		    }
    }

?>