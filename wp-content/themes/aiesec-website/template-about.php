<?php
/**
 * Template Name: About
 *
 *
 */

get_header(); ?>

    <!-- Header -->
    <header data-autoheight="true" style="background: url(<?php the_field('about_background_image'); ?>) center center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="intro-text">
                        <span class="name"><?php the_field('about_text'); ?></span>
                        <span class="skills"><?php the_field('about_subheading'); ?></span><br>
                        <button class="btn btn-lg btn-outline" id="header-cta">
                            <?php the_field('about_button_title'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section id="about" class="danger">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center heading">
                    <h2>About AIESEC</h2>
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

    <!-- About Section -->
    <section class="warning">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center">
                    <h2>About the Philippines</h2>
                    <br><br>
                </div>

                <div class="col-sm-5 text-center">
                    <img src="img/portfolio/circus.png" class="img-responsive" alt="">
                </div><!--col-->

                <div class="col-sm-7 text-center">
    
                    <h3>Youth Org</h3>
                    <p>Hey AIESEC! All AIESECers from Asia Pacific are invited to register for APXLDS: the biggest and funnest conference in the region</p>
                </div><!--col-->


                </div><!--col-->
            </div>
        </div>
    </section>




<?php get_footer(); ?>