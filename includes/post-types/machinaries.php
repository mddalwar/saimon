<?php 

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}

// Register Machinaries Post Type
function saimon_products() {

	$labels = array(
		'name'                  => _x( 'Products', 'Products', 'saimon' ),
		'singular_name'         => _x( 'Product', 'Product', 'saimon' ),
		'menu_name'             => __( 'Products', 'saimon' ),
		'name_admin_bar'        => __( 'Products', 'saimon' ),
		'archives'              => __( 'Product Archives', 'saimon' ),
		'attributes'            => __( 'Product Attributes', 'saimon' ),
		'parent_item_colon'     => __( 'Parent Product:', 'saimon' ),
		'all_items'             => __( 'All Products', 'saimon' ),
		'add_new_item'          => __( 'Add New Product', 'saimon' ),
		'add_new'               => __( 'Add New Product', 'saimon' ),
		'new_item'              => __( 'New Product', 'saimon' ),
		'edit_item'             => __( 'Edit Product', 'saimon' ),
		'update_item'           => __( 'Update Product', 'saimon' ),
		'view_item'             => __( 'View Product', 'saimon' ),
		'view_items'            => __( 'View Products', 'saimon' ),
		'search_items'          => __( 'Search Product', 'saimon' ),
		'not_found'             => __( 'Not found', 'saimon' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'saimon' ),
		'featured_image'        => __( 'Product Image', 'saimon' ),
		'set_featured_image'    => __( 'Set Product image', 'saimon' ),
		'remove_featured_image' => __( 'Remove Product image', 'saimon' ),
		'use_featured_image'    => __( 'Use as Product image', 'saimon' ),
		'insert_into_item'      => __( 'Insert into Product', 'saimon' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Product', 'saimon' ),
		'items_list'            => __( 'Products list', 'saimon' ),
		'items_list_navigation' => __( 'Products list navigation', 'saimon' ),
		'filter_items_list'     => __( 'Filter Products list', 'saimon' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'saimon' ),
		'description'           => __( 'Add products to this post type', 'saimon' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'Product_type' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-screenoptions',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'saimon-products', $args );

}

add_action('after_setup_theme', 'saimon_products');