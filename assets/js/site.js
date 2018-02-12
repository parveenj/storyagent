(function($) {

	// Menu Slide

	$(".header__burger").click(function() {
		$('.header__navigation').slideToggle();
	})

	$(".header__navigation li a").click(function() {
		$(this).next('.sub-menu').slideToggle();
	})


	//StoryAgent
	$(window).scroll(function(){
		if ($(this).scrollTop() > 1000) {
			$('.scrollToTop').addClass('show');
		} else {
			$('.scrollToTop').removeClass('show');
		}
	});

	// StoryAgent Stickey Start

	var win_width = $(window).width();
	if (win_width > 980) {
		$(window).scroll(function() {
			if ($(this).scrollTop() > 1) {
				$('.header__container').addClass("sticky");
			} else {
				$('.header__container').removeClass("sticky");
			}
		});
	}

	// StoryAgent Section Scroll Start
	$('.section-scroll-web li').click(function() {
		$('.section-scroll-web li').removeClass('active');
		$(this).addClass('active');
		var attr_val = $(this).find('a').attr('href');
		var scroll_off = $(attr_val).offset().top-$('.header__container').outerHeight();
		$("html,body").animate({
			scrollTop : scroll_off
		}, 500);
	})
	$(window).scroll(function() {
		var x = $(window).scrollTop();
		if (x > $('#scroll1').offset().top && x < $('#scroll2').offset().top) {
			$('.section-scroll-web li').removeClass('active');
			$('.scroll1').parent("li").addClass('active');
		}
		if (x > $('#scroll2').offset().top - 50 && x < $('#scroll3').offset().top) {
			$('.section-scroll-web li').removeClass('active');
			$('.scroll2').parent("li").addClass('active');
		}
		if (x > ($('#scroll3').offset().top - 50 ) && x < $('#scroll4').offset().top) {
			$('.section-scroll-web li').removeClass('active');
			$('.scroll3').parent("li").addClass('active');
		}
		if (x > ($('#scroll4').offset().top - 50) && x < ($('#footer').offset().top )) {
			$('.section-scroll-web li').removeClass('active');
			$('.scroll4').parent("li").addClass('active');
		}
	})
	// StoryAgent Section Scroll End






	//StoryAgent to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});


})(jQuery);
