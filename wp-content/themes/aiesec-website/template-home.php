<?php
/**
 * Template Name: Home Page
 *
 *
 */

get_header(); ?>
 

    <!-- Header -->
    <header id="intro" data-autoheight="true" >
        <div class="bg" style="background: url(<?php the_field('welcome_background_image'); ?>) no-repeat fixed 50% 0px / cover" data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -100px;" data-anchor-target="#intro">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="intro-text">
                            <span class="name"><?php the_field('welcome-text'); ?></span>
                            <span class="skills"><?php the_field('welcome_subheading'); ?></span><br>
                            <button class="btn btn-lg btn-outline" id="header-cta">
                              <?php the_field('welcome_learn_more'); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


<?php if( have_rows('description') ): ?>
    <section id="about" class="yellow">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center heading">
                    <h2><?php the_field('who_we_are_text'); ?></h2>
                    <span class="subheading">
                       <a href="about" class="sub-button"><?php the_field('wwa_subheading'); ?></a> 
                    </span>
                    
                </div>

                <?php while ( have_rows('description') ) : the_row(); ?>
                <div class="col-sm-4 text-center">
                    <i class="fa fa-jsfiddle fa-5x"></i>
                    <h3><?php the_sub_field('wwa_title'); ?></h3>
                    <p><?php the_sub_field('wwa_details'); ?></p>
                </div><!--col-->
                <?php endwhile; ?>

            </div>
        </div>
    </section>
<?php endif; ?>

<?php if( have_rows('programmes') ): ?>
    <section class="success" id="how">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center">
                    <h2>Join AIESEC</h2>
                    <br><br>
                </div>

            <?php while ( have_rows('programmes') ) : the_row(); ?>
                <div class="col-sm-4 text-center">
                    <i class="fa fa-jsfiddle fa-5x"></i>
                    <h3><?php the_sub_field('prog_title'); ?></h3>
                    <p><?php the_sub_field('prog_details'); ?></p>
                    <a href="#" class="btn btn-lg btn-outline">
                        <?php the_sub_field('prog_button_title'); ?>
                    </a>
                </div><!--col-->
            <?php endwhile; ?>



            </div>
        </div>
    </section>
<?php endif; ?>
    
    <section id="partner" class="warning">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center heading">
                    <h2>Partner with Us</h2>
                    <span class="subheading-invert">
                    <a href="partner-with-us" class="sub-button">Why AIESEC is the best Partner</a> 
                    </span>
                    
                </div>

                <div class="col-sm-7 text-center">
    
                    <h3><?php the_field('pwu_tagline'); ?></h3>
                    <p><?php the_field('pwu_description'); ?></p>
                </div><!--col-->

                <div class="col-sm-5 text-center">
                    <img src="<?php the_field('pwu_image'); ?>" class="img-responsive" alt="">
                </div><!--col-->


            </div>
        </div>
    </section>

    <!--Quote-->
    <section id="quote" style="color: #fff">
        <div class="bg" style="background: url(<?php the_field('quote_background_image'); ?>) no-repeat fixed 50% 0px / cover" data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -100px;" data-anchor-target="#quote">  
            <div class="container">
                <div class="row">
                <div class="col-xs-12 text-center">
                    <h2> <em>"<?php the_field('aiesec_quote'); ?>"</em></h2>
                </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center">
                    <h2>Are you Ready?</h2>
                </div>

                 <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a id="contact-aiesec" class="btn btn-lg btn-outline-invert">
                        Contact AIESEC
                    </a>
                </div>

            </div>
        </div>
    </section>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
    
</script>
<section id="map">
<div class="row-fluid">
    <div style="overflow:hidden;height:500px;width:100%;">
    <div id="gmap_canvas" style="height:100%;width:100%; vertical-align:middle;">
        
    </div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
    <a class="google-map-code" href="http://www.sparmichl.de" id="get-map-data">www.sparmichl.de</a></div>
    <script type="text/javascript"> function init_map(){var myOptions = {zoom:18,center:new google.maps.LatLng(14.6343154,121.0724134),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(14.6343154,121.0724134)});infowindow = new google.maps.InfoWindow({content:"<b>Unit 102 Liberty Place</b>, 96 Xavierville Avenue,<br/>Katipunan Avenue, Loyola Heights, Quezon City<br/> Quezon City" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>  
</section>
<?php get_footer(); ?>