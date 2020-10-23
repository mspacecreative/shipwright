(function( root, $, undefined ) {
	"use strict";

	$(function () {
		
		// MOBILE MENU
		$('.toggle').click(function () {
			$('.mobile-menu').slideToggle();
			$(this).toggleClass('open');
		});
		
		// PROMO OVERLAY
		$('.promo-overlay, .close-promo').click(function() {
			$('.promo-overlay').fadeOut();
		});
		
	});

} ( this, jQuery ));