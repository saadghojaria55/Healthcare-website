<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">

	<title>SNT Admins Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../styles/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
		
<div id="heading">
		<h2>SNT Admin</h2>
</div>
	
		<div id="side_menu">
			<ul>
				<li><i class="fa fa-tachometer" aria-hidden="true">
Dashboard</i></li>
				<li><a href="../aboutus.php">About Us</a></li>
				<li><a href="../featuredproduct.php">Featured Product</a></li>
				<li><a href="../form.php">Form</a></li>
				<li><a href="../fp_primary.php">Primary Featured Product </a></li>
				<li><a href="../primary_nav.php">Primary Navigation </a></li>
				<li><a href="../slider.php">Slider</a></li>

			</ul>
		</div>
			<div id="table"  style="margin-left: 250px;">
			<h2><i class="fa fa-user-circle" aria-hidden="true"></i>
	Add New Content</h2>
			<form  method="post" action="../upload.php" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    
    <input type="text" name="heading" id="heading1" placeholder="Enter heading of the image here"><br>
   <textarea class="tarea" rows="10" cols="65" name="desp" id="desp" placeholder="Enter Your Description  Here"></textarea><br>
    <input type="submit" value="Upload Image" name="submit" id="submit" class="submit"  >
</form>
<div id=msg></div>
		
		<a href="../featuredproduct.php" >View Data</a>
		<div id="display"></div>
</body> 


</html>

		