<?php
/**
 * The main template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 *
 * @package Zero
 */
 ?>
 
<?php get_header(); ?>
<div id="primary" class="content-area">
	<section class="posts-wrapper">
	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post();?>
			<?php get_template_part( 'template-parts/content-main', get_post_type() ); ?>
		<?php endwhile; ?>
	<?php endif; ?>
	</section><!-- .posts-wrapper -->
	<?php get_template_part( 'template-parts/pagination', get_post_type() ); ?>
</div><!-- #primary -->
<?php get_footer(); ?>