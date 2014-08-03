<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Xolve Base Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom"<?php body_class(); ?>>
<div id="body-wrap">
	<nav class="navbar navbar-custom navbar-fixed-top index" role="navigation">
  		<div class="container">
  			<div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <?php $image = get_field('header_logo', 'option');

              if ( $image ):

              ?>
              <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php the_field('header_logo', 'option'); ?>" class="index-img-header img-responsive"></a>
          	<?php endif; ?>

          </div>
    		<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
	          <ul class="nav navbar-nav" >
				 <?php

					$defaults = array(
						'theme_location'  => '',
						'menu'            => 'primary',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '%3$s',
						'depth'           => 0,
						'walker'          => ''
					);

				wp_nav_menu( $defaults ); ?>
	          </ul>
    		</div>
        <!-- /.navbar-collapse -->
  		</div>
	</nav>

	<?php do_action( 'before' ); ?>