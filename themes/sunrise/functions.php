<?php
/**
 * sunrise functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sunrise
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sunrise_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on sunrise, use a find and replace
		* to change 'sunrise' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'sunrise', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header' => esc_html__( 'Header Menu', 'sunrise' )
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'sunrise_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'sunrise_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sunrise_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sunrise_content_width', 640 );
}
add_action( 'after_setup_theme', 'sunrise_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function sunrise_scripts() {
	wp_enqueue_style( 'sunrise-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'sunrise-style', 'rtl', 'replace' );

	wp_enqueue_style( 'sunrise-bootstrap-css', get_template_directory_uri() . '/libs/bootstrap/bootstrap.min.css', array(), _S_VERSION, false );
	wp_enqueue_style( 'sunrise-fa-css', get_template_directory_uri() . '/libs/font-awesome/css/fontawesome-all.min.css', array(), _S_VERSION, false );
	wp_enqueue_style( 'sunrise-animate-css', get_template_directory_uri() . '/libs/animate.css/animate.min.css', array(), _S_VERSION, false );
	wp_enqueue_style( 'sunrise-custom-css', get_template_directory_uri() . '/assets/css/custom.min.css', array(), _S_VERSION, false );

	wp_enqueue_script( 'jquery', array(), _S_VERSION, true );
	wp_enqueue_script( 'sunrise-bootstrap-js', get_template_directory_uri() . '/libs/bootstrap/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'sunrise-wowjs', get_template_directory_uri() . '/libs/wow/wow.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'sunrise-custom-js', get_template_directory_uri() . '/assets/js/custom.min.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'sunrise-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sunrise_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Customizer breadcrumb.
 */
require get_template_directory() . '/func-parts/breadcrumb.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/func-parts/widgets.php';
