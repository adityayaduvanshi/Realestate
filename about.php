<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");								
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Real Estate PHP">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/favicon.ico">


<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


<title>Real Estate </title>
</head>
<body>
<div id="page-wrapper">
    <div class="row"> 
     
		<?php include("include/header.php");?>
 
        <div class="full-row">
            <div class="container">
                
				
				<?php 
					
					$query=mysqli_query($con,"SELECT * FROM about");
					while($row=mysqli_fetch_array($query))
					{
				?>
				<div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4"><?php echo $row['1'];?></h3>
                    </div>
                </div>
                <div class="row about-company">
                    <div class="col-md-12 col-lg-7">
                        <div class="about-content">
                            <?php echo $row['2'];?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 mt-5">
                        <div class="about-img"> <img src="admin/upload/<?php echo $row['3'];?>" alt="about image"> </div>
                    </div>
                </div>
				
				<?php } ?>
				
            </div>
        </div>
       
        
     
		<?php include("include/footer.php");?>
		
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
    </div>
</div>

<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>
</body>

</html>