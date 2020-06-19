<?php
include '../include/connection.php';

$content = $_POST['content'];
// print_r($_POST);exit;


	$sql ="INSERT INTO aboutus (content)
	VALUES ('$content');";
	if (mysqli_query($conn,$sql))
	{
		
		echo "Insert success";
		

	}
	else
	{
		echo "sorry";
	}

mysqli_close($conn);
?>
