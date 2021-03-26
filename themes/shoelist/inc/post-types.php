<?php
/**
 * Custom post types
 */

function shoelist_init() {
    $labels = array(
        'name'                  => _x( 'Shoelists', 'Post type general name', 'shoelist' ),
        'singular_name'         => _x( 'Shoelist', 'Post type singular name', 'shoelist' ),
        'menu_name'             => _x( 'Shoelists', 'Admin Menu text', 'shoelist' ),
        'name_admin_bar'        => _x( 'Shoelist', 'Add New on Toolbar', 'shoelist' ),
        'add_new'               => __( 'Add New', 'shoelist' ),
        'add_new_item'          => __( 'Add New shoelist', 'shoelist' ),
        'new_item'              => __( 'New shoelist', 'shoelist' ),
        'edit_item'             => __( 'Edit shoelist', 'shoelist' ),
        'view_item'             => __( 'View shoelist', 'shoelist' ),
        'all_items'             => __( 'All shoelists', 'shoelist' ),
        'search_items'          => __( 'Search shoelists', 'shoelist' ),
        'parent_item_colon'     => __( 'Parent shoelists:', 'shoelist' ),
        'not_found'             => __( 'No shoelists found.', 'shoelist' ),
        'not_found_in_trash'    => __( 'No shoelists found in Trash.', 'shoelist' ),
        'featured_image'        => _x( 'Shoelist Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'shoelist' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'shoelist' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'shoelist' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'shoelist' ),
        'archives'              => _x( 'Shoelist archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'shoelist' ),
        'insert_into_item'      => _x( 'Insert into shoelist', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'shoelist' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this shoelist', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'shoelist' ),
        'filter_items_list'     => _x( 'Filter shoelists list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'shoelist' ),
        'items_list_navigation' => _x( 'Shoelists list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'shoelist' ),
        'items_list'            => _x( 'Shoelists list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'shoelist' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Shoelist custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'shoelists' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true,
    );
    
    register_post_type( 'shoelist', $args );
}
add_action( 'init', 'shoelist_init' );
?>