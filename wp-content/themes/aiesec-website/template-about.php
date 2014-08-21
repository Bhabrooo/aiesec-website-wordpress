<?php
/**
 * Template Name: About
 *
 *
 */

get_header(); ?>

 <!-- Header -->
<header id="intro" data-autoheight="true">
    <div class="bg" style="background: url(<?php the_field('about_background_image'); ?>) no-repeat fixed 50% 0px / cover" data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -100px;" data-anchor-target="#intro">  
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
    
                    <h3><?php the_field('about_aiesec_tagline'); ?></h3>
                    <p><?php the_field('about_aiesec_description'); ?></p>
                </div><!--col-->

                <div class="col-sm-5 text-center">
                    <img src="<?php the_field('about_aiesec_image'); ?>" class="img-responsive" alt="">
                </div><!--col-->


            </div>
        </div>
    </section>

    <section class="success">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center">
                    <h2>AIESEC History</h2>
                    <br><br>
                </div>

                <div class="col-sm-5 text-center">
                    <img src="<?php the_field('aiesec_history_image'); ?>" class="img-responsive" alt="">
                </div><!--col-->
                
                <div class="col-sm-7 text-center">
    
                    <h3><?php the_field('aiesec_history_tagline'); ?></h3>
                    <p><?php the_field('aiesec_history_description'); ?></p>
                </div><!--col-->




                </div><!--col-->
            </div>
        </div>
    </section>


    <section class="warning">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center">
                    <h2>About the Philippines</h2>
                    <br><br>
                </div>



                <div class="col-sm-7 text-center">
    
                    <h3><?php the_field('aiesec_phes_tagline'); ?></h3>
                    <p><?php the_field('aiesec_phes_description'); ?></p>
                </div><!--col-->

                <div class="col-sm-5 text-center">
                    <img src="<?php the_field('aiesec_phes_image'); ?>" class="img-responsive" alt="">
                </div><!--col-->


                </div><!--col-->
            </div>
        </div>
    </section>




<?php get_footer(); ?>