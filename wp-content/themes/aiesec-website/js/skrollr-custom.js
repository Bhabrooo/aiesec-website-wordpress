 /**
 * This demo was prepared for you by Petr Tichy - Ihatetomatoes.net
 * Want to see more similar demos and tutorials?
 * Help by spreading the word about Ihatetomatoes blog.
 * Facebook - https://www.facebook.com/ihatetomatoesblog
 * Twitter - https://twitter.com/ihatetomatoes
 * Google+ - https://plus.google.com/u/0/109859280204979591787/about
 * Article URL: http://ihatetomatoes.net/simple-parallax-scrolling-tutorial/
 */

( function( $ ) {

	
    //FadeIn all sections   
	$(document).ready( function() {
		setTimeout(function() {
		     
		      adjustWindow();
		      
		  			  
		}, 800);
	});
	
	function adjustWindow(){
		
		// Init Skrollr
		//var s = skrollr.init();
		//disable Skroller on  mobile
	if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
		var s = skrollr.init({
			forceHeight: false
		}); 
	}
		
	    
	}
		
} )( jQuery );

   
