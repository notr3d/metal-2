$(document).ready(function(){
  	$('.partners__container').owlCarousel({
		items: 5,
		loop: true,
		autoplay: true,
		autoplayTimeout: 5000,
		responsive: {
			0: {
				items: 3
			},
			768: {
				items: 4
			},
			1100: {
				items: 5
			}
		}
	});
	$('.main-slider__wrapper').owlCarousel({
		items: 1,
		loop: true,
		autoplay: true,
		autoplayTimeout: 5000,
		nav: true,
	});
	
});