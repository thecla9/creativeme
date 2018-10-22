
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("test", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
  if($_SESSION["department"]!="fands")
            {
            header('Location: home2.php');
            }

// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select staff_id from nipex where staff_id='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['staff_id'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>