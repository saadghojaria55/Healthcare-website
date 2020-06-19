<?php
include 'db/connection.php';

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

$sql = "INSERT INTO featured_product (image)
VALUES ('/snt/images/earth.jpg')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>