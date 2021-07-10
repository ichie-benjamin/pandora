jQuery(function ($) {
    'use strict';
	
		// Mean Menu JS
		jQuery('.mean-menu').meanmenu({ 
			meanScreenWidth: "991"
		});
   
		// Header Sticky
		$(window).on('scroll',function() {
            if ($(this).scrollTop() > 120){  
                $('.nav-area').addClass("is-sticky");
            }
            else{
                $('.nav-area').removeClass("is-sticky");
            }
		});

		// Navbar JS
        $('.navbar .navbar-nav li a').on('click', function(e){
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - 100
            }, 1500);
            e.preventDefault();
        });
        $(document).on('click','.navbar-collapse.in',function(e) {
            if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
                $(this).collapse('hide');
            }
        });
		$('.navbar .navbar-nav li a').on('click', function(){
            $('.navbar-collapse').collapse('hide');
            $('.burger-menu').removeClass('active');
		});

		// Preloader
		jQuery(window).on('load', function () {
			$('.preloader').fadeOut()
		})
		
		// Sidebar Modal
        $(".burger-menu").on('click',  function() {
			$('.sidebar-modal').toggleClass('active');
		});
        $(".sidebar-modal-close-btn").on('click',  function() {
			$('.sidebar-modal').removeClass('active');
		});
		
		// Odometer JS
        $('.odometer').appear(function(e) {
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});

		// Subscribe form
		$(".newsletter-form").validator().on("submit", function (event) {
			if (event.isDefaultPrevented()) {
			// handle the invalid form...
				formErrorSub();
				submitMSGSub(false, "Please enter your email correctly.");
			} else {
				// everything looks good!
				event.preventDefault();
			}
		});
		function callbackFunction (resp) {
			if (resp.result === "success") {
				formSuccessSub();
			}
			else {
				formErrorSub();
			}
		}
		function formSuccessSub(){
			$(".newsletter-form")[0].reset();
			submitMSGSub(true, "Thank you for subscribing!");
			setTimeout(function() {
				$("#validator-newsletter").addClass('hide');
			}, 4000)
		}
		function formErrorSub(){
			$(".newsletter-form").addClass("animated shake");
			setTimeout(function() {
				$(".newsletter-form").removeClass("animated shake");
			}, 1000)
		}
		function submitMSGSub(valid, msg){
			if(valid){
				var msgClasses = "validation-success";
			} else {
				var msgClasses = "validation-danger";
			}
			$("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
		}
		// AJAX MailChimp
		$(".newsletter-form").ajaxChimp({
			url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
			callback: callbackFunction
		});

		// Mission Slider
		$('.mission-slider').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			autoplayHoverPause: true,
            autoplay: true,
			smartSpeed: 1000,
			margin: 30,
            navText: [
                "<i class='flaticon-left-arrow'></i>",
                "<i class='flaticon-right-arrow'></i>"
            ],
            responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 2
				},
				1024: {
					items: 3
				},
				1200: {
					items: 3
				}
			}
		});

		// Team Slider
		$('.team-slider').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			autoplayHoverPause: true,
            autoplay: true,
			smartSpeed: 1000,
			margin: 30,
            navText: [
                "<i class='flaticon-left-arrow'></i>",
                "<i class='flaticon-right-arrow'></i>"
            ],
            responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 2
				},
				1200: {
					items: 4
				}
			}
		});

		// Testimonial Slider
		$('.testimonial-slider').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			autoplayHoverPause: true,
            autoplay: true,
			smartSpeed: 1000,
			items: 1,
		});

		// Popup Video
		$('.popup-youtube').magnificPopup({
			disableOn: 320,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});

		// Blog Slider
		$('.blog-slider').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			autoplayHoverPause: true,
            autoplay: true,
			smartSpeed: 1000,
			margin: 30,
            navText: [
                "<i class='flaticon-left-arrow'></i>",
                "<i class='flaticon-right-arrow'></i>"
            ],
            responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 2
				},
				1200: {
					items: 3
				}
			}
		});

		// Odometer JS
        $('.odometer').appear(function(e) {
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});
		
		// FAQ Accordion
        $(function() {
            $('.accordion').find('.accordion-title').on('click', function(){
                // Adds Active Class
                $(this).toggleClass('active');
                // Expand or Collapse This Panel
                $(this).next().slideToggle('fast');
                // Hide The Other Panels
                $('.accordion-content').not($(this).next()).slideUp('fast');
                // Removes Active Class From Other Titles
                $('.accordion-title').not($(this)).removeClass('active');		
            });
		});
		
		// Sidebar Example Demo Modal
		$(".sidebar-demo-control").on('click',  function() {
			$('.example-demo-modal').toggleClass('active');
		});
		$(".example-demo-modal-control").on('click',  function() {
			$('.example-demo-modal').removeClass('active');
		});

		// Go to Top
        $(function(){
            // Scroll Event
            $(window).on('scroll', function(){
                var scrolled = $(window).scrollTop();
                if (scrolled > 600) $('.go-top').addClass('active');
                if (scrolled < 600) $('.go-top').removeClass('active');
            });  
            // Click Event
            $('.go-top').on('click', function() {
                $("html, body").animate({ scrollTop: "0" },  500);
            });
		});

		
}(jQuery));









