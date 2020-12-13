/**
 * Activating Swiper Slide
 */
var activateGlobalSwiperContainer = function(){
	var mySwiper = new Swiper('.swiper-container', {
		loop: false,
	  navigation: {
	    nextEl: '.swiper-button-next',
	    prevEl: '.swiper-button-prev',
	  },
	});
}

var activateStepSwiper = function(){
	var mySwiper = new Swiper('.ff-steps-swiper', {
		loop: false,
		slidesPerView: 1.1,
		spaceBetween: 10,
		breakpoints: {
			480:{
				slidesPerView: 2.2,
				spaceBetween: 10,},
			760:{
				slidesPerView: 3.2,
				spaceBetween: 16,
			},
			991:{
				slidesPerView: 4,
				spaceBetween: 16,
			}
		}
	});
}

var activateFaqList = function(){
	$('.ff-faq-list li').addClass('is-closed');
	$('.ff-faq-list h3 a').on('click',function(e){
		e.preventDefault();
		console.log($(this))
		$(this).closest('li').toggleClass('is-closed');
	});
}

var activateMobileMenuToggle = function(){
	$('.ff-mobile-nav__toggle').on('click',function(e){
		e.preventDefault();
		$(this).closest('.ff-mobile-nav').toggleClass('is-opened');
	});
}


activateGlobalSwiperContainer();
activateStepSwiper();
activateFaqList();
activateMobileMenuToggle();

