<div class="row content1">
			 		<div class="col-lg-4 col-md-4 event-section">
			 				<div class="panel panel-danger">
			 					<div class="panel-heading">
			 						Wedding	
			 					</div>
			 					
			 					<div class="panel-body">
			 						<img class="img-responsive" src="<?php echo base_url().'assets/images/wedding_img.jpg'?>" />
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
			 						<img class="img-responsive" src="<?php echo base_url().'assets/images/decore_img.jpg'?>" />
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
			 						<img class="img-responsive" src="<?php echo base_url().'assets/images/party_img.jpg'?>" />
			 						<div class="details">
			 							With our mannagement, make your events memorable. We fulfill all your event's requriments & comfortness under one place...	
			 						</div>
			 					</div>
			 				</div>
			 		</div>   
		</div> <!--end of content1-->
		
		<div class="row content1">
		<ul id="flexiselDemo3">
    			<li>
			 		<img class="img-responsive" src="<?php echo base_url().'assets/images/wedding_img.jpg'?>" />
			 	</li>
			 		
			 	<li>		 		
			 		<img class="img-responsive" src="<?php echo base_url().'assets/images/decore_img.jpg'?>" />
			 	</li>
			 		
			 	<li>
			 		<img class="img-responsive" src="<?php echo base_url().'assets/images/party_img.jpg'?>" />
			 	</li>      
</ul>
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

<script type="text/javascript">

$(window).load(function() {
    $("#flexiselDemo1").flexisel();
    $("#flexiselDemo2").flexisel({
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    $("#flexiselDemo3").flexisel({
        visibleItems: 5,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    $("#flexiselDemo4").flexisel({
        clone:false
    });
    
});
</script>

</body>
</html>