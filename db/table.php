<?php
include 'connection.php';


$sql="CREATE TABLE home(
	nav VARCHAR(30) NOT NULL,
	slider_img BLOB NOT NULL,
	description VARCHAR(1000) NOT NULL,
	part1 BLOB NOT NULL,
	part2 BLOB NOT NULL,
	part3 BLOB NOT NULL,
	part4 BLOB NOT NULL,
	part5 BLOB NOT NULL,
	part6 BLOB NOT NULL,
	f1 BLOB NOT NULL,
	f2 BLOB NOT NULL,
	f3 BLOB NOT NULL,
	f4 BLOB NOT NULL
	)";
if (mysqli_query($conn, $sql))
	{
		echo "Table Login Created Successfully";
	}
else
	{
		echo "Error in creating table"  . mysqli_error($conn);
	}

mysqli_close($conn);
?>