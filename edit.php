
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
  
        //updating the table
        $result=  mysqli_query("UPDATE flighttracker SET agent_name='$agent_name',staff_name='$staff_name',travel_date='$travel_date',destination='$destination',purpose='$purpose',amount='$' WHERE id=$id");
        if(!$result){
    $message = "Problem in Editing! Please Retry!";
  } else {
    header("Location:delete.php");
  }

       } 

   // $result = mysqli_query($conn,$query);
$result = ("SELECT * FROM flighttracker WHERE id='" . $_GET["id"] . "'");

mysqli_close($conn);
?>


















<form name="frmToy" method="post" action="edit" id="frmToy" onClick="return validate();">
<div id="mail-status"></div>
<div>
<label style="padding-top:20px;">Agent Name</label>
<span id="name-info" class="info"></span><br/>
<input type="text" name="agent_name" id="agent_name" class="demoInputBox" value="<?php echo $result[0]["agent_name"]; ?>">
</div>
<div>
<label>Code</label>
<span id="code-info" class="info"></span><br/>
<input type="text" name="code" id="code" class="demoInputBox" value="<?php echo $result[0]["code"]; ?>">
</div>
<div>
<label>Category</label> 
<span id="category-info" class="info"></span><br/>
<input type="text" name="category" id="category" class="demoInputBox" value="<?php echo $result[0]["category"]; ?>">
</div>
<div>
<label>Price</label> 
<span id="price-info" class="info"></span><br/>
<input type="text" name="price" id="price" class="demoInputBox" value="<?php echo $result[0]["price"]; ?>">
</div>
<div>
<label>Stock Count</label> 
<span id="stock_count-info" class="info"></span><br/>
<input type="text" name="stock_count" id="stock_count" class="demoInputBox" value="<?php echo $result[0]["stock_count"]; ?>">
</div>
<div>
<input type="submit" name="submit" id="btnAddAction" value="Save" />
</div>
</div>