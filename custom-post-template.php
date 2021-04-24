<?php
/** 
 * Template Name: Custom Post Template
    * Template Post Type: post
    */ 
    get_header();
    ?>

<!-- simple template that displays all the posts present-->
    <main>
       <div class="post-t1">
            <?php 
            while (have_posts()) : 
                the_post();
                get_template_part('template-parts/content/content-page');

            
            
            endwhile;
        ?>
        </div>

           <article class="shortcode">
            <?php echo do_shortcode("[greeting]"); ?>
            </article>
    </main>
    <?php get_footer(); ?>