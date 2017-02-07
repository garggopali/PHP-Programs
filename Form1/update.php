
<?php
include_once 'dbconnect.php';  
	//execute the SQL query and return records
	$name = $_POST['name'];
	$q4="update register SET name ='$name'";
	$result=mysql_query($q4) or die(mysql_error());
	
	if(mysql_query($q4)){ // execute uery and show if it saved or error
		echo "record deleted";
		// this is used to connect to next page ater data is saved to database.
	}
	else
		echo mysql_error();
?>

<!DOCTYPE> 
	<html> 
	  <head> 
	    <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1"> 
	 </head> 
	  <body> 

		 <a href = 'display.php'>Go back</a>
		 </body>
		 </html>