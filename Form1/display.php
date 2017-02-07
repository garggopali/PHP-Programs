<?php
include_once 'dbconnect.php';  
	//execute the SQL query and return records
	$q2="select name,email,gender from register where name LIKE '%".$_POST['ValueToSerach']."%'";
	$result=mysql_query($q2) or die(mysql_error());
?>

<!DOCTYPE> 
	<html> 
	  <head> 
	    <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1"> 
	    <title>Search user</title> 
		<style>
		table,tr,th,td{
			border:1px solid black;
		}
		</style>
	  </head> 
	  <p><body> 
	    <h3>Search  Contacts Details</h3> 
	    <p>You  can search by name</p> 
	    <form  method="post" action="display.php"  id="searchform"> 
	      <input  type="text" name="ValueToSerach"> 
	      <input  type="submit" name="search" value="Search"> 
		  <table>
		  <tr>
		  <th>Name</th>
		  <th>email</th>
		  <th>gender</th>
		  </tr>
		  <?php while ($row = mysql_fetch_array($result)): ?>
		  <tr> 
		  <td> <?php echo $row['name']; ?></td>
		  <td> <?php echo $row['email']; ?></td>
		  <td> <?php echo $row['gender']; ?></td>
		  <td align='center'>
		  			<a href = 'delete.php'>Delete</a>
			<a href = "update.php">UPDATE</a>
			</td>
		  </tr>
		 <?php endwhile; ?> 
	    </form> 
			  		 <a href = 'register.php'>Go To Register Page</a>
	  </body> 
	</html> 
	</p>
 

