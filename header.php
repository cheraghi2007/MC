<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="author" content="Mohammad Cheraghi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header">
        <div class="container flex-row-space-between-center">
            <i class="fa fa-bars"></i>   
            <?php wp_nav_menu(
                array(
                    'theme_location'    => 'main-menu',
                    'menu'              => 'Primery',
                    'echo'              => true,
                    'fallback_cb'       => 'wp_page_menu',
                    'items_wrap'        => '<ul class="main-menu">%3$s</ul>',
                    'depth'             => '3',
                    'walker'            => '',
                )); ?>

            <a href="tel:<?php the_field('top_phone_number','option'); ?>" id="top-phone">
                
                <i class="fa fa-phone"></i>
                <?php the_field('top_phone_number','option'); ?>
            </a>
        </div>
        <div class="back-black"></div>
    </header>