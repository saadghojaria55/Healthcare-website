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
			
		<div id="insert_heading"><h2><i class="fa fa-user-circle" aria-hidden="true"></i>
	Add New Content</h2></div>
			<form id="insert_form" method="POST"  >

				<table>
					<tr>
				<td><input type="text" name="images" id="images" placeholder="Enter image source  here"></td></tr>
				<tr>
				<td><input type="text" name="caption" id="caption" placeholder="Enter caption of the image here"></td>
				</tr>
				<td><button  class="submitbtn" name="submit"  >Submit</button></td>
				</table>
			</form>
			</div>
		<a href="../slider.php" >View Data</a>
		<div id="display"></div>
</body>

<script>
	$(document).ready(function(){
		$("button").click(function(e){
				e.preventDefault();
				
			var images=$("#images").val();
			var caption=$("#caption").val();
				$.ajax({
					url:'../ajax/insert_slider_sql.php',
					type:"POST",
					data:{images:images,caption:caption},
					success:function(result)
					{
						
						$("#display").html(result);
					}

				});
		
			});
		
	
		});
</script>
</html>

		