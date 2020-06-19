<?php
include '../include/connection.php';

$tag = $_POST['tag'];
$caption= $_POST['caption'];
$source = $_POST['source'];
$cat_tag = $_POST['cat_tag'];


if($tag=='' || $caption=='' || $source=='' || $cat_tag=='')
{
	echo "Enter All Details";
}
else
{
	$sql ="INSERT INTO products (tag,caption,img_src,cat_tag)
	VALUES ('$tag','$caption','$source','$cat_tag');";
	if (mysqli_query($conn,$sql))
	{
		
		echo "Insert success";
		

	}
	else
	{
		echo "sorry";
	}

}
mysqli_close($conn);
?>
