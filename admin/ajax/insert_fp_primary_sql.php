<?php
include '../include/connection.php';

$image = $_POST['image'];
// print_r($_POST);exit;


	$sql ="INSERT INTO fp_primary (image)
	VALUES ('$image');";
	if (mysqli_query($conn,$sql))
	{
		
		echo "Insert success";
		

	}

mysqli_close($conn);
?>
