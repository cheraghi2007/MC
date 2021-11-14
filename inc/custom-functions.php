<?php

/****************************************************
UPLOAD SVG AND WEBP
****************************************************/

function add_svg_to_uploads($svg_file_type){

    $new_filetypes = array();

    $new_filetypes['svg'] = 'image/svg+xml';

    $new_filetypes['webp'] = 'image/webp';

    $svg_file_type = array_merge($svg_file_type, $new_filetypes );



    return $svg_file_type;

}

add_action('upload_mimes', 'add_svg_to_uploads');

/****************************************************
ACF Option Page
****************************************************/

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(

        'page_title' 	=> 'Theme General Settings',

        'menu_title'	=> __('Theme Settings','mc'),

        'menu_slug' 	=> 'theme-general-settings2',

    ));

    acf_add_options_sub_page(array(

        'page_title' 	=> 'Theme Header Settings',

        'menu_title'	=> __('Header','mc'),

        'parent_slug'	=> 'theme-general-settings2',

    ));

    acf_add_options_sub_page(array(

        'page_title' 	=> 'Theme Frontpage Settings',

        'menu_title'	=> __('Front Page','mc'),

        'parent_slug'	=> 'theme-general-settings2',

    ));

}

/****************************************************
AJAX LOAD MORE
****************************************************/

function misha_my_load_more_scripts() {
 
	global $wp_query; 
 
	//wp_register_script( 'my_loadmore', THEME_DIR_URI . '/assets/js/myloadmore.js', array('jquery') );
 
	wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
		'posts' => json_encode( $wp_query->query_vars ),
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'my_loadmore' );
}
 
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );

function misha_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
    //$args['post_type'] = 'portfolio';

 
	// it is always better to use WP_Query but not here
	query_posts( $args );
 
	if( have_posts() ) :
 
		// run the loop
		while( have_posts() ): the_post();?>
 
        <div class="card">

            <div class="card-body">

                <h3 class="card-title"><?php the_title(); ?></h3>

                <a href="<?php the_field('website_url'); ?>" target="_blank">Go to Website URL</a>

            </div>

        </div>
 
 
		<?php endwhile;
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
 
 
 
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}