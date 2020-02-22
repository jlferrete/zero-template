<?php
/**
 * Template part
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 * 
 * @package Zero
 */
 ?>

<article class="post">
    <header class="entry-header">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
            <h2 class="entry-title"><?php the_title(); ?></h2> 
        </a>
    </header> <!-- .entry-header -->
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div> <!-- .entry-content -->
</article> <!-- .post -->