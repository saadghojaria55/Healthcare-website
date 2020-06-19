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
                        	<label>Image Source</label>
                        <textarea class="tarea" rows="1" cols="30" name="image" id="image" ></textarea>
                        </td>
                    </tr>
                        <br>
                    <tr>
                    <td>
                        <label>Caption</label>
                        <textarea class="tarea" rows="5" cols="30" name="caption" id="caption"></textarea>
                        </td>
                        
                    </tr>
                        
                    </tr>
                    
                    <td><button  class="submitbtn" name="update">Update</button></td>


                </table>
            </form></div>
			<div><a href="operation/insert_slider.php">Add New Content</a></div>
		<div id="display"></div>
		 <div id="message"></div>
</body>

</html>
<script>
		function displaydata(){
		$.ajax({
				url:'ajax/slider_ajax.php',
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
function deleterecord(param){

			var txt;
			var check=confirm("Do you really want to delete this record?");
			if(check==true)
			{
				 $.ajax({
			
				url:'ajax/delete_slider.php',
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


    $('#update').css('display','block'); 


$.ajax({
				url:'operation/update_slider.php',
				type:"POST",
				data:{id:id},
				success:function(result)
				{
					$("#image").html(result.ab_image);
					$("#caption").html(result.ab_caption);
					

			}

});
$("button").click(function(e){
e.preventDefault();	
var image=$("#image").val();
var caption=$("#caption").val();
$.ajax({
				url:'operation/update_slider_query.php',
				type:"POST",
				data:{image:image,caption:caption,id:id},
				success:function(result)
				{
			$("#message").html(result);
			 $('#update').css('display','none'); 	
			displaydata();	
			}

});
});

}

</script>



<script>
	$(document).ready(function(){
		displaydata();
		}); 
</script>