<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Xolve Base Theme
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="page-header">
				<h1><?php bloginfo('name'); ?> <small><?php is_home() ? bloginfo('description') : the_title(); ?></small></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) : ?>
							<hr />
					<?php comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</div> <!-- /.col-sm-8 : main content area -->
			<div class="col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->

<?php get_footer(); ?>
