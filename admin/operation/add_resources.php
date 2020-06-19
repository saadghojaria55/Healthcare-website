<?php 
include '../include/connection.php';

$label=$_POST['label'];
$name=$_POST['name'];
$link=$_POST['link'];
$cat_tag=$_POST['cat_tag'];
$id=$_POST['id'];
 $sql = "INSERT INTO resources (p_id,label,name,link,cat_tag) VALUES  ($id,'$label','$name','$link','$cat_tag');";


if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";

} else {
    echo "Error inserting record: " . mysqli_error($conn);
}

mysqli_close($conn);


?>