<?php

/****************************************************

Portfolio Post Type

****************************************************/

function portfolio_post_type() {

    $labels = array(
        'name'                  => __( 'Portfolio', 'mc' ),
        'singular_name'         => __( 'Portfolio', 'mc' ),
        'menu_name'             => __( 'Portfolio', 'mc' ),
        'name_admin_bar'        => __( 'Portfolio', 'mc' ),
        'add_new'               => __( 'Add New', 'mc' ),
        'add_new_item'          => __( 'Add New Item', 'mc' ),
        'new_item'              => __( 'New item', 'mc' ),
        'edit_item'             => __( 'Edit Item', 'mc' ),
        'view_item'             => __( 'View Item', 'mc' ),
        'all_items'             => __( 'Portfolio', 'mc' ),
        'search_items'          => __( 'Search Items', 'mc' ),
        'parent_item_colon'     => __( 'Parent', 'mc' ),
        'not_found'             => __( 'Not Found', 'mc' ),
        'not_found_in_trash'    => __( 'Not Found in Trash', 'mc' ),
        'featured_image'        => __( 'Featured Image', 'mc' ),
        'set_featured_image'    => __( 'Set Featured Image', 'mc' ),
        'remove_featured_image' => __( 'Remove Featured Image', 'mc' ),
        'use_featured_image'    => __( 'Use Featured Image', 'mc' ),
        'insert_into_item'      => __( 'Insert Into Item', 'mc' ),
        'uploaded_to_this_item' => __( 'Uploaded To This Item', 'mc' ),
        'items_list'            => __( 'Items List', 'mc' ),
        'items_list_navigation' => __( 'Items List Navigation', 'mc' ),
        'filter_items_list'     => __( 'Filter Items List', 'mc' ),
    );
    $args = array(
        'label'                 => __( 'Portfolio', 'mc' ),
        'description'           => __( 'Portfolio Post Type', 'mc' ),
        'labels'                => $labels,
        'menu_icon'             => 'dashicons-schedule',
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array('',''),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 3,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'show_ui'               => true,
        'show_in_rest'          => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'capability_type'       => 'page',
        'rewrite'               => array('slug' => 'portfolio'),
    );
    register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_post_type', 3 );