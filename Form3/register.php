
 <?php
$user = 'root';
$pass ='';
$db='sweddb';
$dbconnect = mysql_connect('localhost', $user, $pass) or die(" unable to connect"); // to connect with database
echo "DataBase is connected :-)";
mysql_select_db("sweddb"); // to open database        
		// define variables and set to empty values
        $usename = $password = "";
         
         if ($_POST["submit"] == "Save") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $time = test_input($_POST["time"]);
			$date = test_input($_POST["date"]);
            $comment = test_input($_POST["comment"]);
			$subject1 = test_input($_POST["subject1"]);
			$subject2 = test_input($_POST["subject2"]);
            $gender = test_input($_POST["gender"]);
			$q1= "insert into register(name,email,time,date,comment,subject1,subject2,gender) values('".$name."','".$email."','".$time."','".$date."','".$comment."','".$subject1."','".$subject2."','".$gender."')";
	//mysql_query($q1);// to execute query
	if(mysql_query($q1)) // execute uery and show if it saved or error
		echo "record saved";
	else
		echo mysql_error();
         }
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
	  
