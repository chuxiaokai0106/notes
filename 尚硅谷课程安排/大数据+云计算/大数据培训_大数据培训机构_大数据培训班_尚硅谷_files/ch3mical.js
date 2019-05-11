$(document).ready(function() {
	var $centerwell_first = $('#centerwell li:first');
	$centerwell_first.animate({width: '470px'}, 300);
	$centerwell_first.find('h3').animate({backgroundPosition: '-157px'}, 300);
	
	$('#centerwell li').click(function() {
		window.open($(this).find('a').attr('href'));
	});

	$('#centerwell li').mouseenter(function() {
		if(!$(this).is(':animated')){
			$(this).animate({width: '470px'}, 300).siblings().animate({width: '157px'}, 300);
			$(this).find('h3').animate({backgroundPosition: '-157px'}, 300).parent().siblings().find('h3').animate({backgroundPosition: '0px'}, 300);
		}
	});
});