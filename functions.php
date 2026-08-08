<?php
/**
 * Griya Karuna Theme Functions
 *
 * @package GriyaKaruna
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Setup theme defaults and register support for various WordPress features.
 */
function griyakaruna_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register Navigation Menus
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'griyakaruna' ),
			'footer'  => __( 'Footer Menu', 'griyakaruna' ),
		)
	);

	// Switch default core markup to output valid HTML5.
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

	// Custom Logo Support
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 280,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'griyakaruna_setup' );

/**
 * Enqueue scripts and styles.
 */
function griyakaruna_scripts() {
	// Google Fonts: Outfit & Inter
	wp_enqueue_style(
		'griyakaruna-google-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:ital,wght@0,500;0,600;0,700;1,400;1,600&display=swap',
		array(),
		null
	);

	// Theme Stylesheet
	wp_enqueue_style( 'griyakaruna-style', get_stylesheet_uri(), array(), '1.0.0' );

	// Mobile Navigation Script
	wp_enqueue_script(
		'griyakaruna-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		'1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'griyakaruna_scripts' );

/**
 * Register Custom Post Types for Program & Publikasi
 */
function griyakaruna_register_cpts() {
	// Program CPT
	register_post_type(
		'program',
		array(
			'labels'      => array(
				'name'          => __( 'Program', 'griyakaruna' ),
				'singular_name' => __( 'Program', 'griyakaruna' ),
			),
			'public'      => true,
			'has_archive' => true,
			'rewrite'     => array( 'slug' => 'program' ),
			'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'menu_icon'   => 'dashicons-heart',
		)
	);
}
add_action( 'init', 'griyakaruna_register_cpts' );
