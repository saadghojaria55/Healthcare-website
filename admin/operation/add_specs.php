<?php 
include '../include/connection.php';

$heading=$_POST['heading'];
$label=$_POST['label'];
$des=$_POST['des'];
$cat_tag=$_POST['cat_tag'];
$id=$_POST['id'];
 $sql = "INSERT INTO specification (p_id,heading,label,des,cat_tag) VALUES  ($id,'$heading','$label','$des','$cat_tag');";


if (mysqli_query($conn, $sql)) {
    echo "Record Inserted successfully";

} else {
    echo "Error inserting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>