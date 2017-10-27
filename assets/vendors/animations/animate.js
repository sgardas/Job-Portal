(function ($) {

    "use strict";

    if ($(window).width() > 1024) {

        $(window).on('scroll load', function () {

            $('.animate').each(function () {

                var animationType = $(this).data('animation');
                if (animationType == null) {
                    animationType = 'fadeIn';
                }
                var animationDelay = $(this).data('animation-delay');
                if (animationDelay == null) {
                    animationDelay = '0';
                }
                var animationSpeed = $(this).data('animation-speed');
                if (animationSpeed == null) {
                    animationSpeed = '1000';
                }
                var animationOptions = {
                    'animation-delay': animationDelay + 'ms',
                    '-webkit-animation-delay': animationDelay + 'ms',
                    'animation-duration': animationSpeed + 'ms',
                    '-webkit-animation-duration': animationSpeed + 'ms',
                };

                var animationOffset = $(this).data('animation-offset');
                if (animationOffset == null) {
                    animationOffset = '90%';
                }

                var triggerpoint = $(window).height() * ( parseFloat(animationOffset) / 100 ) + $(window).scrollTop();
                var element = $(this).offset().top;

                if (element < triggerpoint) {
                    $(this).addClass('visible').addClass(animationType).css(animationOptions);
                }
            });

        });
		
    } else {
	
		$('.animate').addClass('visible');
		
	}
	
}(jQuery));