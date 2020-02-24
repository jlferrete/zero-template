<?php
/**
 * Theme functions
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 * 
 * @package Zero
 */
 ?>

 <?php if(get_next_posts_link() || get_previous_posts_link() ):  ?>

 <div class="pagination">
    <nav>
        <?php 
            echo paginate_links(
                array(
                    'prev_text' => 'Anteriores',
                    'next_text' => 'Siguientes',
                )
            );
        ?>
    </nav>
 </div>

<?php endif; ?>