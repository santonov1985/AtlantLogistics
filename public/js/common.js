$(function(){
	$(window).scroll(function(){
		var st = $(this).scrollTop();
		$('.main-slogan').css({
			"transform" : "translate(0%, -" + st /50 + "%"
		});
		$('.main-banner img').css({
			"transform" : "translate(0%, " + st /20 + "%"
		});
	});
	$('.phrase__block__slider').slick({
		autoplay: true,
		autoplaySpeed: 3000,
		speed: 800,
		arrows: false,
		dots: true
	});
	$('.about__slider').slick({
		autoplay: true,
		autoplaySpeed: 3000,
		speed: 800,
		arrows: false,
		dots: true
	});

	$('[id ^= "dots"]').on('mouseover', function(){
        var id = $(this).attr('id');
        var number_id = id.split('-');
        number_id = number_id[number_id.length -1];
        $('.main__map__interactive__hide').prev().next().fadeOut();
        $('#interactive-block-'+ number_id).fadeIn();
    });
    $(document).on('mouseover',function(e) {
	    if (!$(e.target).closest(".main__map__interactive").length) {
	    	$('.main__map__interactive__hide').fadeOut();
		}
	  	e.stopPropagation();
	});

	$('.arrow-up').bind('click.smoothscroll',function (e) {
		e.preventDefault();
		$('html, body').animate({scrollTop: 0},2000);
    	return false;
	});

	$('.nav-btn').on('click', function(){
		if ($('.nav ul').is(':visible')) {
			$('.nav ul').slideUp();
		} else {
			$('.nav ul').slideDown();
		}
	});

	$('.nav-btn').click(function(){
		$(this).toggleClass('nav-btn-active')
	});

    $(window).scroll(function(){
        var bo = $(this).scrollTop();
        var a = $(".arrow-up").css('opacity')
		if ( bo >= 500 && a == 0) {$(".arrow-up").stop().animate({'opacity':'1'},250)};
        if ( bo < 500 && a == 1) {$(".arrow-up").stop().animate({'opacity':'0'},250)};
    });

    $('.header-row__phone-btn').on('click', function(){
		$('.header-row__phone').fadeIn();
		return false;
	});
	
	$('.modal__close').on('click', function(){
		$('.modal').fadeOut();
	});
	$('.fancy').fancybox({
		transitionIn: 'fade',
		 speedOut: 'fade'
	})

	$('.header-row__lang').click(function(){
		$(this).css('max-height', '100px');
	});

	$('.number').mask('+7 (999) 999-9999');

	$("#category").change(function() {
       $('main__map__interactive__hide').fadeOut();
       $('main__map__interactive__hide').fadeIn();
       $($(this).val()).fadeIn();
     });

	 $(document).bind("touchstart",function(e) {
	    if (!$(e.target).closest(".main__map__interactive__hide").length) {
	        $('.main__map__interactive__hide').fadeOut();
	    }
	    e.stopPropagation();
	});

	new WOW().init();
});

function windowSize(){
    if ($(window).width() <= '1100'){
        $(document).bind("touchstart",function(e) {
		    if (!$(e.target).closest(".header-row__phone").length) {
		        $('.header-row__phone').fadeOut();
		    }
		    e.stopPropagation();
	  	    if (!$(e.target).closest(".header-row__lang").length) {
		        $('.header-row__lang').css('max-height', '20px');
	      	}
	      	e.stopPropagation();
		});
		$('.about__slider').appendTo('.pages > .container');
		$('.main__map__interactive .main__map__interactive__hide').appendTo('body')

    } else {
		$('body .main__map__interactive__hide').appendTo('.main__map__interactive')
    }	
}

$(window).load(windowSize);
$(window).resize(windowSize); 
$(window).on('load resize',windowSize);
