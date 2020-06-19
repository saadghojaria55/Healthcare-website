<?php 
include '../include/connection.php';


$id=$_POST['id'];
$content=$_POST['content'];

 $sql = "UPDATE aboutus SET content='$content' WHERE id=$id";


if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";

} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);


?>