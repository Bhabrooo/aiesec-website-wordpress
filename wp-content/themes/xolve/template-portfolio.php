<?php
/**
 * Template Name: Portfolio
 *
 *
 */

get_header(); ?>


 <section id="intro-folio" data-autoheight="true" style="background: url(<?php the_field('hero_portfolio_background'); ?>)">
    <div class="col-sm-12">
        <div class="vspacer2"></div>
          <div class="col-sm-12 welcome">
             <h1 class="heading"><?php the_field('hero_banner_text'); ?></h1>
              <p class="intro-text"><?php the_field('hero_subheading_text'); ?></p>    

        <?php if( get_field('hero_portfolio_call_to_action_link') && get_field('hero_portfolio_call_to_action_link') != 'null' ) : ?>
          <a href="<?php the_field('hero_portfolio_call_to_action_link'); ?>" class="btn cta-btn"><?php the_field('hero_portfolio_call_to_action_text'); ?></a>
          <?php endif; ?>

        </div><!--end welcome-->
    </div><!--end col 12-->
</section>

<?php if( have_rows('portfolio_list') ): ?>
<section id="portfolio" class="overlay">
  <div class="folio-content">
    <div class="container" id="folio-container">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4 port-container text-center">
            <a class="folio-link" href="#portfolio" id="folio-header">CLIENT LIST</a>
        </div>
      </div>  <!--End Row-->


      <?php $i = 0 ?>
      <?php while ( have_rows('portfolio_list') ) : the_row(); ?>

        <?php if ($i % 2 == 0) {?>
          <div class="card">                
            <div class="row">        
              <div class="col-xs-6">

                <div class="desc-area">

                  <h1><strong class="title">
                  <?php the_sub_field('project_name'); ?></strong></h1>
                  <?php the_sub_field('project_description'); ?>    
              
                  <?php if( get_sub_field('project_website_link') && get_sub_field('project_website_link') != 'null' ) : ?>
                  <a href="<?php the_sub_field('project_website_link'); ?>" class="btn btn-site"><?php the_sub_field('project_website_text'); ?></a>
                  <?php endif; ?>

                </div><!--end desc-area-->

            </div><!--end col-->

              
            <div class="col-xs-6">
                <img src="<?php the_sub_field('project_screenshot'); ?>" class="img-responsive center" style="margin-top: 2em;">
            </div> <!--end col--> 

          </div> <!--end row-->               
      </div>  <!--End Card-->


    <?php } else { ?>
      <div class="card">                
        <div class="row">
            <div class="col-xs-6">
              <img src="<?php the_sub_field('project_screenshot'); ?>" class="img-responsive center" style="margin-top: 2em;">
            </div> <!--end col-->

            <div class="col-xs-6">

              <div class="desc-area">
                <h1><strong class="title">
                <?php the_sub_field('project_name'); ?></strong></h1>
                <?php the_sub_field('project_description'); ?>    
            
              <?php if( get_sub_field('project_website_link') && get_sub_field('project_website_link') != 'null' ) : ?>
              <a href="<?php the_sub_field('project_website_link'); ?>" class="btn btn-site"><?php the_sub_field('project_website_text'); ?></a>
              <?php endif; ?>

              </div><!--end desc-area-->

          </div><!--end col-->
                    
        </div> <!--end row--> 

      </div>  <!--End Card-->

      <?php }  ?>
      <?php $i++ ?>
    <?php endwhile; ?>


    </div><!--container-->
  </div> <!--folio content-->    
</section>
<?php endif; ?>
<a id="top-link-color"><i class="fa fa-chevron-circle-up fa-3x"></i></a>






 <?php get_footer(); ?>