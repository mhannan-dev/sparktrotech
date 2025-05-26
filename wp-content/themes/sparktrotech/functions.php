<?php
/**
 * SparkTroTech Theme functions and definitions
 *
 * @package SparkTroTech
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'SPARKTROTECH_VERSION', '1.0.0' );

/**
 * Load theme textdomain for translations
 */
function sparktrotech_load_textdomain() {
    load_theme_textdomain( 'sparktrotech', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'sparktrotech_load_textdomain' );

/**
 * Theme setup
 */
function sparktrotech_theme_setup() {
    // Theme supports
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ] );
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Register navigation menus
    register_nav_menus( [
        'site_top' => esc_html__( 'Site Top', 'sparktrotech' ),
        'site_footer'  => esc_html__( 'Site Footer', 'sparktrotech' ),
        'mobile_device'  => esc_html__( 'Mobile Device', 'sparktrotech' ),
    ] );
}
add_action( 'after_setup_theme', 'sparktrotech_theme_setup' );


/**
 * Enqueue styles and scripts
 */
function sparktrotech_enqueue_assets() {
    // Base style
    wp_enqueue_style( 'sparktrotech-style', get_stylesheet_uri(), [], SPARKTROTECH_VERSION );
}
add_action( 'wp_enqueue_scripts', 'sparktrotech_enqueue_assets' );

/**
 * Include modular theme files
 */
$theme_includes = [
    'inc/custom-functions.php',
    'inc/template-tags.php',
    'inc/theme-customizer.php',
];

foreach ( $theme_includes as $file ) {
    $filepath = get_template_directory() . '/' . $file;
    if ( file_exists( $filepath ) ) {
        require $filepath;
    }
}
