
<html>
   <head>
      <title>PHP Regstration Form</title>
	  <style>
.error {color: #FF0000;}
</style>
   </head>
   <body>
  
  <?php
include_once 'dbconnect.php';
		// define variables and set to empty values
		$nameErr = $emailErr = $genderErr = $subjectErr = "";
        $name = $email = $time= $date=$gender = $comment = $subject1=$subject2 = "";
         
         //if ($_POST["submit"] == "Save") {
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
            if (empty($_POST["name"])) {
				$nameErr = "Name is required";
				} else {
					$name = test_input($_POST["name"]);
					// check if name only contains letters and whitespace
						if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
						$nameErr = "Only letters and white space allowed"; 
						}
				}
		// this is for reuired columns		
            if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
	// check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }    
  }
  
  // these are not for reuired function so just validate the user input values from the hackers and store in another variables
            $time = test_input($_POST["time"]);
			$date = test_input($_POST["date"]);
            $comment = test_input($_POST["comment"]);
			$subject1 = test_input($_POST["subject1"]);
			$subject2 = test_input($_POST["subject2"]);
			
			
            if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
			$q1= "insert into register(name,email,time,date,comment,subject1,subject2,gender) values('".$name."','".$email."','".$time."','".$date."','".$comment."','".$subject1."','".$subject2."','".$gender."')";
	//mysql_query($q1);// to execute query
	if(mysql_query($q1)){ // execute uery and show if it saved or error
		echo "record saved";
		// this is used to connect to next page ater data is saved to database.
		header("Location: display.php");
			exit;
	}
	else
		echo mysql_error();
         }
         function test_input($data) {
            $data = trim($data);	   // strip unnecessary characters (extra space, tab, newline)
            $data = stripslashes($data); // remove backslaches from user input data
            $data = htmlspecialchars($data); //htmlspecialchars() function is used to save from the hackers
            return $data;
         }
 ?>
      <h2>Classes registration</h2>
        <form action = "register.php" method = "POST">
 <!-- html comment // for personal information box -->
		<fieldset> 
			<legend>Personal information:</legend>
				  <p><span class="error">* required field.</span></p>
		 <table>
            <tr>
               <td>Name:</td> 
               <td><input type = "text" name = "name" placeholder="name">
            <!-- to show error message -->
			<span class="error">* <?php echo $nameErr;?></span></td>
			</tr>
            
            <tr>
               <td>E-mail:</td>
               <td><input type = "email" name = "email"placeholder="email">
					<!-- to show error message -->
					<span class="error">* <?php echo $emailErr;?></span> </td>     
		  </tr>
            
            <tr>
               <td>Specific Time:</td>
               <td><input type = "time" name = "time"></td>
            </tr>
            
			<tr>
               <td>Joining Date: </td> 
               <td><input type = "date" name = "date"></td>
            </tr>
            
			<tr>
               <td>Comments:</td>
               <td><textarea name = "comment" rows = "5" cols = "40"> .... </textarea></td>
            </tr>
			
			<tr>
               <td>Gender:</td>
                <td>  <input type = "radio" name = "gender" value = "Female">Female
                  <input type = "radio" name = "gender" value = "Male">Male
                 <!-- to show error message -->
			<span class="error">* <?php echo $genderErr;?></span>
			   </td>
            </tr>
            
			<tr>
               <td>Subjects:</td>			  
			 <td> <input type="checkbox" name="subject1" value="Yes"> Maths
				<input type="checkbox" name="subject2" value="Yes"> English <br>
				</td> 
            </tr>
            
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Save"> 
               </td>
            </tr>	
	
         </table>
		 </fieldset>
      </form>
      
   </body>
</html>

 