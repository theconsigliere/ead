<?php
/*
Template Name:  EAD template
*/
?>

<?php get_header(); ?>
<!-- container -->
<div class="container">
    <!-- site-content -->
    <div class="site-content">

        <!-- hero section -->
        <section class="template-hero">
            <?php $image = get_field('hero_banner'); $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $image ) {
            echo wp_get_attachment_image( $image, $size ); } ?>

        </section>

        <!-- welcome text section -->

        <section class="welcome">
            <div class="inner">

                <?php the_field('template_content'); ?>

                <!-- show video if you have one -->


                <?php 
                $video = get_field('video'); if($video) { 
                    echo ' <div class="embed-container-parent"> <div class="embed-container">' ?>
                <?php the_field('video'); ?>
                <?php '</div> </div>'; } ?>

            </div>
        </section>

        <!-- page links -->



        <div class="inner page-link-group">
            <?php

            // check if the repeater field has rows of data
            if( have_rows('page_link_repeater') ):

                // loop through the rows of data
                while ( have_rows('page_link_repeater') ) : the_row(); ?>

            <div class="column-item">
                <?php 

                        $link = get_sub_field('page_links');
                        

                        if( $link ): ?>
                <div class="page-child">
                    <a class="button" href="<?php echo $link['url']; ?>">
                        <h4>See our <?php echo $link['title']; ?> treatments ></h4>
                    </a>
                </div>
                <?php endif; ?>

            </div>


            <?php endwhile; endif; ?>

        </div>




        <!-- 2 column repeater -->

        <?php

    if( have_rows('2_column') ):
        echo '<section class="welcome"> <div class="inner column-group">';

        // loop through the rows of data
        while ( have_rows('2_column') ) : the_row(); ?>
        <div class="column-item">

            <?php the_sub_field('column_content'); ?>

        </div>
        <?php  endwhile; else : endif; ?>









        <!-- homepage grid section -->

        <section class="template-grid inner">

            <div class="image a">
                <?php $image = get_field('grid_image_1'); $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

            </div>

            <div class="box head-text b">
                <h3>Book an Appointment</h3>
                <div class="black-underline"></div>
            </div>


            <div class="box-quote c">
                <!-- add in grid text -->
                <h4><?php the_field('grid_text'); ?></h4>
            </div>

            <div class="image template-d">
                <?php $image = get_field('grid_image_2'); $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

            </div>


        </section>
    </div>

    <!-- homepage footer section  -->

    <section class="footer-banner">
        <?php $image = get_field('footer_banner'); $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $image ) {
            echo wp_get_attachment_image( $image, $size ); } ?>
    </section>



</div>
<!-- /site-content -->

</div>
<!-- /container -->

<?php get_footer(); ?>