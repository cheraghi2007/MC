<?php
function add_theme_scripts() {

    /** REGISTER Custom Script **/
    wp_register_script( 'script', THEME_DIR_URI . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'script' );
};

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


/** DEFER JS FILES **/
function defer_parsing_of_js($url) {
    if (is_admin()) return $url;
    if (false === strpos($url, '.js')) return $url;
    if (strpos($url, 'jquery.js')) return $url;
    return str_replace(' src', ' defer src', $url);
}
add_filter('script_loader_tag', 'defer_parsing_of_js', 10);