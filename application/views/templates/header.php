<!DOCTYPE html>
<html lang="en">
	<head>
		<meta  charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'; ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap-theme.css'; ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/custom.css'; ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.social.css'; ?>" />
		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
  		<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
  		<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/custom.js'; ?>"></script>
		<?php
		if(isset($map['js'])){
			echo $map['js'];
		}
		 ?>
	</head>

	<body class="body-bg-color">
	<div class="container wrapper">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="page-header no-margin">
					
				</div><!--end of page-header-->
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<?php include_once(APPPATH.'views/templates/address.php'); ?>
				
				<div class="social">
		  			<a class="btn btn-block btn-social btn-facebook">
		    			<span class="fa fa-facebook"></span> Like Us On facebook
		 			</a>	
				</div>
			</div>

			<div class="col-lg-6 col-md-6">
				<?php include_once(APPPATH.'views/templates/slider.php'); ?>
			</div>
	
			<div class="col-lg-3 col-md-3">
				<div class="list-group">
					  <a href="#" class="list-group-item">Home</a>
					  <a href="#" class="list-group-item">About</a>
					  <a href="#" class="list-group-item">Gallery</a>
					  <a href="#" class="list-group-item">Menus</a>
					  <a href="#" class="list-group-item">Events Services</a>
					  <a href="#" class="list-group-item">Wedding</a>
					  <a href="#" class="list-group-item">Decore</a>
					  <a href="#" class="list-group-item">Gallery Us</a>
				</div>
				
				<div class="social">
					<a class="btn btn-block btn-social btn-twitter">
		    			<span class="fa fa-twitter"></span> Tweet Us On Twitter
		  			</a>
				</div>
			</div>
		</div>
		<div class="row content1">
			 		<div class="col-lg-4 col-md-4 event-section">
			 				<div class="panel panel-danger">
			 					<div class="panel-heading">
			 						Wedding	
			 					</div>
			 					
			 					<div class="panel-body">
			 						<img class="img-responsive" src="<?php echo base_url().'assets/images/events/7.jpg'?>" />
			 						<div class="details">
			 							Our Catering House plans well-organised & luxurious weddings providing highly exclusive services...
			 						</div>
			 					</div>
			 				</div>
			 		</div>
			 		
			 		<div class="col-lg-4 col-md-4 event-section">
			 				<div class="panel panel-danger">
			 					<div class="panel-heading">
			 						Decorators	
			 					</div>
			 					
			 					<div class="panel-body">
			 						<img class="img-responsive" src="<?php echo base_url().'assets/images/events/8.jpg'?>" />
			 						<div class="details">
			 							For elegant luncheons , classy dinners , celebrations and gatterings we decorate your environment much more Luxurious than your Imaginations...
			 						</div>
			 					</div>
			 				</div>
			 		</div>
			 		
			 		<div class="col-lg-4 col-md-4 event-section">
			 				<div class="panel panel-danger">
			 					<div class="panel-heading">
			 						Events	
			 					</div>
			 					
			 					<div class="panel-body">
			 						<img class="img-responsive" src="<?php echo base_url().'assets/images/events/9.jpg'?>" />
			 						<div class="details">
			 							With our mannagement, make your events memorable. We fulfill all your event's requriments & comfortness under one place...	
			 						</div>
			 					</div>
			 				</div>
			 		</div>
		</div> <!--end of content1-->
	 	
	 	
	 <div class="page-footer row">
		<nav class="col-lg-12 col-md-12">
			<ul class="breadcrumb">
				<li><a href="">Touch With Us</a></li>
				<li><a href="">Why We are Better</a></li>
				<li><a href="">FeedBack</a></li><br />
				<li><a href="">Copyright © 2015 heavencaterers | Website Development by Fahad Arshad</a></li>
				
			</ul>
		</nav>
	</div>
</div><!--container wrapper-->
</body>
</html>