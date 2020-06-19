<?php include '../db/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title>Wireless Video
		
	</title>
	<!-- jQuery library (served from Google) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="../js/bxslider.min.js"></script>
	<!-- bxSlider CSS file -->
	<link href="../js/jquery.bxslider.css" rel="stylesheet" /><link rel="icon" href="E:\saad\logo.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap.css">
	<link rel="stylesheet" href="../css/style2.css">
	<link rel="stylesheet" type="text/css" href="../css/select-2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
	<!--- main start -->   
	<div class="main">
		<header  >
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-9 f_head_block">

						<a href="../snt1.php">

							<div>

								<img src="../logo.png" class="img-responsive">

							</div>

							<div>

								<h2 style="color: #000;"><b>SNT Distribution Pvt Ltd</b></h2>
							</div>

						</a>

					</div>

					<div class="col-sm-6 col-md-3 s_head_block">
						<form action="" id="searchform">

							<div class="form-group">

								<div class="input-group">

									<input type="text" name="search" class="form-control" placeholder="Search Products">

									<span class="input-group-btn">

										<button type="submit" class="btn btn-primary">Search</button>

									</span>

								</div>

							</div>

						</form>
					</div>
				</div>
			</div>
		</header>	
		<!--header end-->
		<!--Whole container-->

		<div class="container">
			<nav class="navbar">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div id="navbar" class="navbar-collapse collapse" >
						<ul class="nav navbar-nav ">
							<li class="active"><a href="../snt1.php">Home</a></li>
							<li><a href="">About Us</a></li>
							<li><a href="../product.php">Products</a></li>
							<li><a href="">Contact Us</a></li>
						</ul>

						<ul class="nav navbar-nav navbar-right top_social">
							<li  id="fb"><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li id="tw"><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<!--<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>-->
							<li id="ln"><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<!--<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>-->
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
			
			<hr style="border-color: #E25253; border-width: 4px; margin: 0px 0;"></hr>
			<ul class="breadcrumb">
				<li><a href="../product.php">Products</a></li>
				<li class="active">Wireless Video</li>

			</ul>
			<hr style="border-color: #E25253; border-width: 4px; margin: 0px 0;"></hr>



			<section class="product_des_section">

				<h1>WIRELESS VIDEO</h1>

				<p></p>

				</section>



				<!--PRODUCT  LIST-->


				<section class="product_listing">

					<div class="row" align="right">
						<div class="col-md-5 col-md-offset-7">
							<select class="form-control select2 select2-hidden-accessible" name="fiter" tabindex="-1" aria-hidden="true">
								<option value=""></option>
								<option value="0">All</option>
								<option value="1">HD Monitors</option><option value="6">EndoVue®&nbsp;32</option><option value="7">3D Monitor</option><option value="8">4K Monitors</option>          </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 457.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-fiter-8d-container"><span class="select2-selection__rendered" id="select2-fiter-8d-container"><span class="select2-selection__placeholder">Filter By Categories</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
							</div>
						</div>

						
						<div class="row pro_list">
						<?php    
				$sql = mysqli_query($conn, "SELECT img_src,caption,tag FROM products WHERE cat_tag='cat_3'");
							while ($row = mysqli_fetch_assoc($sql)){	
						
							$image_source=$row['img_src'];		
							$caption=$row['caption'];
								$tag=$row['tag'];
							?>
								<div class="col-sm-6 col-md-3">
								<a href="">
									<div class="featured_product" style="background-color: #4975C4;">
										  <?php 	
						
								echo "<img src=../cat-image/" .$row['img_src']. ">";
								echo "<h2>" . $row['tag']. "</h2>";
								echo "<p>" . $row['caption']. "</p>";
							
							?>


									</div>
								</a>
							</div>
							<?php 
							};
							?>
							


				</div>

			</section>
			  <!--Footer Start-->
          	<footer>



          		<div class="container">

          			<div class="row" id="footer">



          				<div class="col-md-4">

          					<h2>About Us</h2>

          					<p>

          						SNT Distribution Pvt Ltd is known to be a leading distributor for Medical Imaging Products of Sony India Private Ltd. having branches across India in Bangalore, Chennai, Delhi, Kolkata, Mumbai &amp; Telangana.  The product range offered by us includes Medical Grade Monitors, Thermal Printers and Medical Grade Video Recorders which are manufactured by Sony Corporation, Japan.

          					</p>

          				</div>



          				<div class="col-md-4">

          					<h2>LINKS</h2>

          					<ul>

          						<li><a href="">Home</a></li>

          						<li><a href="">About Us</a></li>



          					</ul>

          					<ul>
          						<li><a href="">Products</a></li>
          						<li><a href="">Contact Us</a></li>

          					</ul>
          					<ul>
          						<li><a href="">Sitemap</a></li>
          					</ul>

          				</div>



          				<div class="col-md-4">

          					<h2>Stay In Touch</h2>

          					<form>

          						<div class="form-group">

          							<div class="input-group">

          								<input type="text" name="serach" class="form-control" placeholder="Enter Your E-mail">

          								<span class="input-group-btn">

          									<button class="btn btn-primary" type="button">Submit</button>

          								</span>

          							</div>

          						</div>

          					</form>

          					<div class="social">

          						<a href="" target="_blank"><i class="fa fa-facebook" style="color:#3b5998"></i></a>

          						<a href="" target="_blank"><i class="fa fa-twitter"></i></a>

          						<!-- <a href="#"><i class="fa fa-google-plus"></i></a>-->
          						<a href="" target="_blank"><i class="fa fa-linkedin"></i></a>

          						<!-- <a href="#"><i class="fa fa-instagram"></i></a> -->

          					</div>
          				</footer>
          					</div><!--Main Div-->
	</div></body></html>