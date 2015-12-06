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
				<h2 style="color: #FFF">Contact Us</h2>
			<form>
				<div class="form-group">	
					<label for="youremail">Your Email</label>
					<input type="email" id="youremail" class="form-control" placeholder="Your Email" />
				</div>
				<div class="form-group">	
					<label for="subject">Subject</label>
					<input type="text" id="subject" class="form-control" placeholder="Subject" />
				</div>
				<div class="form-group">	
					<label for="message">Message</label>
					<textarea class="form-control" id="message" rows="3"></textarea>
				</div>
				
				<input type="submit" class="btn btn-danger" value="Submit" />
			</form>
			</div>
	
			<div class="col-lg-3 col-md-3">
				<div class="list-group">
					  <a href="<?php echo base_url().'index.php/home/index' ?>" class="list-group-item">Home</a>
					  <a href="<?php echo base_url().'index.php/home/aboutus' ?>" class="list-group-item">About</a>
					  <a href="<?php echo base_url().'index.php/home/gallery' ?>" class="list-group-item">Gallery</a>
					  <a href="<?php echo base_url().'index.php/home/menus' ?>" class="list-group-item">Menus</a>
					  <a href="<?php echo base_url().'index.php/home/event' ?>" class="list-group-item">Events</a>
					  <a href="<?php echo base_url().'index.php/home/wedding' ?>" class="list-group-item">Wedding</a>
					  <a href="<?php echo base_url().'index.php/home/decore' ?>" class="list-group-item">Decore</a>
					  <a href="<?php echo base_url().'index.php/home/contactus' ?>" class="list-group-item">Contact Us</a>
				</div>
				
				<div class="social">
					<a class="btn btn-block btn-social btn-twitter">
		    			<span class="fa fa-twitter"></span> Tweet Us On Twitter
		  			</a>
				</div>
			</div>
		</div>	