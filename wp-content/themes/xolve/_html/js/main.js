	jQuery(document).ready(function(){

		// Scroll to section
		jQuery('a[data-toggle="scroll"]').click(function(e) {
			e.preventDefault();
			var div_id = jQuery(this).attr('href'); // The href value should match the div's id
			
			jQuery('html, body').animate({
				scrollTop: jQuery(div_id).offset().top - 80 // jQuery animates to the div's offset().top a.k.a. the div's position
			}, 'slow'); // milliseconds of the animation
		});

		// Set sections to fill height
		resize_sections();

		// Resize sections on window resize
		jQuery(window).resize(function() {
		
			resize_sections();		
		});

		



	});



	function resize_sections()
	{
		var window_height = jQuery(window).height();
		jQuery('[data-autoheight="true"]').css('min-height', jQuery(window).height());

		jQuery('div.vspacer').each(function() {
			var parent_height = jQuery(this).parents('section').height();
			var spacer_height = Math.round(parent_height * 0.25);

			jQuery(this).css('height', spacer_height);
		});


		jQuery('div.vspacer2').each(function() {
			var parent_height = jQuery(this).parents('section').height();
			var spacer_height = Math.round(parent_height * 0.33);

			jQuery(this).css('height', spacer_height);
		});

		jQuery('div.vspacer3').each(function() {
			var parent_height = jQuery(this).parents('section').height();
			var spacer_height = Math.round(parent_height * 0.20);

			jQuery(this).css('height', spacer_height);
		});

		jQuery('div.vspacer4').each(function() {
			var parent_height = jQuery(this).parents('section').height();
			var spacer_height = Math.round(parent_height * 0.70);

			jQuery(this).css('height', spacer_height);
		});

	}

