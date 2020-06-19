<?php
include '../include/connection.php';

$heading = $_POST['heading'];
$hyperlink = $_POST['hyperlink'];
$active = $_POST['active'];

// print_r($_POST);exit;


	$sql ="INSERT INTO primary_nav (nav_heading,href,active)
	VALUES ('$heading','$hyperlink','$active');";
	if (mysqli_query($conn,$sql))
	{
		
		echo "Insert success";
		

	}
	else{
		echo "error";
	}

mysqli_close($conn);
?>
