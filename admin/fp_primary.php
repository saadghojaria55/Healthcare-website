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
                        <td><textarea class="tarea" rows="10" cols="25" name="image" id="image" placeholder="Enter Your Image Source Here"></textarea>
                        </td>
                        <br>
                    </tr>
                    <td><button  class="submitbtn" name="update">Update</button></td>
               </table>
            </form></div>


		<div><a href="operation/insert_fp_primary.php">Add New Content</a></div>
		<div id="message"></div>
		<div id="display"></div>
</body>
<script>
		function displaydata(){
		$.ajax({
				url:'ajax/fp_primary_ajax.php',
				type:"GET",
				success:function(result)
				{
				$("#display").html(result);
				}

			});

		}

</script>
<script>
function deleterecord(param){

			var txt;
			var check=confirm("Do you really want to delete this record?");
			if(check==true)
			{
				 $.ajax({
			
				url:'ajax/delete_fp_primary.php',
			 	type:"POST",
			 	data:{id:param},
	 	success:function(result)
				 	{

						$("#message").html(result);
						displaydata();

				 	}

				
		});
				}
				else{
					displaydata();
				}
}
</script>
<script>
function updatefetch(id){ 

// $('#content').html(id);
    $('#update').css('display','block'); 

/*	$("button").click(function(e){
				e.preventDefault();*/
$.ajax({
				url:'operation/update_fp_primary.php',
				type:"POST",
				data:{id:id},
				success:function(result)
				{
					$("#image").html(result.ab_image);
				//	console.log(result.ab_content+result.ab_id);
			//alert(result);		
			}

});

$("button").click(function(e){
e.preventDefault();	
var image=$("#image").val();
$.ajax({
				url:'operation/update_fp_primary_query.php',
				type:"POST",
				data:{image:image,id:id},
				success:function(result)
				{
			$("#message").html(result);
				
			displaydata();	
			}

});
});
}</script>
<script>
	$(document).ready(function(){
		displaydata();
		});
</script>
</html>
