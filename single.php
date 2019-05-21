<?php get_header(); ?>
<!-- container -->
<div class="container">
    <div class="site-content">


        <!-- hero section -->
        <section class="template-hero">
            <?php $image = get_field('hero_banner'); $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $image ) {
            echo wp_get_attachment_image( $image, $size ); } ?>

        </section>

        <!-- 	post content -->
        <section class="welcome">
            <div class="inner">

                <h1><?php the_title(); ?></h1>
                <h6>Written by Luke Whitaker</h6>

            </div>



            <!-- FLEXIBLE CONTENT -->
            <?php

                // check if the flexible content field has rows of data
               if( have_rows('content_row') ):

                // loop through the rows of data
               while ( have_rows('content_row') ) : the_row();

             if( get_row_layout() == 'text_content' ): ?>

            <div class="inner post_space">
                <p><?php the_sub_field('text_input'); ?></p>
            </div>


            <?php elseif( get_row_layout() == 'image_content' ): 

              if( get_sub_field('imagez') ): ?>

            <div class="inner post_space  post_flex">
                <img class='post_img' src="<?php the_sub_field('imagez'); ?>" />
            </div>


            <?php endif; endif; endwhile; else :  // no layouts found  
            endif; ?>


        </section>

        <!-- BUTTON -->
        <div class="inner">
            <button class='news-button' href='<?php echo home_url() ?>/contact-us/'>Contact us today</button>
        </div>


        <div class="post-explore-section inner">
            <h2>See more news items</h2>

            <div class="post-explore">

                <?php
  // organise our options into a data object
  $args = array(
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order'   => 'DESC',
    'suppress_filters' => true,
    // here we make sure to exclude the current 
    // post we’re looking at
    'post__not_in' => array($post->ID)
  );
  // a variable with our query and options
  $query = new WP_Query( $args );
  // do a loop with our new query code 
  if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
                <!-- code as we’re used to already! -->
                <div class="news-explore-item">
                    <a href="<?php the_permalink(); ?>">
                        <!-- here we create a 1x1 aspect ratio box -->

                        <!-- our inner element takes up the full width and height -->
                        <?php the_post_thumbnail( 'thumbmnail' ); ?>
                        <h5><?php the_title(); ?></h5>


                    </a>
                </div>
                <?php endwhile; endif; ?>



            </div>
        </div>



    </div>
</div>
<!-- container -->
<?php get_footer(); ?>