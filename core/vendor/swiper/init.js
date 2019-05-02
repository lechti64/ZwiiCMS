$(document).ready(function() {
  var mySwiper = new Swiper('.swiper-container', {
	//direction: 'vertical',
	speed:1000,
    spaceBetween: 20,
    roundLengths:true,
    loop: true,
	autoplay: {
	  //reverseDirection: true,
      delay: 6000,
	  disableOnInteraction: false,
	},
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
	keyboard: {
	  enabled: true,
	},
	mousewheel: true,
  });
});

