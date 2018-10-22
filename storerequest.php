<?php
include("db_conection.php");
if( $_POST )
{
  $conn = mysqli_connect("localhost","root","");

  if (!$conn)
  {
    die('Could not connect: ' . mysqli_error($conn));
  }

  mysqli_select_db($conn,"test");

  $send_to = $_POST['send_to'];
  $from = $_POST['from'];
  $date = $_POST['date'];
  $description1 = $_POST['description1'];
  $description2 = $_POST['description2'];
  $description3 = $_POST['description3'];
  $description4 = $_POST['description4'];


  $query = "INSERT INTO `request_approval` (`send_to`, `from`, `date`, `description1`, `description2`, `description3`, `description4`) VALUES ('$send_to', '$from', '$date', '$description1', '$description2', '$description3', '$description4')";
 
  mysqli_query($conn,$query);

  echo '<script language="javascript">';
echo 'alert("your request has been sent!")';
echo '</script>';
exit;

  mysqli_close($conn); 
}
?>