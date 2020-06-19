<?php include 'include/connection.php'; ?>

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
		<div class="display" style="float: left;height: 322px;">
		<table style="float:left;height: 100%">
			<?php 

			$id=($_GET['id']);

			$sql = "SELECT *  FROM products WHERE id=$id";
			$result = mysqli_query($conn, $sql);


			if (mysqli_num_rows($result) > 0) { ?>
			<h3>Product Details </h3>

			<?php 
			while($row = mysqli_fetch_assoc($result)) {
				$cat_tag=$row['cat_tag'];
				?>

				<tr>
					
					<td>Tag:-<?php echo $row['tag']; ?></td></tr>
					<tr>
						<td>Caption:-<?php echo $row['caption']; ?></td></tr>
						<tr>
							<td><?php echo "<img  style=width:192px;
								height: 126px; src=../cat-image/" .$row['img_src'] .">"; ?></td></tr>
								<tr><td>Category Tag:-<?php echo $cat_tag;} ?></td></tr>

							</tr>
						</table>
						<?php }?>

</div>

						<div id="specs" style="float:left;width:50%;">
							<h3>Specifications</h3>
							<?php
							$sql="SELECT heading,des,css_id,cat_tag FROM specification  WHERE  p_id='$id'";

							$result = mysqli_query($conn,$sql);
							if (mysqli_num_rows($result) > 0) {

								while($row = mysqli_fetch_assoc($result)) {
									$heading=$row['heading'];
									$des=$row['des'];
									$css_id=$row['css_id'];
									$cat_tag=$row['cat_tag'];

									?>
									<table>
										<tr> 	
											<td><b>Heading:-</b><?php echo $heading;?></td></tr><tr>
											<td><b>Description:-</b><?php echo $des; ?></td></tr><tr>
											<td><b>CSS ID:-</b><?php echo $css_id;?></td></tr><tr>
											<td><b>Category:-</b><?php echo $cat_tag;?></td></tr>
										</table> 		
										<?php
									}//while ends
									}//if ends
									else{
										
							?>
	<p class="empty_specs" >Specifications are not  present for this product.</p> 
	<a  class="empty_specs" style="cursor:pointer;color:blue;" onclick="add_specs('<?php echo $id;?>')">Add</a>
	<div id="insert_specs" style="display: none;">
		<div >
			<form id="form" >

				<table>
					<tr>
						<td><textarea class="tarea" rows="2" cols="25" name="heading1" id="heading1" placeholder="Enter Heading"></textarea>
						</td>
					</tr>

					<tr>
						<td><textarea class="tarea" rows="2" cols="25" name="label" id="label2" placeholder="Enter Label"></textarea>
						</td>

					</tr>
					<tr>
						<td><textarea class="tarea" rows="2" cols="25" name="css" id="css" placeholder="Enter Description"></textarea>
						</td>
					</tr>
					<tr>
						<td><textarea class="tarea" rows="2" cols="25" name="des" id="des" placeholder="Enter Description"></textarea>
						</td>
					</tr>

					<input type="hidden" id="cat_tag" value="<?php echo $cat_tag; ?>" />
					<input type="hidden" id="id" value="<?php echo $id ?>" />

					<td><button  class="submitbtn_specs" name="update">Add</button></td>
				</table>
			</form>
			<div id="message"></div>
			<?php
		}?></div>
		</div>
		</div>



		<div class="overview" style="width:50%;float:left;">
			<h3>Overview</h3>
			<?php $sql="SELECT * FROM overview HAVING cat_tag='$cat_tag'";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$label=$row['label'];
					$desp=$row['desp'];
					$cat_tag=$row['cat_tag'];
					?>
					<table>
						<tr> 	
							<td><b>Label :-</b><?php echo $label;?></td></tr><tr>
							<td><b>Description:-</b><?php echo $desp; ?></td></tr><tr>
							<td><b>Category:-</b><?php echo $cat_tag;?></td></tr>
						</table> 		
						<?php
					}

				}
				else{

					?>
					<p class="empty_overview">Overview is not  present for this product.</p>
					<a class="empty_overview" style="cursor:pointer;color:blue;" onclick="add_overview('<?php echo $id;?>')">Add</a>
					<div id="insert_overview" style="display:none;">
						<div >
			<form id="form" >

				<table>
					<tr>
						<td><textarea class="tarea" rows="2" cols="25" name="label" id="label1" placeholder="Enter Label"></textarea>
						</td>
					</tr>

					<tr>
						<td><textarea class="tarea" rows="2" cols="25" name="desp" id="desp" placeholder="Enter Description"></textarea>
						</td>

					</tr>
					
					<tr>
						<td><textarea class="tarea" rows="2" cols="25" name="points" id="points" placeholder="Enter Points"></textarea>
						</td>
					</tr>

					<input type="hidden" id="cat_tag" value="<?php echo $cat_tag; ?>" />
					<input type="hidden" id="id" value="<?php echo $id ?>" />

					<td><button  class="submitbtn_overview" name="update">Add</button></td>
				</table>
			</form>
			<div id="message1"></div>
			<?php
		}?></div>	
			</div>

		</div>
				<div class=resources style="width:50%;float:left;">
				<h3>Resources</h3>
				<?php
				$sql="SELECT * FROM resources WHERE p_id='$id'";
				$result = mysqli_query($conn,$sql);
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						$label=$row['label'];
						$name=$row['name'];
						$link=$row['link'];
						$cat_tag=$row['cat_tag'];
						?>
						<table>
							<tr> 
								<td><b>Label :-</b><?php echo $label;?></td></tr><tr>
								<td><b>Name:-</b><?php echo $name; ?></td></tr><tr>
								<td><b>Link:-</b><?php echo $link;?></td></tr>
								<td><b>Category Tag:-</b><?php echo $cat_tag;?></td></tr>

							</table> 		
							<?php
						}

					}
					else{?>
					<p class="empty">Resources are not  present for this product.</p>
					<a  style="cursor:pointer;color:blue;"  class="empty" onclick="add_resources('<?php echo $id;?>')">Add</a>
					<div id="insert_resources" style="display: none;">
						<div>
							<form id="form" >

								<table>

									<tr>
										<td><textarea class="tarea" rows="2" cols="25" name="label" id="label" placeholder="Enter Label"></textarea>
										</td>

									</tr>
									<tr>
										<td><textarea class="tarea" rows="2" cols="25" name="name" id="name" placeholder="Enter Name  of file"></textarea>
										</td>
									</tr>
									<tr>
										<td><textarea class="tarea" rows="2" cols="25" name="link" id="link" placeholder="Enter link"></textarea>
										</td>
									</tr>
									<input type="hidden" id="cat_tag" value="<?php echo $cat_tag; ?>" />
									<input type="hidden" id="id" value="<?php echo $id ?>" />

									<td><button  class="submitbtn" name="update">Add</button></td>
								</table>
							</form></div>
							<div id="message"></div>
							<?php
						}?>
					</table>
					</div>
				</body>
				<script>

					function add_specs(id)
					{
						$('.empty_specs').css('display','none'); 
						$('#insert_specs').css('display','block'); 
						$(".submitbtn_specs").click(function(e){
							e.preventDefault();	
							var heading=$("#heading1").val();
							var label=$("#label2").val();
							var des=$("#des").val();
							var cat_tag=$("#cat_tag").val();
							var id=$("#id").val();



							$.ajax({
								url:'operation/add_specs.php',
								type:"POST",
								data:{id:id,label:label,heading:heading,des:des,cat_tag:cat_tag},
								success:function(result)
								{
									$("#message").html(result);

								}

							});
						});
					}




				</script>
				<script>
					function add_resources(id){ 

						$('.empty').css('display','none'); 
						$('#insert_resources').css('display','block'); 
						$(".submitbtn").click(function(e){
							e.preventDefault();	
							var label=$("#label").val();
							var name=$("#name").val();
							var link=$("#link").val();
							var cat_tag=$("#cat_tag").val();
							var id=$("#id").val();
							$.ajax({
								url:'operation/add_resources.php',
								type:"POST",
								data:{id:id,label:label,name:name,link:link,cat_tag:cat_tag},
								success:function(result)
								{
									$("#message").html(result);

								}

							});
						});
					}</script>
					<script>
						function add_overview(id)
						{
							$('.empty_overview').css('display','none'); 
							$('#insert_overview').css('display','block'); 
							$(".submitbtn_overview").click(function(e){
									e.preventDefault();	
									var label=$("#label1").val();
									var desp=$("#desp").val();
									var points=$("#points").val();
									var cat_tag=$("#cat_tag").val();
									var id=$("#id").val();
									$.ajax({
								url:'operation/add_overview.php',
								type:"POST",
								data:{id:id,label:label,desp:desp,points:points,cat_tag:cat_tag},
								success:function(result)
								{
									$("#message1").html(result);

								}

							});
						});
						
						}

					</script>

					</html>







