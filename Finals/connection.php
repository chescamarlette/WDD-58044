<?php
$server = "localhost";
$db = "login";
$username = "root";
$password = "";
$conn = mysqli_connect($server,$username,$password,$db);
if($conn)
{	
		// removed the database is connected since it will show in the form
		echo ""; 
}
else
{
		echo "Database is not connected".mysqli_error($conn);
}
?>
