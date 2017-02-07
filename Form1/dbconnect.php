<?php
$user = 'root';
$pass ='';
$db='test';
$dbconnect = mysql_connect('localhost', $user, $pass) or die(" unable to connect"); // to connect with database
echo "Database is connected<br>";
mysql_select_db("test"); // to open database   
?>