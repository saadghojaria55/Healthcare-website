<?php 
include '../include/connection.php';

$id=$_POST['id'];

$sql = "SELECT * FROM primary_nav  WHERE id=$id";
$get = mysqli_query($conn,$sql);
$data = array();
while ($show = mysqli_fetch_array($get)) {
	
	{

		$data['ab_id']=$show['id'];
		$data['ab_heading']=$show['nav_heading'];
		$data['ab_href']=$show['href'];
		$data['ab_active']=$show['active'];
	}
	header("Content-Type: application/json; charset=utf-8", true);

		echo json_encode($data);
}
//print_r($data);
mysqli_close($conn);
?>