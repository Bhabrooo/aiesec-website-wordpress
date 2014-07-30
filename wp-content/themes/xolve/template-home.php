<?php
/**
 * Template Name: Home Page
 *
 *
 */

get_header(); ?>


<section id="hero" class="row" data-autoheight="true" style="background-image: url(<?php the_field('hero-background'); ?>);
	">

<div class="col-sm-12">
	<div class="vspacer2"></div>

	<img src="<?php the_field('hero-logo'); ?>" class="img-responsive hero-xolve-logo">
	<div class="col-sm-12 welcome">
		<div class="col-sm-10 col-sm-offset-1">
			<?php the_field('hero-main_text'); ?>
		</div>

		<?php if( get_field('hero-call_to_action-link') && get_field('hero-call_to_action-link') != 'null' ) : ?>
		<a href="<?php the_field('hero-call_to_action-link'); ?>" class="btn cta-btn"><?php the_field('hero-call_to_action-text'); ?></a>
		<?php endif; ?>

	</div>
</div>

</section><!--end hero-->

<?php if( have_rows('home-services_list') ): ?>
<section id="services" class="container-fluid" data-autoheight="true">
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="vspacer3"></div>
			<h2 class="heading space-down">Services</h2>

			<?php while ( have_rows('home-services_list') ) : the_row(); ?>
			<div class="col-sm-4 desc">
				<img src="<?php the_sub_field('service-image'); ?>" class="img-responsive center ">
				<h3 class="heading"><?php the_sub_field('service-label'); ?></h3>
				<p class="desc space-up"><?php the_sub_field('service-description'); ?>
				</p>
			</div><!--end col-sm-4-->
			<?php endwhile; ?>

			<div class="col-sm-12"><center>
			<?php if( get_field('services_cta_link') != 'null' ) : ?>
				<a href="<?php the_field('services_cta_link'); ?>" class="btn cta-btn" style="font-size: 1em;"><?php the_field('services_cta'); ?></a>
			<?php endif; ?></center>
			</div>

	
		</div>

		
	</div> <!--end container-->
</section><!--end services-->
<?php endif; ?>

<?php if( have_rows('home-prices_list') ): ?>
<section id="prices" class="container-fluid" data-autoheight="false">
<div class="container">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="vspacer3"></div>
			<h2 class="heading invert" style="margin-bottom: 0;">Products</h2>
			<h3 class="subheading invert space-down" style="margin-top: 10px;">
				<?php the_field('home-prices_tagline'); ?> </h3>
			<?php if( get_field('home-price_bar') ): ?>
				<div class="hidden-xs">
				<img src="<?php the_field('home-price_bar'); ?>" class="img-responsive center img-smaller-70" style="margin-bottom: 10px;">
				</div>
			<?php endif; ?>

			<?php while ( have_rows('home-prices_list') ) : the_row(); ?>
				<div class="col-sm-4" style="margin-bottom: 1em;">
					<img src="<?php the_sub_field('product-price'); ?>" class="img-responsive center img-smaller-80">		
				</div><!--end col-sm-4-->
			<?php endwhile; ?>

		</div>
	</div> <!--end container-->
</section><!--end prices-->
<?php endif; ?>

<section id="contact" class="container-fluid">
	<div class="col-sm-12 call-to-action">

		<h3 class="subheading invert" style="text-transform: uppercase; margin-bottom: 1em;" id="last-show-hook">
			<?php the_field('call_to_action_hook'); ?>
		</h3>
		<?php if( get_field('call_to_action_link') && get_field('call_to_action_link') != 'null' ) : ?>
		<a href="<?php the_field('call_to_action_link'); ?>" class="btn cta-btn" id="last-show-btn"><?php the_field('call_to_action_text'); ?></a>
		<?php endif; ?>			
	</div>

</section>

<a id="top-link"><i class="fa fa-chevron-circle-up fa-3x"></i></a>


<?php get_footer(); ?>