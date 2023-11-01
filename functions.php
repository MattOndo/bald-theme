<?php

/**
 * Bald Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @since 1.0.0
 * 
 * @package Bald_Theme
 */

if ( ! defined( 'BALD_THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'BALD_THEME_VERSION', '1.0.0' );
}

function bald_theme_setup() {

  require_once( get_template_directory() . '/vendor/autoload.php' );
  \Carbon_Fields\Carbon_Fields::boot();

	load_theme_textdomain( 'bald-theme', get_template_directory() . '/languages' );
	add_theme_support( 'html5' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	
	do_action( 'bald_theme_setup' );

}
add_action( 'after_setup_theme', 'bald_theme_setup');

/**
 * Theme Options
 * 
 * @since 1.0.0
 */

require_once( get_template_directory() . '/includes/admin-options.php' );
require_once( get_template_directory() . '/includes/disable-gutenberg-editor.php' );

/**
 * Disable Gutenberg blocks
 * 
 * @since 1.0.0
 * 
 */
require_once( get_template_directory() . '/includes/disable-gutenberg-blocks.php' );

/**
 * Enqueue scripts and styles.
 * 
 * @since 1.0.0
 */
function bald_theme_admin_style() {
  wp_register_style( 'bald-theme-admin', get_template_directory_uri() . '/styles/styles.css', false, null );
  wp_enqueue_style( 'bald-theme-admin' );
}
add_action( 'admin_enqueue_scripts', 'bald_theme_admin_style' );

/**
 * Register custom blocks
 * 
 * @since 1.0.0
 */
if (is_plugin_active('advanced-custom-fields-pro/acf.php')) {
	require_once( get_template_directory() . '/includes/acf/register-acf-blocks.php' );
	require_once( get_template_directory() . '/includes/acf/register-acf-field-groups.php' );
}

/**
 * Add "Contain Content" toggle to columns
 * 
 * @since 1.0.0
 */
if (is_plugin_active('wp-graphql/wp-graphql.php')) {
	require_once( get_template_directory() . '/utils/core-columns-attribute/core-columns-attribute.php' );
}