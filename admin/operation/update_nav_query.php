<?php 
include '../include/connection.php';


$id=$_POST['id'];
$nav_heading=$_POST['nav_heading'];
$hyperlink=$_POST['hyperlink'];
$active=$_POST['active'];

 $sql = "UPDATE primary_nav SET nav_heading='$nav_heading',href='$hyperlink',active='$active' WHERE id=$id";


if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";

} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);


?>