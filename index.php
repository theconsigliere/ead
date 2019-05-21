<?php
/*
Template Name:  EAD front page
*/
?>

<?php get_header(); ?>
<!-- container -->
<div class="container">
    <!-- site-content -->
    <div class="site-content">

        <!-- hero section -->
        <section class="hero">
            <?php echo wp_get_attachment_image(368, 'full'); ?>
            <div class="hero-text">
                <h1>
                    "Quality is never an accident. It is always the result of intelligent effort.""
                </h1>
                <div class="underline"></div>
                <p>Find out more ></p>
            </div>
        </section>


        <div class="watch">
            <div class="inner">

                <h2 class="watch-text">
                    <a href="https://vimeo.com/240454190" target='new'>
                        What Exeter Advanced Dentistry can do for you >
                    </a>
                </h2>

            </div>
        </div>

        <!-- welcome text section -->

        <section class="welcome">
            <div class="inner welcome-text">
                <p><span>At Exeter Advanced Dentistry,</span> a love of quality lies at the heart of everything we do.
                    Whether it’s well-appointed surroundings and generous length appointments, leading techniques and
                    materials or a calm considered approach, we believe our patients deserve the very best. No
                    compromises. So from the moment you step into our practice you can be assured of precision care in
                    an environment like no other delivered by a team who pursue perfection as standard.</p>

            </div>
        </section>

        <!-- homepage grid section -->

        <section class="home-grid inner">

            <div class="image a">
                <?php echo wp_get_attachment_image(12, 'full'); ?>
            </div>


            <div class="box b">
                <div class='home-grid-text'>
                    <h5>Quality</h5>
                    <p>First class service, exceptional care and well-appointed friendly surroundings are intrinsic to
                        the Exeter Advanced Dentistry experience. Whether you’ve been referred to us for specialist care
                        or you’ve been with us for your whole life, every element of your treatment will be taken care
                        of by expert clinicians and therapists whom you can rely on.</p>
                    <button class='news-button' href='<?php echo home_url() ?>/about-us/our-team/'>Read More</button>
                </div>
            </div>


            <div class="box c">
                <div class='home-grid-text'>
                    <h5>Approach</h5>
                    <p>To us, our work is a form of art. Every treatment plan is tailor-made to the unique needs of the
                        patient. But while each treatment plan is different, our approach is always the same. We provide
                        the most advanced care, backed-up by tried and tested research, to deliver a natural healthy
                        finish with no visible trace of work.</p>
                    <button class='news-button' href='<?php echo home_url() ?>/about-us/'>Read More</button>
                </div>
            </div>

            <div class="image d">
                <?php echo wp_get_attachment_image(14, 'full'); ?>
            </div>

            <div class="box blank e"></div>

            <div class="image f">
                <?php echo wp_get_attachment_image(13, 'full'); ?>
            </div>

            <div class="box head-text g">
                <h3>Book an Appointment</h3>
                <div class="black-underline"></div>
            </div>
            <div class="box blank h"></div>

            <div class="box i">
                <div class='home-grid-text'>
                    <h5>The Team</h5>
                    <p>The pursuit of excellence runs through everything we do, so if you’re looking for the finest
                        quality practitioners you can relax in the knowledge that we’ve done the hard work for you.
                        Fully qualified with a range of specialisms and continual industry training to keep abreast of
                        the latest advances in the industry, our clinicians are at the top of their field. At Exeter
                        Advanced Dentistry you’ll always be in the safest of hands.</p>
                    <button class='news-button' href='<?php echo home_url() ?>/about-us/our-team/'>Read More</button>
                </div>
            </div>

        </section>

        <!-- homepage footer section  -->

        <section class="footer-banner">
            <?php echo wp_get_attachment_image(46, 'full'); ?>
            <a href="<?php echo home_url() ?>/contact-us/">
                <div class="hero-text">
                    <h1>
                        Contact Us
                    </h1>
                    <div class="underline"></div>
                    <p>Find out more ></p>
                </div>
            </a>
        </section>



    </div>
    <!-- /site-content -->

</div>
<!-- /container -->

<?php get_footer(); ?>