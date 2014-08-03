<?php
/**
 * The main template file.
 *
 * See http://codex.wordpress.org/Template_Hierarchy for more details
 *
 * @package Foxtart Base Theme
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="page-header">
				<h1><?php bloginfo('name'); ?> <small><?php is_home() ? bloginfo('description') : wp_title(''); ?></small></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php xolve_base_theme_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

			</div> <!-- /.col-sm-8 : main content area -->
			<div class="col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->

<?php get_footer(); ?>
