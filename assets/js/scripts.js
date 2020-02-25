(function ($, root, undefined) {
	$(document).ready(function(){

	// DETECT BROWSER 


	// LOADER
	$(".page-loader").delay(3500).fadeOut(500);

	$(function() {
		if( $(window).width() > 767 ) {	

		// DETECT WHEN MAIN IS ON TOP OF WINDOW

		var headerTop = $(window).height() * 0.83;

		$(window).on( 'scroll', function(){
        if ($(window).scrollTop() >= headerTop) {
            $('.home header').addClass('fixed');
				$('body.home').addClass('menu-fixed');
				$('.home main').addClass('no-translateY');
				$('.home header').addClass('no-translateY');
				$("body.home").addClass("scroll-already");
			} else {
            $('.home header').removeClass('fixed');
				$('body.home').removeClass('menu-fixed');
      	  }
		});

		// Detect when scroll is back on top

		$(window).scroll(function() {    
			if ($('body').hasClass('scroll-already')) {
				var scroll = $(window).scrollTop();
	
				if (scroll == 0) {
					// console.log('je suis déjà descendu et je suis de retour en haut ');
					TweenMax.fromTo(".splash-logo svg", 1,  {autoAlpha:0}, {autoAlpha:1});
					TweenMax.fromTo(".video-top-content", 1, 
					{
						opacity : 1,
						y: '0vh',
						ease:Power1.easeInOut
					},{
						opacity : 0,
						y: '10vh',
						ease:Power1.easeInOut
					});
				}else{
					TweenMax.fromTo(".video-top-content", 1, 
					{
						opacity : 0,
						y: '10vh',
						ease:Power1.easeInOut
					},{
						opacity : 1,
						y: '0vh',
						ease:Power1.easeInOut
					});
				}
			} 
		});
		 
		// INTRO VIDEO SCROLL MORE
		$('body').addClass('just-loaded');

		// Animation to move home main content after LOADER

		var home_main = $('.home main');
		var home_header = $('.home header');

		setTimeout(function() {
			home_main.addClass('slideUp-main');
			home_header.addClass('slideUp-main');
			TweenMax.fromTo(".video-top-content", 1, 
			{
				opacity : 0,
				y: '20vh',
				ease:Power1.easeInOut
			},{
				opacity : 1,
				y: '0vh',
				ease:Power1.easeInOut
			});

	  	}, 3500);

		// FADE OUT LOGO ON VIDEO 	
		$(window).scroll(function() {    
			var scroll = $(window).scrollTop();
	  
			if (scroll >= 100) {
				$(".splash-logo svg").fadeOut(500);
			}else{
				$(".splash-logo svg").fadeIn(350);
			}
		  }); //missing );
		
		// OPACITY PROGRESSIV HEADER VIDEO
		$(function() {
			// init controller
			var controller = new ScrollMagic.Controller();

			// build a tween
			var anim1 = TweenMax.fromTo(".splash-logo-bkg", 1,  {autoAlpha:0}, {autoAlpha:1});
			
			// build scene
			var scene1 = new ScrollMagic.Scene({
				triggerElement: 'video-top-content', // You can use 'this'
				duration: 600, // Distance duration in px
				triggerHook : 0 // 'percentage of window'
			})

			// Create a scene for each project
			.setTween(anim1) // trigger a TweenMax.to tween
			//.addIndicators({name: "Opacity increase"}) // add indicators (requires plugin)
			.addTo(controller);
			
		});

		}
	}); // END RESPONSIVS > 767

	$(function() { // START REPSONSVIE < 767 
		if( $(window).width() < 767 ) {	

			var headerTop = $(window).height() * 0.83;

			$(window).on( 'scroll', function(){
			if ($(window).scrollTop() >= headerTop) {
					$('.home header').addClass('fixed');
					$('body.home').addClass('menu-fixed');
					$('.home main').addClass('no-translateY');
					$('.home header').addClass('no-translateY');
					$("body.home").addClass("scroll-already");
				} else {
					$('.home header').removeClass('fixed');
					$('body.home').removeClass('menu-fixed');
				}
			});
		}
	}); // END RESPONSIVS < 767

		// FIXED HEADER ON THE TOP
		var distance = $('header').offset().top,
			$window = $(window);

		$window.scroll(function() {
			if ( $window.scrollTop() >= distance ) {
				
				$('#archive-cat.archive header').addClass('fixed');
				$('body#archive-cat.archive').addClass('menu-fixed');
				//$('#archive-cat.archive header .top-header-wpml').fadeIn(300);
			}else{
				
				$('#archive-cat.archive header').removeClass('fixed');
				$('body#archive-cat.archive').removeClass('menu-fixed');
				//$('#archive-cat.archive header .top-header-wpml').fadeOut(300);
			}
		});

	
		// SPLASH SCREEN IF NEW USER

		if ($.cookie('Cookies-acceptation')) {
			$('body').addClass('cookies-accepted');
		}

		$("#cookieButton").click(function() {
			$.cookie('Cookies-acceptation', 'Les cookies ont été acceptés', { expires: 7 });
			$(".cookie-notif").slideToggle(500);
			$('body').addClass('cookies-accepted');
		});
		
	
		// ANIMATION SEARCH BAR 

		var triggerSearch = $(".btn-search");

		$(triggerSearch).click(function(){
			$(".large-menu-rotate").toggleClass('menu-rotate');
		});

		$(function() { // START REPSONSVIE < 420
			if( $(window).width() < 420 ) {	
			
			$(triggerSearch).click(function(){
				$(".container-logo-menu").toggleClass('logo-rotate');
			});

			}
		});

 		// APPARITION
			var delay = 0;
			$('.apparition-2').each(function () {
					var $li = $(this);
					setTimeout(function () {
							$li.addClass('animation-fade-in');
					}, delay += 200);
			});

			var delay1 = 0;
			$('.apparition-3').each(function () {
					var $li = $(this);
					setTimeout(function () {
							$li.addClass('animation-fade-up');
					}, delay += 150);
			});

    	// MENU BURGER
      // Object variables for event handlers
      var triggers = ({
          menuBtn : $('#menu-btn')
      });

      triggers.menuBtn.click(function() {
        $("body").toggleClass("responsive");
        $(".nav-mobile").slideToggle("slow");
        $(this).toggleClass('open');
        $(this).find("button").toggleClass('menu-open');

		  });
		  // ADD class anim with Delay
			$('#menu-btn').click(function() {
            if ( $('body').hasClass( "responsive" ) ) {
                $('.nav-mobile li').removeClass('animation-fade-out')
                var delay = 0;
                 $('.nav-mobile li').each(function() {
                   var $li = $(this);
                   setTimeout(function() {
                     $li.addClass('animation-fade-up');
                   }, delay+=100); // delay 100 ms
                 });
            }
            else {
                setTimeout(function() {
                    $('.nav-mobile li').removeClass('animation-fade-up');
                }, 800);
            }
        });

		    
	});
})(jQuery, this);
