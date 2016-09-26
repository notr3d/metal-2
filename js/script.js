$(document).ready(function(){
	
	//sliders
	
  	$('.partners__container').owlCarousel({
		items: 5,
		loop: true,
		autoplay: true,
		autoplayTimeout: 10000,
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
	$('.main-slider').owlCarousel({
		items: 1,
		loop: true,
		autoplay: true,
		animateOut: 'fadeOut',
		autoplayTimeout: 8000,
		nav: true,
	});
	
	//faq
	
	var faq = $('.faq');
	var question = faq.find('.faq__question');
	
	question.click(function(){
		var answer = $(this).next();
		answer.slideToggle();
	});
	
	//order
	
	var orderHeader = $('.order__header')
	orderHeader.click(function(){
		var orderCon = $(this).next();
		orderCon.toggleClass('order__container--active');
		var orderItems = orderCon.find('.order__item');
		orderItems.toggleClass('order__item--active')
	})
});

//callback

var cbOpen = $('.header-form-open');
var cbPopup = $('.header-form');
var cbClose = $('.header-form__close');

cbOpen.click(function(){
	cbPopup.addClass('active');	
});
cbClose.click(function(){
	cbPopup.removeClass('active');	
});


//price form

var priceOpen = $('.price__link');
var priceForm = $('.price-form');
var priceClose = $('.price-form__close');

priceOpen.click(function(){	
	priceForm.toggleClass('active');
});

priceClose.click(function(){	
	priceForm.toggleClass('active');
});

//scrollup

$('.scrollup').click(function(){
	$('body').animate({scrollTop: 0}, 300);
	return false;
});

{
	function initUP() {
		window.addEventListener('scroll', function(e){
			var distanceY = window.pageYOffset || document.documentElement.scrollTop,
				shrinkOn = 200,
				scrollup = $('.scrollup');
			if (distanceY > shrinkOn) {
				$(scrollup).addClass('scrollup--visible');
				
			} else {
				if (scrollup.hasClass('scrollup--visible')) {
					scrollup.removeClass('scrollup--visible');
				}
			}
		});
	}
	window.onload = initUP();
}