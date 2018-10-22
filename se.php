<?php
require_once("db_conection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NipeX WORKGROUP PLATFORM</title>
     <link rel="shortcut icon" href="assets/img/nnpc2.jpg" type="image/x-icon" />


    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />    
 
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/nnpc.jpg" alt=""  /></a>
                    <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/nipex.jpg" alt=""  /></a>
                    <li><a href="fands.php">LOGOUT</a></li></div></div></div>
            
    <div id="faculty-sec" >
    <div class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">NipeX FLIGHT TICKET INVOICE TRACKER</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      
                      
</p>
                 </div>

             </div>




           <div class="row" >
           
               
          <div class="modal-dialog modal-sm">
            <div style="color:green;background-color:white" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 style="color:green" class="modal-title" id="myModalLabel">NipeX flight Ticket InvoiceTracker</h5>
              </div>
              <div class="modal-body">
           <form action="se.php" method="post">
      <h6>Search by Agent name</h6>

        <label>Agent name:</label><P>
  <input name="search" type="search" autofocus><input type="submit" name="button">
</form>

             <!--/.HEADER LINE END-->
</body>

<?php
	$query = $_GET['search']; 
	// gets value sent over search form
	
	$min_length = 15;
	// you can set minimum length of the query if you want
	
	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
		
	$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
		$query = mysqli_real_escape_string($query);
		// makes sure nobody uses SQL injection
		
		$raw_results = mysqli_query("SELECT * FROM flighttracker
			WHERE (`agent_name` LIKE '%".$search."%') OR (`staff_name` LIKE '%".$search."%')") or die(mysqli_error());
			
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table
		
		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysqli_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
				echo "<p><h3>".$results['agent_name']."</h3>".$results['staff_name']."</p>";
				// posts results gotten from database(title and text) you can also show id ($results['id'])
			}
			
		}
		else{ // if there is no matching rows do following
			echo "No results";
		}
		
	}
else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}
?>
</body>
</html>
