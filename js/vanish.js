$(document).ready(function(){
	$(".vanish").on('click', function(){
		$(this).find(".category-container").animate({opacity: 0}, 1000, function(){
        	$(this).parent().remove();
    	});
	})	
});

