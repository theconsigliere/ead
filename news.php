<?php
/*
Template Name:  EAD News
*/
?>


<?php get_header(); ?>
<!-- container -->
<div class="container">	
	<!-- site-content -->
	<div class="site-content">

	<!-- hero section -->
	<section class="template-hero">
		<?php echo wp_get_attachment_image(102, 'full'); ?>
		
	</section>
    <section class="welcome">
		<div class="inner">

            <h1 class='inner'><?php the_title(); ?></h1>


        
            <?php
            $args = array( 'numberposts' => 1000 );

            $lastposts = get_posts( $args );

            foreach($lastposts as $post) : setup_postdata($post); ?>
            <a href="<?php the_permalink(); ?>">
            <div class="news-item">
            <?php the_post_thumbnail( 'full' ); ?>
            <div class="news-item-text">
            <h4><?php the_title(); ?></h4>
            <!-- only output first 55 words -->
            <p><?php echo wp_trim_words( get_field('template_content'), 55 ); ?></p>
            <button class='news-button'>Read More</button>
            </div>
    

            </div></a>

            <?php endforeach; ?>
        
     </section>
        </div>




</div>
<!-- /site-content -->

</div>
<!-- /container -->

<?php get_footer(); ?>   