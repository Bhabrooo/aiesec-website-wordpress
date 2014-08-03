<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Xolve Base Theme
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="page-header">
				<h1><?php bloginfo('name'); ?> <small><?php printf( __( 'Search Results for: %s', 'xolve-base-theme' ), '<span>' . get_search_query() . '</span>' ); ?></small></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

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
