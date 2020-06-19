<?php 
include '../include/connection.php';
$id=$_POST['id'];
$label=$_POST['label'];
$desp=$_POST['desp'];
$points=$_POST['points'];
$cat_tag=$_POST['cat_tag'];

print_r($_POST);
exit();
 $sql = "INSERT INTO overview (id,label,desp,points,cat_tag) VALUES  ($id,'$label','$desp',$points,'$cat_tag');";
if (mysqli_query($conn, $sql)) {
    echo "Record Inserted successfully";

} else {
    echo "Error inserting record: " . mysqli_error($conn);
}

mysqli_close($conn);


?>