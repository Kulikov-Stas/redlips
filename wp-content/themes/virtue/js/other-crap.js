$(function(){
	$('.top-menu li').hover(function(){
		$(this).children('a').toggleClass('hover');;
	});
		setTimeout(function(){
			$('.mid-slider-wrapper').append($('.mid-slider-wrapper .fotorama__arr--prev'));
			$('.mid-slider-wrapper').append($('.mid-slider-wrapper .fotorama__arr--next'));
			$('.bot-slider-wrapper').append($('.bot-slider-wrapper .fotorama__arr--prev'));
			$('.bot-slider-wrapper').append($('.bot-slider-wrapper .fotorama__arr--next'));		
			$('.caroufredsel_wrapper').css('height', 300);		
		},300)
	
	$( "#slider-range" ).slider({
	    range: true,
	    min: 1,
	    max: 15,
	    values: [ 1, 15 ],
	    step:1,
	    create:function () {
			var left = 0,
				step = 100 / ($("#slider-range").slider("option", "max")-1);
			$('.count-line span').each(function(){
				$(this).css('left', left + '%');
				left +=step;
			});		
		},
	    slide: function(event,ui){
	    	var minVal = ui.values[0]+7,
	    		maxVal = ui.values[1]+7;
		$( "#amount" ).val( minVal + " - " + maxVal );
	    	$('.count-line span').each(function(){
	    		if ($(this).text() >= minVal && $(this).text() <= maxVal) {
	    			$(this).addClass('active')
	    		} else {
	    			$(this).removeClass('active')
	    		}
	    	})
	    }
	    });
	var minVal = $( "#slider-range" ).slider( "values", 0 ) + 7,
		maxVal = $( "#slider-range" ).slider( "values", 1 ) + 7;
	$( "#amount" ).val( minVal  +
		" - " + maxVal  );
	$('.comment').keyup(function(e) {
	    if ((e.keyCode || e.which) == 13) {
	        $('.EDetailInset').css('height', "+=30");
	    }
	});

	$('.index-order').click(function(){
		$('html,body').animate({
			scrollTop: $('.order').offset().top
		},700)
	});

	$('.comments-order,.index-order').click(function(){
		$('.light-off').fadeIn('fast');
		$('.pop-up-order').fadeIn('fast');
	});

	$('.leave-comment').click(function(){
		$('.light-off').fadeIn('fast');
		$('.pop-up-comment').fadeIn('fast');
	});

	$('.close,.light-off').click(function(){
		$('.light-off').fadeOut('fast');
		$('.pop-up').fadeOut('fast');
	});

	$('input').focusin(function(){
		$(this).attr('data',$(this).attr('placeholder'));
		$(this).attr('placeholder','');
	}).focusout(function(){
		$(this).attr('placeholder',$(this).attr('data'))
	});

	$('.comment').keyup(function(){
		var thisText = $(this).text()
		$('.wpcf7-textarea').val(thisText);
		$(this).siblings('textarea').val(thisText)
	});
	$('body').prepend($('.pop-up.pop-up-comment'))
});