<?php
/*
Template Name:  EAD Team template
*/
?>

<?php get_header(); ?>
<!-- container -->
<div class="container">
    <!-- site-content -->
    <div class="site-content team-top">

        <!-- hero section -->
        <!-- <section class="template-hero">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2525.6255554041963!2d-3.5289940842585827!3d50.72688557951452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486da43e50a4c9b9%3A0x1ef61741d381ec38!2sExeter+Advanced+Dentistry!5e0!3m2!1sen!2suk!4v1555064425574!5m2!1sen!2suk" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section> -->



        <section class="welcome">

            <h1 class='inner'><?php single_post_title(); ?></h1>

            <div class="inner column-group">


                <?php

            // check if the repeater field has rows of data
            if( have_rows('two_col') ):

                // loop through the rows of data
                while ( have_rows('two_col') ) : the_row(); 

                    echo '<div class="headshot-item">'; ?><div class='headshot'>

                    <img src="<?php the_sub_field('headshot'); ?>" alt=""></div>


                <?php echo '<div class="text">';
                   
                   the_sub_field('col_content'); 

                   echo '</div>'; echo '</div>';
                   
              endwhile;  else : endif;  ?>

            </div>
        </section>



        <!-- homepage footer section  -->

        <section class="footer-banner">
            <?php $image = get_field('footer_banner'); $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $image ) {  echo wp_get_attachment_image( $image, $size ); } ?>
        </section>



    </div>
    <!-- /site-content -->

</div>
<!-- /container -->

<?php get_footer(); ?>