(function( root, $, undefined ) {
	"use strict";

	$(function () {

			// var docWidth = document.documentElement.offsetWidth;
			//
			// [].forEach.call(
			//   document.querySelectorAll('*'),
			//   function(el) {
			//     if (el.offsetWidth > docWidth) {
			//       console.log(el);
			//     }
			//   }
			// );


        var windowWidth = $(window).width();

				if(windowWidth < 576) {
					var menuWidth = windowWidth - 50;
				} else if(windowWidth < 992) {
					var menuWidth = windowWidth/2;
				} else if(windowWidth < 1200) {
					var menuWidth = 400;
				} else {
					var menuWidth = 400;
				}

				$(document).on('click', 'a[href^="#"]', function (event) {
			    event.preventDefault();

			    $('html, body').animate({
			      scrollTop: $($.attr(this, 'href')).offset().top
			    }, 500);
				});


				var lang = $.cookie("googtrans"); //console.log(lang);
				if(lang == '/en/en' || lang == "" || lang == undefined) {
					$("#language select").val('en|en');
					$("#language span").text('Español');
					doGTranslate('en|en');
				}
				if(lang == '/en/es' || lang == '/en/af') {
					$("#language select").val('en|es');
					$("#language span").text('English');
					doGTranslate('en|es');
				}


				$("#language span").click(function(){
					var lang = $.cookie("googtrans");
					if(lang == '/en/en' || lang == "" || lang == undefined || lang == 'undefined') {
						$("#language select").val('en|es');
						$("#language span").text('English');
						doGTranslate('en|es');
					}
					if(lang == '/en/es') {
						$("#language select").val('en|en');
						$("#language span").text('Español');
						doGTranslate('en|en');
					}
				});




				$(document).on('click', '#mobileMenuToggle', function() {
					$('#mobileMenu').css('height', '100vh');
					setTimeout( function() {
            $('#mobileMenu').toggleClass('show');
       		}, 100);


					$(this).toggleClass('active');

				});
				$(document).on('click', '#mobileMenu li.menu-item-has-children', function(e) {
					// e.preventDefault();
					$(this).toggleClass('expanded');
				})



				// gform.addFilter( 'gform_spinner_target_elem', function( $targetElem, formId ) {
				//     return $( '#my-custom-footer-elem' );
				// } );

        jQuery('body').addClass('fade-in');


    });


} ( this, jQuery ));
