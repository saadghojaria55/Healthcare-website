<?php 
include '../include/connection.php';


$id=$_POST['id'];
$image=$_POST['image'];
$caption=$_POST['caption'];

 $sql = "UPDATE slider SET images='$image',caption='$caption' WHERE id=$id";


if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";

} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);


?>