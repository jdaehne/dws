$(document).ready(function() {


    // * * * * * * * * * * * * * * * * * * * * * * * * *
	// * sticky header
	// *
	// *
	$(window).scroll(function() {
		if($(window).scrollTop() >= 40) {
			$(".js-header-sticky").addClass("active");
		}else {
			$(".js-header-sticky").removeClass("active");
		}
	});



	// * * * * * * * * * * * * * * * * * * * * * * * * *
	// * view port
	// *
	// *
	var offset = 80; /* Abstand vom Browserbottom, wenn Effekt einsetzen soll */

	function inViewpoint(){
		var viewPort = $(window).scrollTop() + $(window).height();

		$(".viewpoint-element:visible").each(function(){
			var elementTop = $(this).offset().top;

			if ((elementTop + offset) <= viewPort) {
				var delay = $(this).data("delay");

				// check for fact class - if in viepoint fire countUp (once)
				if ($(this).hasClass("js-chart-viewpoint") && !$(this).hasClass("in-viewpoint")) {
					charts();
				}

				$(this).addClass("in-viewpoint");
			}
		});
	}
	$(window).scroll(function() {
		inViewpoint();
	});
	inViewpoint();



	// * * * * * * * * * * * * * * * * * * * * * * * * *
	// * charts
	// *
	// *
	function charts() {

		// progress circles
		$(".js-chart-circle").each(function( index ) {
			$('.js-chart-circle').circleProgress({
				size: 200,
				fill: "#00dcff",
				startAngle: -Math.PI / 2,
				emptyFill: "#aaf2ff",
				animation: {duration: 3000, easing: "circleProgressEasing"}
			});
		});

		// count up
		var options = {
		  useEasing: true,
		  useGrouping: true,
		  separator: '.',
		  decimal: '.',
		};

		$(".js-count-up").each(function(){
			var counterID = $(this).attr("id");
				countTo = $(this).data("count");
			var count = new CountUp(counterID, 0, countTo, 0, 4, options);
			count.start();
		});
	}



	// * * * * * * * * * * * * * * * * * * * * * * * * *
	// * animate-in
	// *
	// *
	var offset = 80; /* Abstand vom Browserbottom, wenn Effekt einsetzen soll */

	function fadeInElements(){
		var viewPort = $(window).scrollTop() + $(window).height();

		$(".animate-in:visible").each(function(){
			var elementTop = $(this).offset().top;

			if ((elementTop + offset) <= viewPort) {
				var delay = $(this).data("delay");
				$(this).css("animation-delay", delay + "s").addClass("animate-in--active");
			}
		});
	}
	$(window).scroll(function() {
		fadeInElements();
	});
	fadeInElements();



	// * * * * * * * * * * * * * * * * * * * * * * * * *
    // * Nav Active when Element is in Viewpoint
    // *
	// *
	var $sections = $(".nav-section"),
    	$nav = $(".js-nav-wrapper ul"),
    	navHeight = $("header").outerHeight();

	$(window).on('scroll', function () {
		var cur_pos = $(this).scrollTop() + 40;

      	$sections.each(function() {
			var top = $(this).offset().top - navHeight, bottom = top + $(this).outerHeight();

			if (cur_pos >= top && cur_pos <= bottom) {
				$nav.find('li').removeClass('active');
				$sections.removeClass('active');
				$(this).addClass('active');
				$nav.find('a[href="#'+$(this).attr('id')+'"]').parent('li').addClass('active');
			}
		});
    });




	// * * * * * * * * * * * * * * * * * * * * * * * * *
	// * Scroll-To
	// *
	// * Smooth-Scroll to targets on page
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top - 100
			}, 1000);
			return false;
			}
		}
	});


	// * * * * * * * * * * * * * * * * * * * * * * * * *
	// * mobile navigation
	// *
	// *
	$('.js-nav-mobile-btn').click(function(){
		$('.nav-mobile').toggleClass('active');
		$('html, body').toggleClass('freeze');
	});

	$(".nav-mobile a").click(function(){
		$('.js-nav-mobile-btn').trigger("click");
	});



	// * * * * * * * * * * * * * * * * * * * * * * * * *
	// * accordion
	// *
	// *
	$(".js-accordion-button").click(function(){
	$(this).parents(".js-accordion-item").toggleClass("active").find(".js-accordion-content").slideToggle(function(){
	    scrollTo($(this));
	});
	$(this).parents(".js-accordion-item").siblings().removeClass("active").find(".js-accordion-content").slideUp();
	});



	// * * * * * * * * * * * * * * * * * * * * * * * * *
	// * slider
	// *
	// *
	var $slider = $(".js-slider");

	if ($slider.length){
		$slider.each(function(){
			$(this).slick({
				fade: false,
				dots: true,
				infinite: true,
				arrows: true,
				autoplay: false,
				speed: 1000,
				appendDots: $(this).parents(".js-slider-wrapper").find(".js-slider-nav-dots"),
				prevArrow: $(this).parents(".js-slider-wrapper").find(".js-slider-nav-prev"),
				nextArrow: $(this).parents(".js-slider-wrapper").find(".js-slider-nav-next"),
			});
		});
	}



	// * * * * * * * * * * * * * * * * * * * * * * * * *
	// * fancybox
	// *
	// *
	$('[data-fancybox]').fancybox({
		buttons: [
			"close"
		  ]
	});



	// * * * * * * * * * * * * * * * * * * * * * * * * *
	// * language button
	// *
	// *
	$(".js-language-button").click(function(){
		$(this).parents(".js-language-parent").find(".js-language-popup").toggleClass("open");
	});



	// * * * * * * * * * * * * * * * * * * * * * * * * *
	// * worldmap
	// *
	// *
	$(".js-worldmap-marker").click(function(){
		$(this).parents(".js-worldmap-parent").find(".js-worldmap-info").toggleClass("active");
		$(this).parents(".js-worldmap-parent").siblings().find(".js-worldmap-info").removeClass("active");
	});



	// * * * * * * * * * * * * * * * * * * * * * * * * *
	// * slider
	// *
	// *
	var $carousel = $(".js-logo-carousel");

	if ($carousel.length){
		$carousel.each(function(){
			$(this).slick({
				fade: false,
				dots: true,
				infinite: true,
				arrows: true,
				autoplay: false,
				slidesToShow: 3,
				speed: 1000,
				appendDots: $(".js-logo-carousel-nav-dots"),
				prevArrow: $(".js-logo-carousel-nav-prev"),
				nextArrow: $(".js-logo-carousel-nav-next"),
				responsive: [
				    {
				      breakpoint: 1200,
				      settings: {
				        slidesToShow: 2
				      }
				    },
				    {
				      breakpoint: 800,
				      settings: {
						slidesToShow: 2
				      }
				    },
				    {
				      breakpoint: 600,
				      settings: {
				        slidesToShow: 1
				      }
				    }
				  ]
			});
		});
	}



	// * * * * * * * * * * * * * * * * * * * * * * * * *
	// * imageCompare
	// *
	// *
	$(".js-image-compare").twentytwenty();


});
