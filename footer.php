<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zero
 */
 ?>

		</div><!-- #content -->
		<footer id="colophon" class="site-footer">
			<div class="wrap">
				<div class="site-info">
					<div class="footer-creds">
						<p>&copy; <?php echo date('Y'); ?> &middot; <?php bloginfo('Name'); ?></p>
					</div><!-- .footer creds -->
				</div><!-- .site-info -->
				<nav id="site-navigation" class="secondary-navigation">
					<?php wp_nav_menu(array(
						'theme_location' => 'social_menu',
						)
					); ?>
				</nav><!-- #site-navigation -->
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
		<?php wp_footer(); ?>
	</body>
</html>