<?php
/**
 * Xolve Base Theme functions and definitions
 *
 * @package Xolve Base Theme
 */


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'xolve_base_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function xolve_base_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Xolve Base Theme, use a find and replace
	 * to change 'xolve-base-theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'xolve-base-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'xolve-base-theme' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'xolve_base_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
endif; // xolve_base_theme_setup
add_action( 'after_setup_theme', 'xolve_base_theme_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function xolve_base_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'xolve-base-theme' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'xolve_base_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function xolve_base_theme_scripts() {

	wp_enqueue_script( 'xolve-base-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Load jQuery
	wp_enqueue_script( 'xolve-jquery', '//code.jquery.com/jquery-1.10.2.min.js', array(), '1.10.2' );
	wp_enqueue_script( 'xolve-jquery-easing', '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array(), '1.3' );
	wp_enqueue_script( 'xolve-jquery-ui', '//code.jquery.com/ui/1.9.2/jquery-ui.min.js', array(), '1.9.2' );
	wp_enqueue_script('xolve-response', '//airve.github.io/js/response/response.min.js', array('jquery'), false, true);
	wp_enqueue_script( 'xolve-scrollTo-js', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array(), '1.0' );

	// Load bootstrap stylesheet and javascript
	wp_enqueue_style( 'xolve-bootstrap-css', '//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css', array(), '3.1' );
	wp_enqueue_script( 'xolve-bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js', array(), '3.1' );

	wp_enqueue_style( 'xolve-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3' );


	// Dynamic Webfont Loader
	wp_enqueue_script( 'xolve-gwebfontloader-js', '//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js', array(), '1.4.7' );
	wp_enqueue_script( 'xolve-jwebfont-js', get_template_directory_uri() . '/js/jquery.jwebfont.js', array(), '1.0' );

	wp_enqueue_style( 'xolve-normalize-style', '//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css' );

	wp_enqueue_script( 'xolve-modernizr-js', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js', array(), '2.7.1' );
	wp_enqueue_style( 'xolve-base-theme-style', get_stylesheet_uri() );

	// Custom JS Files
	wp_enqueue_script( 'xolve-main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0' );

	if ( is_page_template( 'template-home.php' )  ) 
	{
		wp_enqueue_script( 'xolve-index-scroll-js', get_template_directory_uri() . '/js/index-scroll.js', array(), '1.0' );
	} 
	else if (is_page_template( 'template-about.php' ) ) 
	{
		wp_enqueue_script( 'xolve-highcharts', '//code.highcharts.com/highcharts.js', array(), '2.2.4' ); 
		wp_enqueue_script( 'xolve-highcharts-exporting', '//code.highcharts.com/modules/exporting.js' );

		wp_enqueue_script( 'xolve-charts-js', get_template_directory_uri() . '/js/charts.js', array(), '1.0' );
		wp_enqueue_script( 'xolve-charts-theme-js', get_template_directory_uri() . '/js/xolve-theme.js', array(), '1.0' );
			
		wp_enqueue_script( 'xolve-not-index-scroll-js', get_template_directory_uri() . '/js/not-index-scroll.js', array(), '1.0' ); 
	} 
	else 
	{

		wp_enqueue_script( 'xolve-not-index-scroll-js', get_template_directory_uri() . '/js/not-index-scroll.js', array(), '1.0' ); 
	}

}
add_action( 'wp_enqueue_scripts', 'xolve_base_theme_scripts' );


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function my_acf_options_page_settings( $settings )
{
	$settings['title'] = 'Global';
	$settings['pages'] = array('Header');
 
	return $settings;
}
 
add_filter('acf/options_page/settings', 'my_acf_options_page_settings');


