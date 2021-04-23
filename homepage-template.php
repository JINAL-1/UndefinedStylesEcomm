<?php
/** Template Name: Homepage Template */

//the below php hook calls the header template
get_header();
?>

<!--adding main page content -->
<main>
<!--similar to getting content-->
    <?php 
    while(have_posts()) : 
        the_post();
        get_template_part('template-parts/content/content-page');
    endwhile;
    ?>
</main>

<?php get_sidebar();?>
<?php get_footer();?>