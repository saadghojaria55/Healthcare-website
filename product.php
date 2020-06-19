<?php include 'db/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title>Category | Our Products, Sony Medical Imaging Products Distributor
		
	</title>
	<!-- jQuery library (served from Google) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="js/bxslider.min.js"></script>
	<!-- bxSlider CSS file -->
	<link href="js/jquery.bxslider.css" rel="stylesheet" /><link rel="icon" href="E:\saad\logo.png">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
	<!--- main start -->   
	<div class="main">
		<header  >
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-9 f_head_block">

						<a href="snt1.php">

							<div>

								<img src="logo.png" class="img-responsive">

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
							<li class="active"><a href="snt1.php">Home</a></li>
							<li><a href="about-us.php">About Us</a></li>
							<li><a href="product.php">Products</a></li>
							<li><a href="contact-us.php">Contact Us</a></li>
						</ul>

						<ul class="nav navbar-nav navbar-right top_social">
							<li  id="fb"><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li id="tw"><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
							
							<li id="ln"><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
			
			<hr style="border-color: #E25253; border-width: 4px; margin: 0px 0;"></hr>
			<ul class="breadcrumb">
				<li><a href="snt1.php">Home</a></li>
				<li class="active">Products</li>

			</ul>
			<hr style="border-color: #E25253; border-width: 4px; margin: 0px 0;"></hr>
			<section class="product_listing">

   			 <div class="row pro_list">

<?php    
				$sql = mysqli_query($conn, "SELECT link,image_source,caption FROM categories");
							while ($row = mysqli_fetch_assoc($sql)){	
							$link=$row['link'];
							$image_source=$row['image_source'];		
							$caption=$row['caption'];
							?>
			<div class="col-md-3">
	        <div class="featured_product" style="background-color: #4975C4;">
                    <?php 	
							
								echo "<a href=" . $row['link']. ">";
								echo "<img src=images/" . $row['image_source']. ">";
								echo "<h2>"  .$row['caption']. "</h2>";
							
							?>
							</div></a></div>
							<?php 
						};
					?>

          </div>
          </div><!--row_pro_list end__-->
          </section><!--section product listing end-->




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
											</div>
											<!--container div-->
										</div>

</div></body></html><script >
	$(document).ready(function () {
			  $(".navbar-toggle").on("click", function () {
				    $(this).toggleClass("active"); 
				     var NAME = document.getElementById("navbar");
    var currentClass = NAME.className;
    if (currentClass == "navbar-collapse collapse") { // Check the current class name
        NAME.className = "navbar-collapse in";   // Set other class name
    } else {
        NAME.className = "navbar-collapse collapse";  // Otherwise, use `second_name`
    }

			  });
			 
			  
		});
</script>
