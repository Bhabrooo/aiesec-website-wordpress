	jQuery(document).ready(function(){

		var windowHeight = jQuery(window).height();
		var mainHeight = windowHeight - 42;
		jQuery("#body-wrap").css('min-height', mainHeight);

		// Scroll to section
		jQuery('a[data-toggle="scroll"]').click(function(e) {
			e.preventDefault();
			var div_id = jQuery(this).attr('href'); // The href value should match the div's id
			
			jQuery('html, body').animate({
				scrollTop: jQuery(div_id).offset().top - 80 // jQuery animates to the div's offset().top a.k.a. the div's position
			}, 'slow'); // milliseconds of the animation
		});


		var windowWidth = jQuery(window).width();

		if (windowWidth >= 767){
			resize_sections();
			$(".chart-box").show();
		} 
		else {
			$("section").css("padding-bottom", "4em");
			$("section").css("padding-top", "4em");
			$(".skillset-list").show();
		}


		// Resize sections on window resize
		jQuery(window).resize(function() {
		
			if (windowWidth >= 767){
				resize_sections();
				$(".skillset-list").hide();
				$(".chart-box").show();
			} 
			else {
				$("section").css("padding-bottom", "4em");
				$("section").css("padding-top", "4em");
				$(".chart-box").hide();
				$(".skillset-list").show();
			}

		});

	});

	
		// $(window).scroll(function() {

		// 		var scrollAmount = $(window).scrollTop();
		//     	var navbarHeight = windowHeight * 0.135;
		//    	 	var scrollPercent = (scrollAmount / windowHeight) * 100;

		//    	 	if (scrollPercent > 95)  {
		// 		    $('#top-link').addClass('active');
		// 		} else {

		// 			$('#top-link').removeClass('active');
		// 		}

		// 		$('#top-link').click(function(e) {
		// 			    $.scrollTo(0,300);
		// 			    e.preventDefault();
		// 			}); // top link


		// });



	function resize_sections()
	{
		var window_height = jQuery(window).height();
		jQuery('[data-autoheight="true"]').css('min-height', jQuery(window).height());

		jQuery('div.vspacer').each(function() {
			var parent_height = jQuery(this).parents('section').height();
			var spacer_height = Math.round(parent_height * 0.33);

			jQuery(this).css('height', spacer_height);
		});


		jQuery('div.vspacer2').each(function() {
			var parent_height = jQuery(this).parents('section').height();
			var spacer_height = Math.round(parent_height * 0.25);

			jQuery(this).css('height', spacer_height);
		});

		jQuery('div.vspacer3').each(function() {
			var parent_height = jQuery(this).parents('section').height();
			var spacer_height = Math.round(parent_height * 0.12);

			jQuery(this).css('height', spacer_height);
		});

		jQuery('div.vspacer4').each(function() {
			var parent_height = jQuery(this).parents('section').height();
			var spacer_height = Math.round(parent_height * 0.70);

			jQuery(this).css('height', spacer_height);
		});

		jQuery('div.vspacer5').each(function() {
			var parent_height = jQuery(this).parents('section').height();
			var spacer_height = Math.round(parent_height * 0.05);

			jQuery(this).css('height', spacer_height);
		});		

	}
