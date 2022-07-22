(function ($) {

	'use strict';

	var WPPS = {};

    /* Predefined Variables
    --------------------------------------------------*/
	var $window = $(window),
		$document = $(document)

    /* Slider Pro
    --------------------------------------------------*/
	WPPS.slider = function () {

		$("div.slider-pro").each(function () {

			var _theSlider = $(this).attr('id');

			// API //////////
			$('#' + _theSlider).each(function () {

				var $this = $(this),
					$width = ($this.attr('data-width')) ? $this.data('width') : 960,
					$height = ($this.data('height')) ? $this.data('height') : 500,
					$orientation = ($this.attr('data-orientation')) ? $this.data('orientation') : 'horizontal',
					$autoplay = ($this.data('autoplay')) ? $this.data('autoplay') : false,
					$autoplayDelay = ($this.data('autoplaydelay')) ? $this.data('autoplaydelay') : 5000,
					$autoplayOnHover = ($this.attr('data-autoplayonhover')) ? $this.data('autoplayonhover') : 'pause',
					$autoplayDirection = ($this.attr('data-autoplaydirection')) ? $this.data('autoplaydirection') : 'normal',
					$loop = ($this.attr('data-loop')) ? $this.data('loop') : true,
					$arrows = ($this.attr('data-arrows')) ? $this.data('arrows') : true,
					$buttons = ($this.attr('data-buttons')) ? $this.data('buttons') : true,
					$immersiveCarousel = ($this.data('immersivecarousel')) ? $this.data('immersivecarousel') : false,
					$breakpoints = ($this.data('breakpoints')) ? $this.data('breakpoints') : false;

				$this.sliderPro({
					width: $width,
					height: $height,
					orientation: $orientation,
					autoplay: $autoplay,
					autoplayDelay: $autoplayDelay,
					autoplayOnHover: $autoplayOnHover,
					autoplayDirection: $autoplayDirection,
					loop: $loop,
					arrows: $arrows,
					buttons: $buttons,
					...$immersiveCarousel,
					breakpoints: $breakpoints.breakpoints
				});

			});
		});

	};

    /* Fired on demandable event
    --------------------------------------------------*/
	$window.on("load", function () {
		WPPS.preloader();
	});

	$document.ready(function () {
		WPPS.slider();
	});

})(jQuery);