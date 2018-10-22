
    
<?php
// including the database connection file
include_once("db_connection.php");
 
if(isset($_POST['update']))
{    
        $id = $_POST['id'];
    $agent_name=$_POST['agent_name'];
    $staff_name=$_POST['staff_name'];
    $travel_date=$_POST['travel_date'];    
      $destination=$_POST['destination'];
    $purpose=$_POST['purpose'];
    $amount=$_POST['amount'];
       $invoice_no=$_POST['invoice_no'];
    // checking empty fields
    if(empty($agent_name) || empty($staff_name) || empty($travel_date) ||  empty($destination) || empty($purpose) || empty($amount) || empty($invoice_no)) {            
        if(empty($agent_name)) {
            echo "<font color='red'>name field is empty.</font><br/>";
        }
        
        if(empty($staff_name)) {
            echo "<font color='red'>field is empty.</font><br/>";
        }
        
        if(empty($travel_date)) {
            echo "<font color='red'> field is empty.</font><br/>";
        } 
        
             if(empty($destination)) {
            echo "<font color='red'>field is empty.</font><br/>";
        }
        
        if(empty($purpose)) {
            echo "<font color='red'>field is empty.</font><br/>";
        }
        
        if(empty($amount)) {
            echo "<font color='red'> field is empty.</font><br/>";
        } 
         
        if(empty($invoice_no)) {
            echo "<font color='red'> field is empty.</font><br/>";
        } 
        
        
               
    } else {    
        //updating the table
        $result = mysqli_query($conn,"UPDATE flighttracker SET agent_name='$agent_name',staff_name='$staff_name',travel_date='$travel_date',destination='$destination',purpose='$purpose',amount='$amount' WHERE id=$id");
        
        if(!$result){
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: delete.php");
    }
}}
echo "successfully edited";
header("Location: delete.php");
?>
