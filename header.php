<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zero
 */
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('title'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="masthead" class="site-header">
			<div class="header-content">
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
				</div><!-- .site-branding -->
				<nav id="site-navigation" class="main-navigation">
					<div class="nav-menu">
						<?php wp_nav_menu(array(
							'theme_location' => 'main_menu',
							)
						); ?>
					</div><!-- .nav-menu -->
				</nav><!-- #site-navigation -->
			</div><!-- .header-content -->
		</header><!-- #masthead -->
		<div id="content" class="site-content">