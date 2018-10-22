<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM flighttracker WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
	
	


   $agent_name=$res['agent_name'];
    $staff_name=$res['staff_name'];
    $travel_date=$res['travel_date'];    
      $destination=$res['destination'];
    $purpose=$res['purpose'];
    $amount=$res['amount'];
       $invoice_no=$res['invoice_no'];	
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
     
            <tr> 
                <td>Agent_Name</td>
                <td><input type="text" name="agent_name" value="<?php echo $agent_name;?>"></td>
            </tr>
            <tr> 
                <td>Staff_name</td>
                <td><input type="text" name="staff_name" value="<?php echo $staff_name;?>"></td>
            </tr>
            <tr> 
                <td>travel_date</td>
                <td><input type="text" name="travel_date" value="<?php echo $travel_date;?>"></td>
            </tr>
              <tr> 
                <td>Destination</td>
                <td><input type="text" name="destination" value="<?php echo $destination;?>"></td>
            </tr>
            <tr> 
                <td>Purpose</td>
                <td><input type="text" name="purpose" value="<?php echo $purpose;?>"></td>
            </tr>
            <tr> 
                <td>Amount</td>
                <td><input type="text" name="amount" value="<?php echo $amount;?>"></td>
            </tr>
               <tr> 
                <td>Invoice_no</td>
                <td><input type="text" name="invoice_no" value="<?php echo $invoice_no;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>