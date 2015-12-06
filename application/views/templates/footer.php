<div class="row content1">
		<div class="col-lg-12 col-md-12">
			<h4 style="text-align: center; color: #FFF; background: #7b0000;">Some Memories</h4>
		</div>
		<ul id="flexiselDemo3" class="col-lg-12">
    			<li>
    				
			 		<img class="img-responsive" src="<?php echo base_url().'assets/images/wedding_img.jpg'?>" />
			 	</li>
			 		
			 	<li>		 		
			 		<img class="img-responsive" src="<?php echo base_url().'assets/images/decore_img.jpg'?>" />
			 	</li>
			 		
			 	<li>
			 		<img class="img-responsive" src="<?php echo base_url().'assets/images/party_img.jpg'?>" />
			 	</li>
			 	
			 	<li>
			 		<img class="img-responsive" src="<?php echo base_url().'assets/images/decore_img2.jpg'?>" />
			 	</li>
			 	
			 	<li>
			 		<img class="img-responsive" src="<?php echo base_url().'assets/images/decore_img3.jpg'?>" />
			 	</li>
			 	
			 	<li>
			 		<img class="img-responsive" src="<?php echo base_url().'assets/images/wedding_img2.jpg'?>" />
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