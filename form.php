<?php
include 'db/connection.php';

// create a variable
$user=$_POST['user'];
$email=$_POST['email'];
$company=$_POST['company'];
$number=$_POST['number'];
$interest=$_POST['interest'];
$message=$_POST['message'];
//Execute the query
 
$sql="INSERT INTO form(user,email,company,number,interest,message)
				VALUES('$user','$email','$company','$number','$interest','$message');";
if(mysqli_query($conn ,$sql))
{
echo "Your message has been sent";
	
}
else{
	echo "sorry";
	echo mysqli_error ($conn);
}
mysqli_close($conn); // Connection Closed

?>