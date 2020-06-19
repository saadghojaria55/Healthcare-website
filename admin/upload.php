<?php
include 'include/connection.php';

$target_dir = "../images/";
$desp = $_POST['desp'];
$heading = $_POST['heading'];
$target_file =basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file  images/". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

$sql = "INSERT INTO featured_product (image,desp,heading)
VALUES ('$target_file','$desp','$heading')";

if (mysqli_query($conn, $sql)) {
	echo "<br>New record created successfully";?>
	<img class="image-preview" src="<?php echo $target_file; ?>" class="upload-preview" width=200px height=200px />
	<a href="featuredproduct.php">View List</a>
<?php
    
    
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 } 
}
mysqli_close($conn);
?>