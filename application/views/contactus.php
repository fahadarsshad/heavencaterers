<div class="contactus">
	
	<div class='row contactus_header'>
		<div class="col-lg-10 col-lg-offset-1">
			<img class="img-responsive" src="<?php echo base_url().'assets/images/contactus.jpg' ?>"/>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-5 col-lg-offset-1">
			<h2>Contact Us</h2>
		</div>
		
		<div class="col-lg-2 col-lg-offset-1">
			<h2>Find Us</h2>
		</div>
	</div>

	<div class='row contact-form'>
		<div class="col-lg-6 col-lg-offset-1">
			<form>
				<div class="form-group">
					<label for="yourname">Your Name</label>
					<input type="text" id="yourname" class="form-control" placeholder="Your Name" />
				</div>
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
		<div class="col-lg-4 map">
			<?php if(isset($map['html'])){ echo $map['html']; } ?>
		</div>	
	</div>	
</div>
</div><!--contactus-->