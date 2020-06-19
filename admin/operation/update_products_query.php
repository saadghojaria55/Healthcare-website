<?php 
include '../include/connection.php';

$id=$_POST['id'];
$heading1=$_POST['heading1'];
$caption=$_POST['caption'];
$source=$_POST['source'];
$tag=$_POST['tag'];

 $sql = "UPDATE products SET tag='$heading1',caption='$caption',img_src='$source',cat_tag='$tag' WHERE id=$id";


if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";

} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);


?>