$(document).ready(function() {
	//jQuery Smooth Jump Scroll
	$('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	});
	
	//Footer Date
	$("#footer-date").text( (new Date).getFullYear() );

});
