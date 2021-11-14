<?php
// ENQUEUE STYLES
function enqueue_styles() {

    /** REGISTER Style.css **/
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    /** REGISTER main.css **/
    wp_enqueue_style('main', THEME_DIR_URI . '/assets/css/main.css', array(), '1.0.0', 'all' );
    
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );