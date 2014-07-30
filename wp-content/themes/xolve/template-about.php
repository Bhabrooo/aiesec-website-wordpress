<?php
/**
 * Template Name: About
 *
 *
 */

get_header(); ?>


<section id="about-1" class="row">
	<div id="about-2" style="background: url(<?php the_field('hero_about_background'); ?>)";>
	</div>

	<div class="col-sm-12 about-welcome">
		<div class="col-sm-6 col-xs-12 about-left">
			<h1 class="heading about-heading">	<?php the_field('hero_banner_text'); ?></h1>
				
		</div>

				<div class="col-sm-1 hidden-xs" style="margin-top: 15px;">
					<div class="blue-border"></div>				
				</div> 
								

				<div class="col-sm-4 col-xs-12 about-right">
					<span> <strong>Xolve</strong> /zôlve, zälv/ noun</span>
					<p><?php the_field('hero_right_text'); ?></p>
				</div>

				<div class="col-sm-1 hidden-xs" style="margin-top: 15px;">
					<div class="blue-border"></div>
				</div>  
		</div>	

</section><!--end about-->

<section id="history" class="container-fluid" data-autoheight="false">
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="vspacer3"></div>
				<h2 class="heading heading-top space-down" id="history-header">History</h2>					
				<p id="history_text"><?php the_field('history'); ?></p>	
		</div><!--col-sm-10-->
	</div> <!--end container-->
</section><!--end history-->

	<?php if( have_rows('services_complete') ): ?>

<section id="what-we-believe-in" class="container-fluid" data-autoheight="false">
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="vspacer3"></div>
			<h2 class="heading heading-top space-down">What we believe in</h2>

			<?php while ( have_rows('services_complete') ) : the_row(); ?>
			<div class="col-sm-4 desc">
				<img src="<?php the_sub_field('sc_image'); ?>" class="img-responsive center ">
				<h3 class="heading"><?php the_sub_field('sc_label'); ?></h3>
				<p class="desc space-up"><?php the_sub_field('sc_description'); ?>
				</p>
			</div><!--end col-sm-4-->
			<?php endwhile; ?>

		</div>
	</div> <!--end container-->
</section><!--end services-->
<?php endif; ?>
	

<section id="skillset" class="container-fluid" data-autoheight="true">
		<div class="container">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="vspacer3"></div>
				<?php if( have_rows('skills') ): ?>
				<h2 class="heading heading-top space-down">Skillset</h2>

				<?php 
		
				$skills = get_field('skills');
					$name= array_column($skills, 'skill_name');
					$name = json_encode($name);
					$name_ = $name;
					$name = htmlspecialchars( $name, ENT_QUOTES );

				$percent = array_column($skills, 'skill_percentage');	
					$percent = json_encode($percent);
					$percent_ = $percent;
					$percent = htmlspecialchars( $percent, ENT_QUOTES );
				?>


		 		<div class="chart-box" data-name="<?php echo $name; ?>" data-percent="<?php echo $percent; ?>"></div> 

		 		<div class="skillset-list" style="display:none">
		 			<?php 		 			
		 				$n = json_decode($name_);
		 				$p = json_decode($percent_);

		 				for ($x = 0; $x<sizeof($n); $x++){
		 			 ?>
		 				 <div class="col-xs-9" style="font-size: 1.4em;"> <?php echo $n[$x]; ?> </div>
		 				 <div class="col-xs-3" style="font-size: 1.4em;"> <?php echo $p[$x]; ?> </div>
		 			
		 			<?php } ?>		 			

		 			

				</div>

				<script type="text/javascript">
				var x = $('.chart-box').data( 'name');
				var y = $('.chart-box').data( 'percent').map(Number);

				</script>
			<?php endif; ?>
				
				
			</div><!--col-sm-10-->
		</div> <!--end container-->
	</section><!--end services-->

	<section id="contact-invert" class="container-fluid">
		<div class="col-sm-12 call-to-action">
			<h3 class="subheading blue" style="text-transform: uppercase; margin-bottom: 1em;" id="last-show-hook">
			<?php the_field('call_to_action_hook'); ?>
		    </h3>

		<?php if( get_field('call_to_action_link') && get_field('call_to_action_link') != 'null' ) : ?>
		<a href="<?php the_field('call_to_action_link'); ?>" class="btn cta-btn" id="last-show-btn"><?php the_field('call_to_action_text'); ?></a>
		<?php endif; ?>


		</div>	
				
	</section>

	<a id="top-link-color"><i class="fa fa-chevron-circle-up fa-3x"></i></a>



<?php get_footer(); ?>