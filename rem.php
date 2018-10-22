<?php
session_start();

$_SESSION['userid'] = $myuserid;
'SELECT * FROM users_table WHERE id = '.$_SESSION['userid'];
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);  
$rememberMe = (int)$_POST['rememberMe'];


$row = mysql_fetch_assoc(mysql_query("SELECT id,usr FROM members WHERE usr='{$username}' AND pass='".md5($password)."'"));

if($row['usr'])
{
  $_SESSION['usr']=$row['usr'];
  $_SESSION['id']=$row['id'];
  $_SESSION['rememberMe']=$_POST['rememberMe'];

  if($rememberMe=="on")
   setcookie('zsCookie',$username, time()+7200);


}
?>