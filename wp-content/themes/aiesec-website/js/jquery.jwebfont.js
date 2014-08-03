(function(jQuery) {

    jQuery.fn.jwebfont = function(options) {

    	// Establish our default settings
        var settings = jQuery.extend({
        	font_families : [],
        	target_items : undefined
        }, options);

    	jQuery(this).each(function() {

	    	// Check if data-webfont attribute is present, otherwise check in child elements
	    	if (jQuery(this).attr('data-webfont') !== undefined)
	    	{
	    		settings.target_items = jQuery(this);
	    	}
	    	else
	    	{
	    		settings.target_items = jQuery(this).find( '[data-webfont]' );
	    	}

	    	settings.target_items.each(function() {

	    		var item_font = jQuery(this).attr( 'data-webfont' );

	    		if (jQuery.inArray( item_font, settings.font_families ) === -1)
	    		{
	    			settings.font_families[settings.font_families.length] = item_font;
	    		}

	    	});
    		
    	});

    	console.log( 'Found: ' + settings.font_families );

    	WebFont.load({
			google: {
				families: settings.font_families
			},
			active: function() {

				console.log('Finished loading fonts');

				settings.target_items.each(function() {

					jQuery(this).css('font-family', jQuery(this).attr('data-webfont'));

				});
			
			}
		});


    }

}(jQuery));