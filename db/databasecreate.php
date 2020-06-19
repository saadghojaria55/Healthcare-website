<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password);

$sql="Create Database snt";
	if(mysqli_query($conn,$sql))
	{
		echo "Database Created successfully";
	}
	else
	{
		echo "Error in database connection" .mysqli_errno($conn);
	}
?>