<?php
/**
 * Functions and declarations for Tiger Hi-Line
 *
 * @package WordPress
 * @subpackage Hi-Line
 * @since Hi-Line 1.0
 */

if ( ! function_exists( 'hiline_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Hi-Line 1.0
 */

function hiline_setup() {

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
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// Change excerpt more text
	function fix_excerpt_more($more) {
		$more = ' …';
		return $more;
	}
	add_filter('excerpt_more', 'fix_excerpt_more');

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => 'Primary Menu',
		'secondary' => 'Category Links Menu',
		'social'    => 'Social Links Menu',
	) );

	// Hide the admin bar for all users
	show_admin_bar( false );

	// Removes Category:, Tag:, Author:, etc.
	add_filter( 'get_the_archive_title', function ($title) {
	    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
		} elseif ( is_post_type_archive() ) {
			$title = post_type_archive_title( '', false );
        } elseif ( is_author() ) {
            $title = get_the_author();
        }

	    return $title;
	});

	// Adds special class to first post in each query.
	function hiline_first_post_class( $classes ) {
		global $wp_query;
		if ( 0 == $wp_query->current_post )
			$classes[] = 'first';

			return $classes;
	}
	add_action( 'post_class', 'hiline_first_post_class' );

}
endif; // hiline_setup
add_action( 'after_setup_theme', 'hiline_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since Hi-Line 1.0
 */
function hiline_scripts() {

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'hiline-style', get_stylesheet_uri() );

	// Load FitVids.js
	wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), true, false );

	// Load main scripts
	wp_enqueue_script( 'hiline-script', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), true, true );

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'hiline-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700italic,700,400italic,300,300italic|Roboto+Condensed:400,300,300italic,400italic,700,700italic|Noto+Serif:400,400italic,700,700italic', array(), null );

}
add_action( 'wp_enqueue_scripts', 'hiline_scripts' );

/**
 * Custom template tags for this theme.
 *
 * @since Hi-Line 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom Post Types
 *
 * @since Hi-Line 1.0
 */
require get_template_directory() . '/inc/post-types.php';