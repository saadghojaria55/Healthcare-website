<?php 
include '../include/connection.php';

$id=$_POST['id'];

$sql = "SELECT * FROM slider  WHERE id=$id";
$get = mysqli_query($conn,$sql);
$data = array();
while ($show = mysqli_fetch_array($get)) {
	
	{

		$data['ab_id']=$show['id'];
		$data['ab_image']=$show['images'];
		$data['ab_caption']=$show['caption'];
		
	}
	header("Content-Type: application/json; charset=utf-8", true);

		echo json_encode($data);
}
//print_r($data);
mysqli_close($conn);
?>