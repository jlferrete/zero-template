<?php
/**
 * WordPress Theme functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package WordPress
* @subpackage cero
* @since 1.0
* @version 1.0
 */
 ?>

<?php

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

// Enqueue Scripts and Styles
add_action('wp_enqueue_scripts','cero_scripts_styles');
if(!function_exists('cero_scripts_styles')):
	function cero_scripts_styles() {
		wp_enqueue_style('cero-main-styles', get_stylesheet_uri(), array('cero-google-fonts'), '1.0', 'all');
		wp_enqueue_style('cero-google-fonts', '//fonts.googleapis.com/css?family=Material+Icons|Nobile:400,700', array(), '1.0', 'all');
	}
endif;


?>