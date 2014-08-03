<?php
/**
 * Template Name: Contact
 *
 *
 */

get_header(); ?>

<section id="intro-contact" style="background: linear-gradient(rgba(191,191,191, 0.65), rgba(191, 191,191, 0.65)
    ), url(<?php the_field('hero_contact_background'); ?>);
	">
	<div class="col-sm-10 col-sm-offset-1">
	    <div class="vspacer2"></div>
	      	<div class="col-sm-12 welcome">

	      		<?php if( get_field('hero_banner_text') && get_field('hero_banner_text') != 'null') { ?>
	      			<h1 class="heading"><?php the_field('hero_banner_text'); ?> </h1>
	      		<?php } else { ?>

			         <?php if( get_field('hero_contact_counter') == 'One' ) { ?>

			         	     <h1 class="heading invert">WE CURRENTLY HAVE <span class="blue"><?php the_field('hero_contact_counter'); ?></span> SLOT LEFT FOR NEW PROJECTS</h1> 

					<?php } else { ?>

							 <h1 class="heading invert">WE CURRENTLY HAVE <span class="blue"><?php the_field('hero_contact_counter'); ?></span> SLOTS LEFT FOR NEW PROJECTS</h1> 
							 
					<?php } ?>

				<?php } ?>




	    	</div><!--end welcome-->
	</div><!--end col 12-->
</section>

<section id="contact-form">
    <div class="form-body">
  		<div class="container" id="form-container">
                <div class="row">

                    <div class="width-70">
                     	<div class="row" id= "form-box">

							<div class="col-sm-5 btn-row">
							  <button type="button" class="btn unselected" id="quick-message">QUICK MESSAGE</button>
							</div>

							<div class="col-sm-2 center-space">
							  <h4 style="color: #616161" class="text-center">OR</h4>
							</div>

							<div class="col-sm-5 btn-row">
							  <button type="button" class="btn btn-primary" id="kick-start">KICK START A PROJECT</button>
							</div>

						</div>
		
	
						<div class="row" id= "form-box">
					        <div class="row contact-form" id="kickstart" style="display:none">
					            <?php echo do_shortcode( '[contact-form-7 id="111" title="Kickstart A Project"]' ); ?>
					        </div>  <!--End Row--> 

					        <div class="row contact-form" id="message" style="display:none;">
					            <?php echo do_shortcode( '[contact-form-7 id="110" title="Quick Message"]' ); ?>
					        </div>  <!--End Row--> 

			    		</div><!--formbox-->
			    </div><!--col-->
			 </div><!--row-->
		</div><!--form container-->
	</div><!--formbody-->
</section>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
	
</script>
<section>
<div class="row-fluid">
	<div style="overflow:hidden;height:500px;width:100%;">
	<div id="gmap_canvas" style="height:100%;width:100%; vertical-align:middle;">
		
	</div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
	<a class="google-map-code" href="http://www.sparmichl.de" id="get-map-data">www.sparmichl.de</a></div>
	<script type="text/javascript"> function init_map(){var myOptions = {zoom:18,center:new google.maps.LatLng(14.646696275794682,121.07398918584443),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(14.646696275794682, 121.07398918584443)});infowindow = new google.maps.InfoWindow({content:"<b>Unit 524, Elizabeth Hall</b><br/>Katipunan Avenue, Loyola Heights, Quezon City<br/> Quezon City" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>	
</section>





<a id="top-link-color"><i class="fa fa-chevron-circle-up fa-3x"></i></a>

<script type="text/javascript">

$(document).ready(function() {

	$('#quick-message').addClass("btn-primary");
	$('#quick-message').removeClass("unselected");
	$('#kick-start').removeClass("btn-primary"); 
	$('#kick-start').addClass("unselected");
	$('#message').fadeIn(800);  
  

    $('#quick-message').click(function() {
       // $('#kickstart').hide();
       //  $('#message').show();
       	$('#kick-start').removeClass("btn-primary");  
       	$('#kick-start').addClass("unselected");
       	$('#quick-message').addClass("btn-primary");
		$('#quick-message').removeClass("unselected"); 

      	$('#kickstart').hide();
        $('#message').fadeIn(800); 
        $(window).scrollTo("div#form-container", 800, {offset:-80});  
        //$(window).scrollTo('+=380px', 800);  
    });

    $('#kick-start').click(function() {
        // $('#message').hide();
        // $('#kickstart').show();
        $('#quick-message').removeClass("btn-primary"); 
         $('#quick-message').addClass("unselected");  
        $('#kick-start').addClass("btn-primary");
		$('#kick-start').removeClass("unselected");
        $('#message').hide();
        $('#kickstart').fadeIn(800);
		$(window).scrollTo("div#form-container", 800, {offset:-80});   
    });
});

</script>  

<?php get_footer(); ?>