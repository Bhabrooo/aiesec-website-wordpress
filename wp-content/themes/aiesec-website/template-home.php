<?php
/**
 * Template Name: Home Page
 *
 *
 */

get_header(); ?>
 

    <!-- Header -->
    <header data-autoheight="true" style="background: url(<?php the_field('welcome_background_image'); ?>) center center">
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
    </header>


<?php if( have_rows('description') ): ?>
    <section id="about" class="yellow">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center heading">
                    <h2><?php the_field('who_we_are_text'); ?></h2>
                    <span class="subheading">
                       <a href="about.html" class="sub-button"><?php the_field('wwa_subheading'); ?></a> 
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

    <!-- About Section -->
    <section class="success" id="how">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center">
                    <h2>Join AIESEC</h2>
                    <br><br>
                </div>

                <div class="col-sm-4 text-center">
                    <i class="fa fa-jsfiddle fa-5x"></i>
                    <h3>Intern abroad!</h3>
                    <p>All AIESECers from Asia Pacific are invited to register for APXLDS: the biggest and funnest conference in the region</p>
                    <a href="#" class="btn btn-lg btn-outline">
                        Global Talent
                    </a>
                </div><!--col-->

                <div class="col-sm-4 text-center">
                    <i class="fa fa-rebel fa-5x"></i>
                    <h3>Volunteer for a cause!</h3>
                    <p>Hey AIESEC! All AIESECers from Asia Pacific are invited to register for APXLDS: the biggest and funnest conference in the region</p>
                    <a href="#" class="btn btn-lg btn-outline">
                        Global Citizen
                    </a>
                </div><!--col-->

                <div class="col-sm-4 text-center">
                    <i class="fa fa-university fa-5x"></i>
                    <h3>Get involved here!</h3>
                    <p>Hey AIESEC! All AIESECers from Asia Pacific are invited to register for APXLDS: the biggest and funnest conference in the region</p>
                    <a href="#" class="btn btn-lg btn-outline">
                       Global Leader
                    </a>
                </div><!--col-->
            </div>
        </div>
    </section>

    <!-- Student Grid Section -->
    <section id="partner" class="warning">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center heading">
                    <h2>Partner with Us</h2>
                    <span class="subheading">
                    </span>
                    
                </div>

                <div class="col-sm-7 text-center">
    
                    <h3>Youth Org</h3>
                    <p>Hey AIESEC! All AIESECers from Asia Pacific are invited to register for APXLDS: the biggest and funnest conference in the region</p>
                </div><!--col-->

                <div class="col-sm-5 text-center">
                    <img src="img/portfolio/game.png" class="img-responsive" alt="">
                </div><!--col-->


            </div>
        </div>
    </section>

    <!--Quote-->
    <section id="quote"  style="background: url('img/stepgrass.jpg') center center; color: #fff">
        <div class="container">
            <div class="row">
            <div class="col-sm-12 text-center">
                <h2> <em>"What doesn't kill you makes you stronger"</em></h2>
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
                    <hr class="star-primary">
                </div>

                 <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a id="contact-aiesec" class="btn btn-lg btn-outline-invert">
                        Contact AIESEC
                    </a>
                </div>

                <div class="col-sm-12 text-center">
                (Map here)
                </div>

            </div>
        </div>
    </section>

<script type="text/javascript">
	$(function() {
    $('#header-cta').click(function(e) {
        $(window).scrollTo("section#about", 800, {offset:-80});  
        e.preventDefault();
    });

    $('#contact-aiesec').click(function(e) {
        $(window).scrollTo("footer", 800, {offset:-80}); 
        e.preventDefault();
    });

    $('#scroll-down').click(function(e) {
        $(window).scrollTo("footer", 800, {offset:-80});
        e.preventDefault(); 

    });

}); 

</script>
<?php get_footer(); ?>