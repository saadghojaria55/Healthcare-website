<?php include 'db/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title> Home | SNT Distribution Private Limited
		
	</title>
	<!-- jQuery library (served from Google) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="js/bxslider.min.js"></script>
	<!-- bxSlider CSS file -->
	<link href="js/jquery.bxslider.css" rel="stylesheet" /><link rel="icon" href="E:\saad\logo.png">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
	<!--- main start -->   
	<div class="main">
		<header >
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-9 head_1">

						<a href="snt1.php">

							<div>

								<img src="logo.png" class="img-responsive">

							</div>

							<div>

								<h3 style="color: #000;"><b>SNT Distribution Pvt Ltd</b></h3>
							</div>

						</a>

					</div>

					<div class="col-sm-6 col-md-3 head_2">
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
						<button type="button" class="navbar-toggle open" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div id="navbar" class="navbar-collapse collapse in" aria-expanded="true">
						<div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav ">
        <li class="active"><a href="">Home</a></li>
        <li><a href="about-us.php">About Us</a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="contact-us.php">Contact Us</a></li>
      </ul>
					
						<ul class="nav navbar-nav navbar-right top_social">
							<li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<!--<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>-->
							<li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<!--<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>-->
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
			<hr style="border-color: #E25253; border-width: 4px; margin: 0px 0;"></hr>
			<!--slider -->
			<section class="slider_section">
				<h2 style="text-align: center;margin:32px;">Medical</h2>
				<div class="products">
				
					<ul class="bxslider">
						<?php 
							$sql = mysqli_query($conn, "SELECT images FROM slider ");
							while ($row = mysqli_fetch_assoc($sql)){
								?><li>
								<?php echo "<img src=images/" . $row['images']. "  >";
							?></li>
							<?php
						};
							?>
						
					
					</ul>
				</div>

				<div class="slider_bottom">

					<a id="products" class="btn btn-link active" style="text-decoration:none;">Products</a>

					<a id="applications" class="btn btn-link" style="text-decoration:none;">Applications</a>

				</div>
			</section>
			<section class="mini_content_section">



				<?php    
				$sql = mysqli_query($conn, "SELECT content FROM aboutus WHERE id='1'");
							while ($row = mysqli_fetch_assoc($sql)){	
							$content=$row['content'];
							echo "<p>".$content. "</p>";
							
							
								
							}
							?>
							


			</section>
			<section class="wall_section">



				<div class="row" id="fp">

					<div class="col-sm-6 col-md-6">

						<img src="images/featuredsurgical.jpg" class="img-responsive">

					</div>

					<div class="col-sm-6 col-md-6">

						<img src="images/2.png" class="img-responsive">

						<h2>Surgical Monitor</h2>

						<p>

							Featuring resolution up to 4K plus a wide range of inputs and display modes, Sony's surgical monitors are compliant with the latest standards for clinical use.
						</p>

					</div>

				</div>



				<div class="row" id="fp">

					<div class="col-sm-6 col-md-6">

						<img src="images/3.png" class="img-responsive">

						<h2>Medical Print Media</h2>

						<p>

							Optimised for high results with Sony medical printers, there’s a full range of medical print media supplies from Sony, including colour.
						</p>

					</div>

					<div class="col-sm-6 col-md-6">

						<img src="images/featuredmedicalprint.jpg" class="img-responsive">

					</div>

				</div>



				<div class="row" id="fp">

					<div class="col-sm-6 col-md-6">

						<img src="images/visualimaging.jpg" class="img-responsive">

					</div>

					<div class="col-sm-6 col-md-6">

						<img src="images/6.png" class="img-responsive">

						<h2>Visual Imaging</h2>

						<p>

							Add clarity to every conference with visual imaging cameras by Sony. Make sure every presenter is seen clearly in crisp, detail-packed HD – even when the lights are low. 
						</p>

					</div>

				</div>



			</section>
			<section class="featured_section">
				<h1>Featured Products</h1>

				<div class="row" id="featured">



					<div class="col-sm-6 col-md-3">

						<a style="text-decoration: none;" href="">

							<div class="featured_product" style="background-color: #4EA1B2;">

								<?php 
							$sql = mysqli_query($conn, "SELECT image FROM fp_primary WHERE id='6'");
							while ($row = mysqli_fetch_assoc($sql)){
								echo "<img src=admin/" . $row['image']. " >";
							}
							?>

								<h2>EVI-D100P</h2>

								<p></p>

							</div>

						</a>

					</div>



					<div class="col-sm-6 col-md-3">

						<a style="text-decoration: none;" href="">

							<div class="featured_product" style="background-color: #4EA1B2;">

								<?php 
							$sql = mysqli_query($conn, "SELECT image FROM fp_primary WHERE id='7'");
							while ($row = mysqli_fetch_assoc($sql)){
								echo "<img src=admin/" . $row['image']. " >";
							}
							?>

								<h2>ZeroWire®&nbsp;G2 Wireless Imaging</h2>

								<p></p>

							</div>

						</a>

					</div>



					<div class="col-sm-6 col-md-3">

						<a style="text-decoration: none;" href="">

							<div class="featured_product" style="background-color: #4EA1B2;">

								<?php 
							$sql = mysqli_query($conn, "SELECT image FROM fp_primary WHERE id='8'");
							while ($row = mysqli_fetch_assoc($sql)){
								echo "<img src=admin/" . $row['image']. " >";
							}
							?>
								<h2>LMD-X550MT</h2>

								<p></p>

							</div>

						</a>

					</div>



					<div class="col-sm-6 col-md-3">

						<a style="text-decoration: none;" href="">

							<div class="featured_product" style="background-color: #4EA1B2;">

								<?php 
							$sql = mysqli_query($conn, "SELECT image FROM fp_primary WHERE id='9'");
							while ($row = mysqli_fetch_assoc($sql)){
								echo "<img src=admin/" . $row['image']. " >";
							}
							?>
								<h2>LMD-2735MD</h2>

								<p></p>

							</div>

						</a>

					</div>



				</div>
			</section>
			<section class="contact_section">
				<h1>Contact Us</h1>




				<div class="row">



					<div class="col-md-12">


						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7538.594275359761!2d72.84186362287114!3d19.13846639820829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b62df8265d6d%3A0x7e927e97c04fbf04!2sMomin+Nagar%2C+Jogeshwari+West%2C+Mumbai%2C+Maharashtra+400047!5e0!3m2!1sen!2sin!4v1498720813864" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>



				</div>
				<!--Form Section-->
				<div class="row">



					<div class="col-md-8 col-md-offset-2">



						<form id="conatct_enuery"  method="post" novalidate="novalidate" class="fv-form fv-form-bootstrap"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>



							<div class="form-group has-feedback">

								<input type="text" name="name" class="form-control" placeholder="NAME" data-fv-field="name"><i class="form-control-feedback fv-icon-no-label" data-fv-icon-for="name" style="display: none;"></i>

								<small class="help-block" data-fv-validator="notEmpty" data-fv-for="name" data-fv-result="NOT_VALIDATED" style="display: none;">The  full name is required</small></div>



								<div class="form-group has-feedback">

									<input type="email" name="email" class="form-control" placeholder="E-Mail" data-fv-field="email"><i class="form-control-feedback fv-icon-no-label" data-fv-icon-for="email" style="display: none;"></i>

									<small class="help-block" data-fv-validator="notEmpty" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">The email is required</small><small class="help-block" data-fv-validator="emailAddress" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">The eamil address is not valid</small></div>



									<div class="form-group has-feedback">

										<input type="text" name="company_name" class="form-control" placeholder="COMPANY NAME" data-fv-field="company_name"><i class="form-control-feedback fv-icon-no-label" data-fv-icon-for="company_name" style="display: none;"></i>

										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="company_name" data-fv-result="NOT_VALIDATED" style="display: none;">The  company name is required</small></div>



										<div class="form-group has-feedback">

											<input type="text" name="mobile" class="form-control" placeholder="PHONE NUMBER" data-fv-field="mobile"><i class="form-control-feedback fv-icon-no-label" data-fv-icon-for="mobile" style="display: none;"></i>

											<small class="help-block" data-fv-validator="notEmpty" data-fv-for="mobile" data-fv-result="NOT_VALIDATED" style="display: none;">The phone number is required</small><small class="help-block" data-fv-validator="integer" data-fv-for="mobile" data-fv-result="NOT_VALIDATED" style="display: none;">The value is not an number</small></div>



											<div class="form-group">

												<input type="text" name="type_of_interest" class="form-control" placeholder="TYPE OF INTEREST">

											</div>



											<div class="form-group">

												<textarea class="form-control" rows="10" style="resize: none;" name="des" placeholder="MESSAGE"></textarea>

											</div>
											<div class="form-group">
												<div align="center" class="alert alert-danger alert-dismissable fade in" id="info2" style="display: none;">
													<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

												</div>

												<div class="form-group" align="center">

													<div class="alert alert-success alert-dismissable fade in" id="info" style="display: none;">

														<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

														<strong>Success!</strong> Enquiry Successfully Send.

													</div>

												</div>



												<div class="form-group text-center">

													<button type="submit" class="btn btn-danger btn-lg" style="background-color: #CC1311;">SEND MESSAGE</button>

												</div>



											</form>



										</div>



									</div>
								</section>
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

													<a href="" target="_blank"><i class="fa fa-facebook"></i></a>

													<a href="" target="_blank"><i class="fa fa-twitter"></i></a>

													<!-- <a href="#"><i class="fa fa-google-plus"></i></a>-->
													<a href="" target="_blank"><i class="fa fa-linkedin"></i></a>

													<!-- <a href="#"><i class="fa fa-instagram"></i></a> -->

												</div>
									</footer>
											</div>
											<!--container div-->
										</div>


										<!--main div-->
									</div>
								</div>
								
						
							<script>
								$(document).ready(function(){

									$('.bxslider').bxSlider({
										minSlides: 1,
										maxSlides: 4,
										slideWidth:300,
										slideMargin:0,
										moveSlides:1,
										
										captions:true
									});
								});
							</script>	


