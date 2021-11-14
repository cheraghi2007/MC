<?php
function mc_setup() {
    load_theme_textdomain( 'mc' );

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    
    register_nav_menu('main-menu', 'Desktop Menu');
    register_nav_menu('mob-menu', 'Mobile Menu');

    //add_image_size('shop-product', 300, 300, true  );
}
add_action( 'after_setup_theme', 'mc_setup' );