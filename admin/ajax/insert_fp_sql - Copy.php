<?php
include '../include/connection.php';

$image = $_POST['image'];
$desp = $_POST['desp'];
$heading = $_POST['heading'];
// print_r($_POST);exit;


	$sql ="INSERT INTO featured_product (image,desp,heading)
	VALUES ('$image','$desp','$heading');";
	if (mysqli_query($conn,$sql))
	{
		
		echo "Insert success";
		

	}

mysqli_close($conn);
?>
