<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">

	<title>SNT Admins Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/styles.css">
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
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="featuredproduct.php">Featured Product</a></li>
				<li><a href="form.php">Form</a></li>
				<li><a href="fp_primary.php">Primary Featured Product </a></li>
				<li><a href="primary_nav.php">Primary Navigation </a></li>
				<li><a href="slider.php">Slider</a></li>
			</ul>
		</div>
		<div id="update" style="display: none;">
			<div ><h2><i class="fa fa-user-circle" aria-hidden="true"></i>
				Update</h2></div>
				<form id="form" >

					<table>
						<tr>
							<td>
								<label>Tag</label>
								<textarea class="tarea" rows="1" cols="10" name="heading" id="heading1" ></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<label>Caption</label>
								<textarea class="tarea" rows="1" cols="30" name="caption" id="caption"></textarea>
							</td>


						</tr>
						<br>
						<tr>
							<td>
								<label>Image Source</label>
								<textarea class="tarea" rows="1" cols="30" name="source" id="source"></textarea>
							</td>

						</tr>

						<tr>
							<td>
								<label>Category Tag</label>
								<textarea class="tarea" rows="1" cols="30" name="tag" id="tag"></textarea>
							</td>

						</tr>
						<tr>
							<td>
								<label>ID</label>
								<textarea class="tarea" rows="1" cols="30" name="id" id="id"></textarea>
							</td>

						</tr>



						<td><button  class="submitbtn" name="update">Update</button></td>


					</table>
				</form></div>
				<div id="newcontent"><a href="operation/add_categories.php">Add New Category</a></div>
					<div id="message"></div>
				<div id="display"></div>
			

			</body>

			</html>

			<script>
				function displaydata(){
					$.ajax({
						url:'ajax/categories.php',
						type:"GET",
						success:function(result)
						{
							$("#display").html(result);
							$('#table').css('display','block');				
						}

					});

				}
			</script>
<script>
				$(document).ready(function(){
					displaydata();
				}); 
			</script>