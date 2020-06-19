<?php 
include '../include/connection.php';


$image=$_POST['image'];
$desp=$_POST['desp'];
$heading1=$_POST['heading1'];
$id=$_POST['id'];


 $sql = "UPDATE featured_product SET image='$image',desp='$desp',heading='$heading1' WHERE id=$id";


if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";

} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);


?>