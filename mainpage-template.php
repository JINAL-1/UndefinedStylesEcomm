<?php
/**
* Template name:main page template
*@version 1.0
* description: uses advanced custom field plugin
**/
get_header();
?>

<main>
    <section class="masthead" style="background-image : url(<?php the_field('masthead_image'); ?>);">
        <div>
            <h1><?php the_field('masthead_title');?></h1>
        </div>
    </section>

    <section class="row">
        <article class="col" id="col">
            <img class="image-fluid" src="<?php the_field('image_one');?>" alt="img1" width="400px" height="550px" >
        </article>

        <article class="col" id="col">
        <img class="image-fluid" src="<?php the_field('image_two');?>" alt="img2" width="400px" height="550px">
        </article>
    </section>

    <section class="ours">

        <article class="message">
             <p><?php the_field('message');?></p>
        </article>
        
    </section>
</section>
    
   
   <section class="all-posts">
      <!-- in this section we will just display our posts by category -->
      <?php

      /**Containing an array of posts */
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish'
        );

        /**Contains the Query for args */
        $arr_posts = new WP_Query($args);
        if ( $arr_posts->have_posts() ) :
          while ( $arr_posts>have_posts() ) :
          $arr_posts->the_post();
        ?>

        <article>
            
            <?php
              if ( has_post_thumbnail() ) :
                the_post_thumbnail();
              endif;
            ?>

            <header>
                <h4><?php the_title(); ?></h4>
            </header>

            <div>
                <?php the_excerpt(); ?>
                <?php the_category(); ?>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
        </article>
        <?php
        endwhile;
        endif;
        ?>
        </section>

<!-- filtering post by tag name-->
    <section class="tagfilter" id="tag-main-tmp">
        <article>
            <?php
                $args1 = array(
                    'post_type' => 'post',
                    'tag_name' => 'buisness',
                );

                $the_query = new WP_Query($args1);
                if ($the_query -> have_posts()) : 
                    while($the_query-> have_posts()) : $the_query -> the_post(); 
                ?>

            <div class="buisness">
            <div>
                    <?php if (has_post_thumbnail()) :
                                            the_post_thumbnail(); 
                          endif;
                 ?>
            </div>
            <div>
                <h3>
                    <?php the_title(); ?>
                </h3>
                <?php the_excerpt(); ?>
                <?php the_tags(); ?>
                <a href="<?php the_permalink(); ?>">Read more</a>
            </div>
            </div>
            <?php endwhile; wp_reset_postdata(); else: endif;?>
        </article>
    </section>
  
  <section class="client-reeview-section">
  <article >
  <?php 
    $args2=array('post_type' => 'movies',
                  'posts per page' => '5');

                  $the_query = new WP_Query($args2);

                  if($the_query -> have_posts()) :
                    while($the_query -> have_posts()) : $the_query -> the_post();
  ?>

  <div>
  <?php if(has_post_thumbnail()): ?>
      <img src="<?php the_post_thumbnail_url('largest');?>" alt="client img">
      <?php endif; ?>
  </div>

  <div>
  <h3><?php the_title(); ?></h3>
  <?php  the_excerpt(); ?>
  <?php  the_category(); ?>

    <a href="<?php the_permalink();?>">Read More</a>
  </div>

  <?php
      endwhile;
      wp_reset_postdata();
    else:
    endif;
    ?>
  </main>
<?php
  get_footer();
?>

