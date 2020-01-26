$(document).ready(function() {

    new CircleType(document.getElementById('curve')).radius(384);
	$(".btn_menu").click(function() {
	    if ($('.btn_menu').hasClass('is_active')) {
	        $('.responsive_content').removeClass('show');
	        $(this).removeClass('is_active');

	    } else {
	        $(".btn_menu").addClass("is_active");
	        $('.responsive_content').addClass('show');
	    }
	});

	if ($(window).width() < 768) {
		$('.news_list').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			autoplaySpeed: 3000,
			dots: false,
			infinite: true,
			prevArrow:"<img class='a-left control-c prev slick-prev' src='img/arrow_left.png'>",
				nextArrow:"<img class='a-right control-c next slick-next' src='img/arrow_right.png'>"
		});
	}

	$(window).on('resize', function(){
		if ($(window).width() < 768) {
			$('.news_list').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: false,
				autoplaySpeed: 3000,
				dots: false,
				infinite: true,
				prevArrow:"<img class='a-left control-c prev slick-prev' src='img/arrow_left.png'>",
				nextArrow:"<img class='a-right control-c next slick-next' src='img/arrow_right.png'>"
			});
		}
		else{
			$('.news_list').slick('unslick');
		}
	});
});


$(function() {
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
			$('html, body').animate({
			scrollTop: target.offset().top
			}, {
			duration: 500,
			easing: 'swing'
			});
			return false;
			}
		}
	});
});
