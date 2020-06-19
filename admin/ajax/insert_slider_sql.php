<?php
include '../include/connection.php';

$images = $_POST['images'];
$caption = $_POST['caption'];

// print_r($_POST);exit;


	$sql ="INSERT INTO slider (images,caption)
	VALUES ('$images','$caption');";
	if (mysqli_query($conn,$sql))
	{
		
		echo "Insert success";
		

	}
	else{
		echo "error";
	}

mysqli_close($conn);
?>
