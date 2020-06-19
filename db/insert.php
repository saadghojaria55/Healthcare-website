<?php
include 'connection.php';

$sql ="INSERT INTO home (nav,silder_img,description,part1,part2,part3,part4,part5,part6,f1,f2,f3,f4)
VALUES ('Shubmham',231,01);";
$sql .="INSERT INTO home (user_name,password,status)
VALUES ('Saad',1234,01);";
$sql .="INSERT INTO home (user_name,password,status)
VALUES ('Sharik',214,01);";
if(mysqli_multi_query($conn,$sql))
{
	echo "New Record Added Successfully";
}
else
{
	echo "Error in adding values in table" .mysqli_error($conn);
}

mysqli_close($conn);



?>