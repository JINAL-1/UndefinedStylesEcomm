<?php
/**
 * Template Name: Custom Post Template v2
 *  Template Post Type: post
 */ 
get_header();
?>

<!-- get custom header using get_header('custom1'); -->

<main class="post-main-v2">

<section>
<!-- adding wrapper -->
<?php if(have_posts()) : while(have_posts()) : the_post();?>
       
        <div class="post-wrapper">
        <?php the_post_thumbnail();?>

        <div>
        <h2 ><?php the_title(); ?><h2>



 <!--   Prints HTML with meta information for the current post-date/time and author. -->

<!-- could even display content using the_content(); -->
<?php
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
    $time_string = $time_string;
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time_string2 = ', last updated on ';
        $time_string2 .= '<time class="updated" datetime="%1$s">%2$s</time>';
    }

    $time_string = sprintf( $time_string,
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() )
    );
    $time_string2 = sprintf( $time_string2,
        esc_attr( get_the_modified_date( 'c' ) ),
        esc_html( get_the_modified_date() )
    );

    $posted_on = sprintf(
        _x( 'Posted on %s', 'post date' ),
        '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'.$time_string2
    );

    $byline = sprintf(
        _x( 'by %s', 'post author'),
        '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
    );

    echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';


endwhile; 

        else:
            ?> 

            <p> Sorry Nothing is Returned</p>

<?php endif; ?>
     


    </div><!--title-->
    <?php get_sidebar(); ?>
</div><!--thumbnail-->
</section>
</main>
<?php get_footer(); ?>

