<?php
/**
 * Template Name: Client
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

<?php if( have_rows('clients') ): ?>
<section id="portfolio" data-autoheight="true" class="overlay">
 <div class="folio-content">
  <div class="container" id="folio-container">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4 port-container text-center">
            <a class="folio-link" href="#portfolio" id="folio-header">CLIENT LIST</a>
        </div>
      </div>  <!--End Row-->
      
  <div class="vspacer3"></div>

      <?php while ( have_rows('clients') ) : the_row(); ?>
           <div class="col-sm-4">
             <img src="<?php the_sub_field('client_logo'); ?>" class="img-resposive" style="width: 350px; height: auto;">           
           </div>
      <?php endwhile; ?>

          <div class="col-sm-4">
           
            <div class="col-xs-6 text-right"><a href="/contact" id="plus-sign"><i class="fa fa-plus-circle"></i></a> </div>
             <div class="col-xs-6 text-left"><div class="client-circle">Future client?</div></div> 
          </div>

        
  


    </div><!--container-->
  </div><!--folio-content-->
</section>
<?php endif; ?>

<a id="top-link-color"><i class="fa fa-chevron-circle-up fa-3x"></i></a>

<script>

  $(document).ready(function() {

    $("#plus-sign").hover(function() {
      $('div.client-circle').fadeIn(800);
     // $('span.client-cta').fadeIn(800);

    });

    $("#plus-sign").mouseout(function() {
      $('div.client-circle').hide();
     // $('span.client-cta').hide();

    });

  });


</script>




 <?php get_footer(); ?>