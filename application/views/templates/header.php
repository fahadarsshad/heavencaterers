<!DOCTYPE html>
<html lang="en">
	<head>
		<meta  charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'; ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap-theme.css'; ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/custom.css'; ?>" />
		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
  		<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
  		<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/custom.js'; ?>"></script>
	</head>

	<body class="bg-danger">
	<div class="container wrapper">
		<div class="page-header no-margin no-padding">
			<div class="row top-menu">
				<div class="col-lg-2">
					<marquee><h2 class="text-danger">Heaven Caters</h2></marquee>
				</div>
				<div class="col-lg-10">
					<div class="navbar navbar-inverse">
						
						
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a class="btn btn-social-icon btn-facebook">
    						<i class="fa fa-facebook"></i>
  						</a></li>
						</ul>
					</div>
				</div>	
			</div><!--end of top-menu-->
		
			<div class="row header-content">
				<div class="col-lg-4 header-left-menu">
					<div class="navbar navbar-inverse">
						<ul class="nav nav-pills">
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
				
				<div class="col-lg-4 header-logo">
					<div class="branding">
						<img src="<?php echo base_url().'assets/images/logo_red1.png' ?>">
					</div>
				</div>
				
				<div class="col-lg-4 header-right-menu">
					<div class="navbar navbar-inverse">
						<ul class="nav nav-pills">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Wedding <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
									<li><a tabindex="-1" href="">Mehdi</a></li>
									<li class="divider"></li>
									<li><a tabindex="-1" href="">Barat</a></li>
									<li class="divider"></li>
									<li><a tabindex="-1" href="">Valima</a></li>
								</ul>	
							</li>
							<li><a href="#">Concert</a></li>
							<li><a href="#">Party</a></li>
						</ul>
					</div>
				</div>
			</div><!--end of header-content-->
			
			<!--modal start-->
			
			<div id="modal" class="modal fade">
				<div class="modal-body">
					<img id="modalimage" src="" alt="Modal Photo">
				</div>
			</div> <!--end of modal-->
				
		</div><!--end of page-header-->