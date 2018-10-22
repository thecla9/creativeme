<html> 
    <head> 
      <title>NipeX FLIGHT TICKET INVOICE TRACKER</title>
      <link href="style.css" rel="stylesheet" type="text/css"> 
    </head> 
    <p><body>
      <div id="container"> 

<ul id="drop-nav">
  <h1><strong><b> NipeX Flight Ticket Invoice Tracker</b></strong></h1>
<li style="float:left"><a href="index.php">Logout</a></li>
</ul>
<div id="login">
      <h2>NipeX Flight Tickect Invoice Tracker </h2>
     <form action="" method="post">
      <h6>Search by Agent name</h6>

        <label>Agent name:</label><P>
  <input name="search" type="search" autofocus><input type="submit" name="button">
</form>
  </div>


</body> 
</html>

<?php


$con=mysql_connect('localhost', 'root', '');
$db=mysql_select_db('company1');


if(isset($_POST['button'])){    //trigger button click

  $search=$_POST['search'];
  
  $query=mysql_query("select * from request where username like '%{$search}%'");

if (mysql_num_rows($query) > 0) {
  while ($row = mysql_fetch_array($query)) {
    
  echo "<table border=1 border-color=green cellspacing=1 bordercolor=green>";
  echo "<tr>
   <th>employee_id</th>
  <th>username</th>
  <th>leave_type</th>
   <th>starting_date</th>
    <th>ending_date</th>
  <th>leave_duration</th>
  <th>purpose</th>
  <th>applying_date</th>  
  <th>leave_status</th>";
   class TableRows extends RecursiveIteratorIterator { 
     function __construct($it) { 
         parent::__construct($it, self::LEAVES_ONLY); 
     }

     function current() {
         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
     }

     function beginChildren() { 
         echo "<tr>"; 
     } 

     function endChildren() { 
         echo "</tr>" . "\n";
     } 
} 
   echo"</tr>";
    echo"<td>".$id=$row["employee_id"]."</td>" ;
     echo"<td>".$username=$row["username"]."</td>" ;
     echo"<td>".$leave_type=$row["leave_type"]."</td>" ;
      echo"<td>".$starting_date=$row["starting_date"]."</td>" ;
       echo"<td>".$ending_date=$row["ending_date"]."</td>" ;
        echo"<td>".$leave_duration=$row["leave_duration"]."</td>" ;
        echo"<td>".$purpose=$row["purpose"]."</td>" ;
        echo"<td>".$applying_date=$row["applying_date"]."</td>" ;
         echo"<td>".$leave_status=$row["leave_status"]."</td>" ;
          echo "</td>";
echo"</table>";
  }
}else{
    echo "No leave request Found<br><br>";
  }


}

mysql_close();
?>
</body>
</html>