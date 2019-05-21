<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_template_part('quantcast'); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="loading">
        <img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="">

    </div>

    <header id="header" class="header">

        <div class="header-top">

            <div class="inner site-branding ">

                <!-- menu logo -->
                <div class='icon menu-button'>
                    <img src="<?php bloginfo('template_directory'); ?>/img/menu.svg" alt="" class="hamburger">
                    <span>Menu</span>
                </div>

                <!-- logo -->
                <a href="<?php echo home_url() ?>" class='ead-logo'>
                    <img class="logo ead" src="<?php bloginfo('template_directory'); ?>/img/logo.svg" border="0"
                        alt=""></a>

                <!-- contact -->
                <div class="icon">
                    <a href="<?php echo home_url() ?>/contact-us/" class='phone-icon'>
                        <img src="<?php bloginfo('template_directory'); ?>/img/phone.svg" alt="" class="phone">
                        <span>Contact</span>
                    </a>
                </div>

            </div>

        </div><!-- site branding -->
        <div class="full-dropdown">
            <div class="header-drop-down">
                <div class="inner dropdown-inner">

                    <div class="dropdown-left">
                        <?php wp_nav_menu(array('theme_location' => 'about', 'menu_class' => 'drop-down-list')); ?>

                        <?php wp_nav_menu(array('theme_location' => 'referrals', 'menu_class' => 'drop-down-list')); ?>
                    </div>
                    <div class="dropdown-middle">
                        <?php wp_nav_menu(array('theme_location' => 'treatments', 'menu_class' => 'drop-down-list')); ?>

                    </div>
                    <div class="dropdown-right">
                        <?php wp_nav_menu(array('theme_location' => 'fees', 'menu_class' => 'drop-down-list')); ?>
                        <?php wp_nav_menu(array('theme_location' => 'extras', 'menu_class' => 'drop-down-list')); ?>
                    </div>


                </div> <!-- inner -->
            </div>
        </div><!-- full-dropdown -->
    </header>