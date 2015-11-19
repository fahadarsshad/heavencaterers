jQuery(function($){
	//show slide menu automatically
	$('ul.nav li.dropdown').hover(function(){
				$('.dropdown-menu',this).fadeIn();
			},function(){
				$('.dropdown-menu',this).fadeOut();
	});
	
	//show tooltip
	$("[data-toggle='tooltip']").tooltip({animation:true});
	
	//show Modal
	$('.modalphotos img').click(function(){
		$('#modal').modal({
			show:true,
		})
		var mysrc = this.src;
		$('#modalimage').attr('src',mysrc);
		$('#modalimage').click(function(){
			$('#modal').modal('hide');
		});
	});
});

