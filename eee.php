
<?php
include('db_connection.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['update']))
{
    $agent_name=$_POST['agent_name'];
    $staff_name=$_POST['staff_name'];
    $travel_date=$_POST['travel_date'];    
      $destination=$_POST['destination'];
    $purpose=$_POST['purpose'];
    $amount=$_POST['amount'];
       $invoice_no=$_POST['invoice_no'];

$query3=mysqli_query("update flighttracker set agent_name='$agent_name',staff_name='$staff_name',travel_date='$travel_date',destination='$destination',purpose='$purpose',amount='$amount' WHERE id=$id");
        
if($query3)
{
    echo "successful";
header('location:delete.php');
}

}
}
?>