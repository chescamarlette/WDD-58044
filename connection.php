<?php
$server = "localhost";
$db = "login";
$username = "root";
$password = "";
$conn = mysqli_connect($server,$username,$password,$db);
if($conn)
{
		echo "";
	
}
else
{
		echo "Database is not connected".mysqli_error($conn);
}
?>