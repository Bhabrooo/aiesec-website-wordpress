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
    <section id="quote"  style="background: url('<?php the_field('quote_background_image'); ?>') center center; color: #fff">
        <div class="container">
            <div class="row">
            <div class="col-sm-12 text-center">
                <h2> <em>"<?php the_field('aiesec_quote'); ?>"</em></h2>
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