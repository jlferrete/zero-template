<?php
/**
 * WordPress Theme functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package WordPress
* @subpackage zero
* @since 1.0
* @version 1.0
 */
 ?>

<?php

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

// Enqueue Scripts and Styles
add_action('wp_enqueue_scripts','zero_scripts_styles');
if(!function_exists('zero_scripts_styles')):
	function zero_scripts_styles() {
		wp_enqueue_style('zero-main-styles', get_stylesheet_uri(), array('zero-google-fonts'), '1.0', 'all');
		wp_enqueue_style('zero-google-fonts', '//fonts.googleapis.com/css?family=Material+Icons|Nobile:400,700', array(), '1.0', 'all');
	}
endif;

// Register menus
add_action('init','zero_nav_menus');
function zero_nav_menus() {
	register_nav_menus( array(
		'main_menu' => 'Menú Principal',
		'social_menu' => 'Menú social',
		)
	);
}

// Register widget areas
add_action('widgets_init', 'zero_register_sidebar');
function zero_register_sidebar() {
	register_sidebar( array(
		'name' 			=> ('After Entry'),
		'description' 	=> ('Widget area para nuestro tema'),
		'id' 			=> 'after-entry',
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</article>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
		) 
	);	
}


?>