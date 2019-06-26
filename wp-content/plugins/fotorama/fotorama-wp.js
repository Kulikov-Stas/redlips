(function ($) {
	$(function () {
		var $fotoramaDiv = $('.slider .fotorama').fotorama();
		var fotorama = $fotoramaDiv.data('fotorama');

		var $fotoramaBot = $('.bot-slider .fotorama').fotorama();
		var fotoramaBot = $fotoramaBot.data('fotorama');	

		$(window).on('load',function(){
			if ($('.slider .fotorama').length) {
				fotorama.resize({
					height: $('.slider-holder img').height()
				});			
			}			
		});	
		$(window).resize(function(){
			var height = $('.slider-holder img').height()
			fotorama.resize({
				height: height
			});
		});
		// $('.fotorama').hover(
		// 	function(){
		// 		fotoramaBot.stopAutoplay();
		// 	},
		// 	function(){
		// 		fotoramaBot.startAutoplay('5000')
		// 	}
		// )
		$.fn.fotoramaWPAdapter = function () {
		    this.each(function () {
		        var $this = $(this),
		        	data = $this.data(),
		        	$fotorama = $('<div></div>');

		        $('dl', this).each(function () {
		            var $a = $('dt a', this);
		            $fotorama.append(
		            	$a.attr('data-caption', $('dd', this).text())
		            );
		        });

		        $this.html($fotorama.html());
		    });

		    return this;
		};

		$('.fotorama--wp')
			.fotoramaWPAdapter()
			.fotorama();
		});
})(jQuery);