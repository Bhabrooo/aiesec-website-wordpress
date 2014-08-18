<?php
/**
* Template Name: Partner With Us
*
*
*/

get_header(); ?>


 <!-- Header -->
<header data-autoheight="true" style="background: url('<?php the_field('partners_background_image'); ?>') center center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="intro-text">
                    <span class="name"><?php the_field('partners_title'); ?></span>
                    <span class="skills"><?php the_field('partners_subheading'); ?></span><br>
                    <button class="btn btn-lg btn-outline" id="header-cta">
                    <?php the_field('partners_button_title'); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>



<?php if( have_rows('reason') ): ?>
  <?php $i = 0 ?>
  <?php while ( have_rows('reason') ) : the_row(); ?>
    <?php if ($i % 2 == 0) {?>
      <section class="warning">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center heading">
                    <h2><?php the_sub_field('reason_title'); ?></h2>
                    <span class="subheading">
                    </span>
                    
                </div>

                <div class="col-sm-7 text-center">

                    <h3><?php the_sub_field('reason_tagline'); ?></h3>
                    <p><?php the_sub_field('reason_details'); ?></p>
                </div><!--col-->

                <div class="col-sm-5 text-center">
                    <img src="<?php the_sub_field('reason_image'); ?>" class="img-responsive" alt="">
                </div><!--col-->


            </div>
        </div>
      </section>  

    <?php } else { ?>

      <section class="success">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center heading">
                    <h2><?php the_sub_field('reason_title'); ?></h2>
                    <span class="subheading">
                    </span>
                    
                </div>



                <div class="col-sm-5 text-center">
                    <img src="<?php the_sub_field('reason_image'); ?>" class="img-responsive" alt="">
                </div><!--col-->

                <div class="col-sm-7 text-center">

                    <h3><?php the_sub_field('reason_tagline'); ?></h3>
                    <p><?php the_sub_field('reason_details'); ?></p>
                </div><!--col-->


            </div>
        </div>
      </section>  




    <?php }  ?>
    <?php $i++ ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>