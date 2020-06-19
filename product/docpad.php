<?php include '../db/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Docpad 10c W | SNT</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style2.css">
  <script src="../js/bxslider.min.js"></script>
  <!-- bxSlider CSS file -->
  <link href="../js/jquery.bxslider.css" rel="stylesheet">
  <body>
   <!--- main start -->   
   <div class="main">
    <header  >
     <div class="container">
      <div class="row">
       <div class="col-sm-6 col-md-9 f_head_block">

        <a href="snt1.php">

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
   <li><a href="../about-us.php">About Us</a></li>
   <li><a href="../product.php">Products</a></li>
   <li><a href="../contact-us.php">Contact Us</a></li>
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
  <li><a href="../product.php">Products</a></li>
  <li><a href="../category-11/medical-grade-tablet.php">Medical Grade Tablet</a></li>
  <li class="active">Docpad 10c W</li>
  <hr style="border-color: #E25253; border-width: 4px; margin: 9px -17px;"></hr>
</ul>
<section class="product_gallery_section">

  <h1 class="product-title">Docpad 10c W</h1>
  <h4>The Medical grade Tablet Baaske Docpad 10c incl. Keyboard is your reliable buddy for day-to-day work which cannot be harmed by knocks, drops and shocks. </h4>
  
  <div class="row">
    <div class="col-md-7">
      
      <div class="product-view">
        <img src="http://www.snt-healthcare.com/sm-admin/dist/img/product/Docpad 10c W/gallery/394867260Art2010760591ed01d04926_600x600.jpg" class="img-responsive" id="big-image">
      </div>

    </div>
    <div class="col-md-5" align="center">
      <hr style="border-color: #9e9e9e; margin: 10px 0;">

      <div class="row">
        <div class="col-md-4 hidden-xs">
          <img src="images/medical-grade/1.jpg" class="img-responsive img-thumbnail mini-product-thumb" onmouseover="On_Hover_Show_Image('images/medical-grade/1.jpg')">
        </div>

        <div class="col-xs-3 hidden-md visible-xs">
          <img src="images/medical-grade/1.jpg" class="img-responsive img-thumbnail mini-product-thumb" onmouseover="On_Hover_Show_Image('images/medical-grade/1.jpg')">
        </div>
        <div class="col-md-4 hidden-xs">
          <img src="images/medical-grade/2.jpg" class="img-responsive img-thumbnail mini-product-thumb" onmouseover="On_Hover_Show_Image('images/medical-grade/2.jpg')">
        </div>

        <div class="col-xs-3 hidden-md visible-xs">
          <img src="images/medical-grade/1.jpg" class="img-responsive img-thumbnail mini-product-thumb" onmouseover="On_Hover_Show_Image('images/medical-grade/1.jpg')">
        </div>
        
        

      </div>

      <hr style="margin: 10px 0;">

      <a style="margin-bottom: 10px" href="" class="btn btn-primary">ENQUIRY</a>

    </div>

    

  </div>

</section>


<section class="product_overview_section">
  
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs" style="margin-left: auto">
      <li class="active"><a href="#overview" data-toggle="tab" aria-expanded="true">Overview</a></li>
      <li class="visible"><a href="#specifications" data-toggle="tab" aria-expanded="false">Specifications</a></li>
      <li class=" hidden"><a href="#features" data-toggle="tab" aria-expanded="false">Features</a></li>
      <li class="visible"><a href="#resources" data-toggle="tab" aria-expanded="false">Resources</a></li>
    </ul>
    <div class="tab-content">

      <div class="tab-pane active" id="overview">

        <div class="row">
          
          <div class="col-md-9">
            <h2>Overview</h2>
            <?php    
            $sql = mysqli_query($conn, "SELECT desp FROM overview");
            while ($row = mysqli_fetch_assoc($sql)){  
              $desp=$row['desp'];
              
              
              echo "<p>" . $row['desp']. "<p>";
            }
            ?>
            <br>
          </div>

        </div>
        
        

      </div>


      <div class="tab-pane visible" id="specifications">                
       <h2>Specifications</h2>
       <hr>
      
   <div class="fancy-collapse-panel">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <?php    
      $sql = mysqli_query($conn, "SELECT heading,label,des,css_id FROM specification WHERE p_id='42'");
      while ($row = mysqli_fetch_assoc($sql)){    
        $heading=$row['heading'];
        $label=$row['label'];     
        $des=$row['des'];
        $css_id=$row['css_id'];
        ?>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="heading<?php echo"".$row['css_id'].""; ?> ">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo"".$row['css_id']."";?>"                  aria-expanded="false" aria-controls="collapse<?php echo"".$row['css_id'].""; ?> "><?php echo"".$row['heading'].""; ?>                                   </a>
            </h4>
          </div>
          <div id="collapse<?php echo "".$row['css_id'].""; ?> " class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo"".$row['css_id'].""; ?> "    >
            <div class="">
              <table class="table  table-striped table-specification">
                <tr>
                  <td width="40%" class="td-specification"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?php echo"".$row['label'].""; ?> </td>
                  <td width="60%"><p><?php echo"".$row['des'].""; ?> <br></p></td>
                </tr>

              </table>
            </div>
          </div>
        </div>
        <?php   } ?>

      </div></div>

    </div>



    
    


    <div class="tab-pane hidden" id="features">
      <h2>Features</h2>
      <hr>
    </div>
    <div class="tab-pane visible" id="resources">
      <h2>Resources</h2>
      <hr>
      <div class="row">

        <div class="col-md-3">
          <div class="panel panel-default panel-resource">
            <div class="panel-heading">
              <?php    
              $sql = mysqli_query($conn, "SELECT   label,name,link FROM resources WHERE p_id='42'");
              while ($row = mysqli_fetch_assoc($sql)){    
                $label=$row['label'];
                $name=$row['name'];     
                $link=$row['link'];
                echo "<h3>" .$row['label']. "</h3>";
                ?>
                
                
              </div>
              <div class="panel-body">
               
               <p style="font-size: 12px;line-height: 18px">
                <?php 	
                
           

                     echo "". $row['name']. "</p>";

                

              };
              ?>
              
              
            </div>
          </div>
        </div>
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

 <a href="" target="_blank"><i class="fa fa-linkedin"></i></a>

 

</div>
</footer>
<script src="http://www.snt-healthcare.com/js/jquery-3.2.1.min.js"></script>
<script src="http://www.snt-healthcare.com/js/bootstrap.min.js"></script>
<script >
	
	$(document).ready(function(){
   $('.navbar-toggle').click(function(){
    $(this).toggleClass('open');
  });
 });
</script>
<script src="http://www.snt-healthcare.com/js/jquery.bxslider.min.js"></script>
<script type="text/javascript">
  $('.bxslider').bxSlider({
    minSlides: 1,
    maxSlides: 4,
    slideWidth: 270,
    slideMargin:10,
    controls: false,
    
  });
  $('.bx-controls').hide();
  $('.bx-pager').hide();
</script>
<script>
  function On_Hover_Show_Image(src) {
    $('#big-image').attr('src', src);
  }
  $(document).ready(function() {
    

  });
</script>