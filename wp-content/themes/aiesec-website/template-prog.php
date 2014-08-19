<?php
/**
* Template Name: Programme
*
*
*/

get_header(); ?>


 <!-- Header -->
<header data-autoheight="true" style="background: url('<?php the_field('background_image'); ?>') center center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="intro-text">
                    <span class="name"><?php the_field('title'); ?></span>
                    <span class="skills"><?php the_field('subheading'); ?></span><br>
                    <button class="btn btn-lg btn-outline" id="header-cta">
                    <?php the_field('button_title'); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>



<?php if( have_rows('description') ): ?>
    <?php $i = 0 ?>
        <?php while ( have_rows('description') ) : the_row(); ?>
            <?php if ($i % 2 == 0) {?>

    <section style="background-color: <?php the_sub_field('description_background_color') ?>">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center heading">
                    <h2><?php the_sub_field('description_title'); ?></h2>
                    <span class="subheading">
                    </span>
                    
                </div>

                <div class="col-sm-7 text-center">

                    <h3><?php the_sub_field('description_tagline'); ?></h3>
                    <p><?php the_sub_field('description_details'); ?></p>
                </div><!--col-->

                <div class="col-sm-5 text-center">
                    <img src="<?php the_sub_field('description_image'); ?>" class="img-responsive" alt="">
                </div><!--col-->


            </div>
        </div>
      </section>  

    <?php } else { ?>

    <section style="background-color: <?php the_sub_field('description_background_color') ?>">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center heading">
                    <h2><?php the_sub_field('description_title'); ?></h2>
                    <span class="subheading">
                    </span>
                    
                </div>



                <div class="col-sm-5 text-center">
                    <img src="<?php the_sub_field('description_image'); ?>" class="img-responsive" alt="">
                </div><!--col-->

                <div class="col-sm-7 text-center">

                    <h3><?php the_sub_field('description_tagline'); ?></h3>
                    <p><?php the_sub_field('description_details'); ?></p>
                </div><!--col-->


            </div>
        </div>
      </section>  




    <?php }  ?>
    <?php $i++ ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>