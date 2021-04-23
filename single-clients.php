<?php
/**
 * Template Name: Clients Template
 * Template Post Type: clients
 */
get_header();
?>

<main class="clients-main">
    <section>
            <div>
            <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('largest');?>" alt="client img">
            <?php endif;?>
            </div>

            <div>
            <?php if(have_posts()):while(have_posts()):the_post();?>
                   
                   <h1><?php the_title(); ?></h1>
                   <?php the_content(); ?>
                   <?php endwhile; endif;
                   ?>
            </div>
    </section>
</main>
            
<?php
  get_footer();
?>