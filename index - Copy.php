<?php include 'db/connection.php';
 ?>
<!DOCTYPE html>
<html>
     <head>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<title> Home | SNT 
		
		</title>
<!-- jQuery library (served from Google) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="js/jquery.bxslider.css" rel="stylesheet" /><link rel="icon" href="E:\saad\logo.png">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<body>
	<!--- main start -->   
	<div class="main">
		

		<!--- header start -->  
		<div class="header">
			<!--- title start -->  
			<div class="logo" >	
			      <img  src="logo.png" width=80 height=80>
			</div>
			<div class="title">
			     <h1>SNT Distribution</h1>
			</div>
			<div class="right-side">
			     <input type="text" name="text" id="text" placeholder="Enter your search">
			      <input type="submit" value="Search" name="submit_form">
		</div>
			</div>
		<!--- Header End -->  	


		<!--- navigation start -->  
		<div class="navigation">
			<div class="nav">
			<?php 
$sql = mysqli_query($conn, "SELECT nav_heading,href FROM primary_nav ");
while ($row =  mysqli_fetch_assoc($sql)){
	echo "<a href='".$row['href']."'>";
echo "<ul><li>" . $row['nav_heading']."</li></ul>";

}?>

	</div>
			<div class="nav_right">
			    <ul>
			     <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			     <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	`	          <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
			      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			       <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			     </ul>
			</div>
		</div>
		<!---navigation end -->  
			<div class="line"></div>
		<!--- slider start -->  
			<div class="slider_header"><h1>Medical</h1></div>
			<div class="carousel">
				<ul class="bxslider">
								         <li><?php 
$sql = mysqli_query($conn, "SELECT images FROM slider WHERE id='8'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['images']. " >";
}
?>
   </li>
				         <li><?php 
$sql = mysqli_query($conn, "SELECT images FROM slider WHERE id='9'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['images']. " >";
}
?>
			                               </li>
				          <li><?php 
$sql = mysqli_query($conn, "SELECT images FROM slider WHERE id='11'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['images']. " >";
}
?>
			           </li>
				       <li><?php 
$sql = mysqli_query($conn, "SELECT images FROM slider WHERE id='12'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['images']. " >";
}
?>
		                                     	          </li>
				<li><?php 
$sql = mysqli_query($conn, "SELECT images FROM slider WHERE id='13'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['images']. " >";
}
?>
		                                     	           </li>
				       <li><?php 
$sql = mysqli_query($conn, "SELECT images FROM slider WHERE id='14'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['images']. " >";
}
?>
		                                     	           </li>				
</ul>

			</div>	

		<div class="jal"> 
		<a href="#" class="pro">Products</a>
		<a href="#" class="app">Applications</a>
		</div>
		

		<!---Info  start -->  
		<div class="info">
			<?php 
$sql = mysqli_query($conn, "SELECT content FROM aboutus WHERE id='1'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<p>" . $row['content']. "</p>";
 
}
?>

		</div >
		<div class="pics" >
			<div class="part1">
			<?php 
$sql = mysqli_query($conn, "SELECT image FROM fp_primary WHERE id='2'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['image']. " >";
}
?>
			</div>
			<div class="part2">
			<?php 
$sql = mysqli_query($conn, "SELECT image FROM fp_primary WHERE id='5'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['image']. " >";
}
?>
<?php 
$sql = mysqli_query($conn, "SELECT content FROM aboutus where id='3'");
while ($row =mysqli_fetch_assoc($sql)){
echo "<h2><span>" . $row['content']. "</h2></span>";
 
}
?>

<?php 
$sql = mysqli_query($conn, "SELECT content FROM aboutus where id='2'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<p>" . $row['content']. "</p>";
 
}
?>

			</div>
			<div class="part3">
			<?php 
$sql = mysqli_query($conn, "SELECT image FROM fp_primary WHERE id='5'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['image']. " >";
}
?>
			<?php 
$sql = mysqli_query($conn, "SELECT content FROM aboutus where id='4'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<h2><span>" . $row['content']. "</h2></span>";
 
}
?>
<?php 
$sql = mysqli_query($conn, "SELECT content FROM aboutus where id='5'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<p>" . $row['content']. "</p>";
}
?>
			</div>
			<div class="part4">
			<?php 
$sql = mysqli_query($conn, "SELECT image FROM fp_primary WHERE id='2'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['image']. " >";
}
?>
			</div>
			<div class="part5">
			<?php 
$sql = mysqli_query($conn, "SELECT image FROM fp_primary WHERE id='3'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['image']. " >";
}
?>
			</div>
			<div class="part6">
			<?php 
$sql = mysqli_query($conn, "SELECT image FROM fp_primary WHERE id='5'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['image']. " >";
}
?>
					<?php 
$sql = mysqli_query($conn, "SELECT content FROM aboutus where id='6'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<h2><span>" . $row['content']. "</h2></span>";
 
}
?>
<?php 
$sql = mysqli_query($conn, "SELECT content FROM aboutus where id='7'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<p>" . $row['content']. "</p>";
 
}
?>
			</div>
		</div>
		<!---PICS end -->

			<div class="fp_head">
			<h2 >FEATURED PRODUCTS</h2>
			</div>
		<!---FP Start -->
		<div class="fp" >
			 <div class="f1" >
				<div class="f1_image">
				<?php 
$sql = mysqli_query($conn, "SELECT image FROM featured_product WHERE id='3'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['image']. " >";
}
?></div>
				<div class="f1_desp">
				<?php 
$sql = mysqli_query($conn, "SELECT heading FROM featured_product where id='3'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<h3>" . $row['heading']. "</h3>";
 
}
?>
				<pre>_______</pre>
					<?php 
$sql = mysqli_query($conn, "SELECT desp FROM featured_product where id='3'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<p>" . $row['desp']. "</p>";
 
}
?>
				
				</div>
			 </div>
			 <div class="f2"> 
				<div class="f2_image">
				<?php 
$sql = mysqli_query($conn, "SELECT image FROM featured_product WHERE id='3'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['image']. " >";
}
?>
				</div>
				<div class="f2_desp">
					<?php 
$sql = mysqli_query($conn, "SELECT heading FROM featured_product where id='3'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<h3>" . $row['heading']. "</h3>";
 
}
?>
				<pre>_______</pre>
					<?php 
$sql = mysqli_query($conn, "SELECT desp FROM featured_product where id='3'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<p>" . $row['desp']. "</p>";
 
}
?>
				</div>
			</div>
			 <div class="f3">
				<div class="f3_image">
				
				<?php 
$sql = mysqli_query($conn, "SELECT image FROM featured_product WHERE id='4'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['image']. " >";
}
?></div>
				<div class="f3_desp">
					<?php 
$sql = mysqli_query($conn, "SELECT heading FROM featured_product where id='4'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<h3>" . $row['heading']. "</h3>";
 
}
?>
				<pre>_______</pre>
					<?php 
$sql = mysqli_query($conn, "SELECT desp FROM featured_product where id='4'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<p>" . $row['desp']. "</p>";
 
}
?>
				</div>
			 </div>
			 <div class="f4">
				<div class="f4_image">
				<?php 
$sql = mysqli_query($conn, "SELECT image FROM featured_product WHERE id='5'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<img src=" . $row['image']. " >";
}
?></div>
				<div class="f4_desp">
					<?php 
$sql = mysqli_query($conn, "SELECT heading FROM featured_product where id='5'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<h3>" . $row['heading']. "</h3>";
 
}
?>
				<pre>_______</pre>
					<?php 
$sql = mysqli_query($conn, "SELECT desp FROM featured_product where id='5'");
while ($row = mysqli_fetch_assoc($sql)){
echo "<p>" . $row['desp']. "</p>";
 
}
?>
				</div>
			 </div>	
		</div>
		<!---FP End -->
		<!--CONTACT PART Start -->
		<div class="head">
		<h2 >CONTACT US</h2>
		</div>
		<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7538.594275359762!2d72.84186362425196!				3d19.138466398208266!2m3!1f0!2f0!3f0!		3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b62df8265d6d%3A0x7e927e97c04fbf04!2sMomin+Nagar%2C+Jogeshwari+West%2C+Mumbai			%2C+Maharashtra		+400047!5e0!3m2!1sen!2sin!4v1494991441988" width="1172" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		
<!--Form Start -->
<div class="form1">
	<form method="POST" action="" >

		<table>
			<tr>
				<td><input type="text" name="user" id="user" placeholder="User Name" >
				</td>
				<br>
			</tr>
			<tr>
				<td><input type="email" name="email" id="email"  placeholder="E-mail"></td>
			</tr>
			<tr>
				<td><input type="text" name="company" id="company" placeholder="Company Name" ></td>
			</tr>	
			<tr>
				<td><input type="text" name="number" id="number" placeholder="Phone No."></td>
			</tr>
			<tr>
				<td><input type="text" name="interest" id="interest" placeholder="Interest" ></td>
			</tr>
			<tr>
				<td><textarea class="tarea" rows="10" cols="65" name="message" id="message" placeholder="Message"></textarea></td>
			</tr>
			<tr>
			<td><input type="submit" value="Send Message" name="submit" id="formbutton" onclick=""></td>

			</tr>
		</table>

</form>
<div id="message1" style="display: none,text-align:center;"></div>
</div>


		<div class="footer">

			<div class="about-us">
			<h2>ABOUT US</h2><br>
			<br>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the uries, but also the leap 			into electronic typesetting, 			remaining essentially u</p>
			</div>

			<div class="link" >
			<h2>LINKS</h2>
			<br><br>
			<a href="#">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">About Us</a><br>
			<a href="#">Products</a>&nbsp;&nbsp;
			<a href="#">Contact Us</a>
			</div>
			<div class="stay">
			<h2>STAY IN TOUCH</h2>
			<br><div class="footer_email">
			<input type="email" name="Email" id="email" placeholder="Enter Your E-mail"></div>
			<br><br><div class="footer_button">
			<input type="submit" value="Submit" name="submit_form" ></div>
			</div>
			<div class="social_icon">
			<ul>
			<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></a></li></i>
			<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></a></li></i>
			<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></a></li></i>
			<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></a></li></i>
			<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></a></li></i>
			</ul>

			</div>
		</div>

	</div>

	<script>
		$(document).ready(function(){

			$('.bxslider').bxSlider({
				minSlides: 3,
				maxSlides: 6,
				slideWidth:550,
				slideMargin: 0,
				captions:true
			});
		});
</script>
<script >
		$("#formbutton").click(function(e){
			e.preventDefault();
		
			var user = $("#user").val();
			var email = $("#email").val();
			var company = $("#company").val();
			var number = $("#number").val();
			var interest=$("#interest").val();
			var message=$("#message").val();
		
// Returns successful data submission message when the entered information is stored in database.
if(user==''||email==''||company==''||number=='' || interest==''||message=='')
{
	alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
	type: "POST",
	url: "form.php",
	data: {user:user,email:email,company:company,number:number,interest:interest,message:message},
	
	success: function(result){
		$("#message1").html(result).show().fadeOut(1500);
	}
});
}
return false;
});




        

</script>

</body>

</html>
 