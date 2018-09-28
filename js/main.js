jQuery(function($) {'use strict',

	//#main-slider
	$(function(){
		$('#main-slider.carousel').carousel({
			interval: 20000
		});
	});


	// accordian
	$('.accordion-toggle').on('click', function(){
		$(this).closest('.panel-group').children().each(function(){
		$(this).find('>.panel-heading').removeClass('active');
		 });

	 	$(this).closest('.panel-heading').toggleClass('active');
	});

	//Initiat WOW JS
	new WOW().init();

	// portfolio filter
	$(window).load(function(){'use strict';
		var $portfolio_selectors = $('.portfolio-filter >li>a');
		var $portfolio = $('.portfolio-items');
		$portfolio.isotope({
			itemSelector : '.portfolio-item',
			layoutMode : 'fitRows'
		});
		
		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});
	});

	// Contact form
	var form = $('#main-contact-form');
	var button = $('#submit-form-buttons');
	button.click(function(event){
		event.preventDefault();
		var form_status = $('<div></div>');
		$.ajax({
			url: "sendemail.php",
			type: 'POST',
			dataType: 'json',
			data: ({name: 'John', email:'johncorleone@gmail.com', subject: 'You are a sucker', message: 'Bozos'}),
			complete: function(data){
				//form_status.html('<p class="alert alert-success" role="alert">' + data.message + '</p>').delay(3000).fadeOut();
				console.log(data.message);
			},
			error: function(err) {
				console.log(err);
			}
		});
	});

	
	//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 500);
	});	

	//Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});	
});

/*
.done(function(data){
			form_status.html('<p class="alert alert-success" role="alert">' + data.message + '</p>').delay(3000).fadeOut();
		})
*/