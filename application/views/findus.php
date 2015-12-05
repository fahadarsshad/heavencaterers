<div class="row">
			<div class="col-lg-3 col-md-3">
				<?php include_once(APPPATH.'views/templates/address.php'); ?>
				
				<div class="social">
		  			<a class="btn btn-block btn-social btn-facebook">
		    			<span class="fa fa-facebook"></span> Like Us On facebook
		 			</a>	
				</div>
			</div>

			<div class="aboutus col-lg-6 col-md-6">
				<?php if(isset($map['html'])){ echo $map['html']; } ?>
			</div>
	
			<div class="col-lg-3 col-md-3">
				<div class="list-group">
					  <a href="<?php echo base_url().'index.php/home/index' ?>" class="list-group-item">Home</a>
					  <a href="<?php echo base_url().'index.php/home/aboutus' ?>" class="list-group-item">About</a>
					  <a href="<?php echo base_url().'index.php/home/gallery' ?>" class="list-group-item">Gallery</a>
					  <a href="<?php echo base_url().'index.php/home/menus' ?>" class="list-group-item">Menus</a>
					  <a href="#" class="list-group-item">Events</a>
					  <a href="#" class="list-group-item">Wedding</a>
					  <a href="#" class="list-group-item">Decore</a>
					  <a href="<?php echo base_url().'index.php/home/contactus' ?>" class="list-group-item">Contact Us</a>
				</div>
				
				<div class="social">
					<a class="btn btn-block btn-social btn-twitter">
		    			<span class="fa fa-twitter"></span> Tweet Us On Twitter
		  			</a>
				</div>
			</div>
		</div>	