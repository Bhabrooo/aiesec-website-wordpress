<?php
/**
 * Foxtart Base Theme functions and definitions
 *
 * @package Foxtart Base Theme
 */


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'foxtart_base_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function foxtart_base_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on foxtart Base Theme, use a find and replace
	 * to change 'foxtart-base-theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'foxtart-base-theme', get_template_directory() . '/languages' );

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
		'primary' => __( 'Primary Menu', 'foxtart-base-theme' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'foxtart_base_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
endif; // foxtart_base_theme_setup
add_action( 'after_setup_theme', 'foxtart_base_theme_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function foxtart_base_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'foxtart-base-theme' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'foxtart_base_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function foxtart_base_theme_scripts() {

	wp_enqueue_script( 'foxtart-base-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Load jQuery
	wp_enqueue_script( 'foxtart-jquery', get_template_directory_uri() . '/js/jquery-1.11.0.js', array(), '1.11.0', true );
	wp_enqueue_script( 'foxtart-jquery-easing', '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array(), '1.3', true );
	wp_enqueue_script( 'foxtart-jquery-ui', '//code.jquery.com/ui/1.9.2/jquery-ui.min.js', array(), '1.9.2', true );
	wp_enqueue_script( 'foxtart-response', '//airve.github.io/js/response/response.min.js', array('jquery'), false, true);
	wp_enqueue_script( 'foxtart-scrollTo-js', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array(), '1.4.13', true );

	// Load bootstrap stylesheet and javascript
	wp_enqueue_style( 'foxtart-bootstrap-css', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css', array(), '3.1.1' );
	wp_enqueue_script( 'foxtart-bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array(), '3.1.1', true );
	wp_enqueue_style( 'foxtart-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css', array(), '4.1.0' );
	wp_enqueue_script( 'foxtart-bootstrap-validation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array(), '1.4.11', true );

	//Other Theme bases
	wp_enqueue_script( 'foxtart-classie', get_template_directory_uri() . '/js/classie.js', array(), '1.0', true );
	wp_enqueue_script( 'foxtart-customizer', get_template_directory_uri() . '/js/customizer.js', array(), '1.0', true );
	wp_enqueue_script( 'foxtart-animated-header', get_template_directory_uri() . '/js/cbpAnimatedHeader.js', array(), '1.0' , true);
	wp_enqueue_script( 'foxtart-animated-header-min', get_template_directory_uri() . '/js/cbpAnimatedHeader.min.js', array(), '1.0' );
	
	wp_enqueue_style( 'foxtart-normalize-style', '//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css' );
	wp_enqueue_script( 'foxtart-modernizr-js', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js', array(), '2.7.1' , true);

	// Dynamic Webfont Loader
	wp_enqueue_script( 'foxtart-gwebfontloader-js', '//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js', array(), '1.4.7', true);
	wp_enqueue_script( 'foxtart-jwebfont-js', get_template_directory_uri() . '/js/jquery.jwebfont.js', array(), '1.0', true );

	wp_enqueue_style( 'foxtart-base-theme-style', get_stylesheet_uri() );

	// Custom JS Files
	wp_enqueue_script( 'foxtart-main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true );


}
add_action( 'wp_enqueue_scripts', 'foxtart_base_theme_scripts' );


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
	$settings['pages'] = array('Header', 'Footer');
 
	return $settings;
}
 
add_filter('acf/options_page/settings', 'my_acf_options_page_settings');

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');