$(document).ready(function(){
	var unhover = function() {
		$('.hover-indications p').each(function() {
			$(this).hide();
		});
	};
	
	$('.homepage .main').hover(function(){
		$('.headline').animate({
			'opacity' : 0
		},250);
		$('.hover-indications').animate({
			'opacity' : 1
		},250);
	}, function(){
		$('.headline').animate({
			'opacity' : 1
		},250);
		$('.hover-indications').animate({
			'opacity' : 0
		},250);
		unhover();
	});
	
	$('.homepage .main a').hover(function(){
		unhover();
		var $thisIndication = $(this).data('hover-indication');
		$('.hover-indications p[data-indication="' + $thisIndication + '"]').show();
	});
	
	$('nav.secondary a').click(function(event) {
		event.preventDefault();
		$('nav.secondary a').each(function(){
			$(this).parent().removeClass('selected');
		});
		$('#content').load($(this).attr('href'));
		$(this).parent().addClass('selected');
		$('.hero').animate({
			'height' : 130
		},400);
		$('.headline').animate({
			'opacity' : 0
		},250);
	});
	
	$('body').on('click', 'nav.tertiary a', function(event) {
		event.preventDefault();
		$('nav.tertiary a').each(function(){
			$(this).removeClass('selected');
		});
		$('.subcontent').load($(this).attr('href'));
		$(this).addClass('selected');
	});
	
	$.fn.preload = function() {
    	this.each(function(){
        	$('<img/>')[0].src = this;
    	});
    }
    
    //Preload second image of train to be transitioned to when the secondary nav items are selected
    $([
    	'src/img/mdd/mdd.banner2.png',
	]).preload();
});