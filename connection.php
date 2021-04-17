<?php 
$username="root";  
$password="";  
$hostname = "localhost";  
//connection string with database  
$conn = mysqli_connect($hostname, $username, $password)  
or die("Unable to connect to MySQL");  
echo "";  
// connect with database  
$selected = mysqli_select_db($conn, "bank")  
or die("Could not select examples");

?> 