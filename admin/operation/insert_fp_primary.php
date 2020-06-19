
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
			<div id="table" >
			
		<div id="insert_heading"><h2><i class="fa fa-user-circle" aria-hidden="true"></i>
	Add New Content</h2></div>
			<form id="insert_form" method="POST" >

				<table>
					<tr>
				<td><textarea class="tarea" rows="10" cols="10" name="image" id="image" placeholder="Enter Your Image Source Here"></textarea></td>
			</tr>
					

					<td><button  class="submitbtn" name="submit"  >Submit</button></td>


				</table>
			</form>

		</div>
		<a href="../fp_primary.php" >View Data</a>
		<div id="display"></div>
</body>

<script>
	$(document).ready(function(){
		$("button").click(function(e){
				e.preventDefault();
				
			var image=$("#image").val();
				$.ajax({
					url:'../ajax/insert_fp_primary_sql.php',
					type:"POST",
					data:{image:image},
					success:function(result)
					{

						$("#display").html(result);
					}

				});
		
			});
		
	
		});
</script>
</html>

		