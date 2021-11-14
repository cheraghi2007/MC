<?php

define("THEME_DIR_URI", get_template_directory_uri());
define("THEME_DIR", get_template_directory());

remove_action('shutdown', 'wp_ob_end_flush_all', 1 );
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('template_redirect', 'rest_output_link_header', 11, 0 );
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

get_template_part("inc/wp_enqueue_styles");
get_template_part("inc/wp_enqueue_scripts");
get_template_part("inc/after_setup_theme");
get_template_part("inc/post_type");
get_template_part("inc/custom-functions");
get_template_part("inc/breadcrumb");