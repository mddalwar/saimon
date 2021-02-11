<?php

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}

// Register Product Type Taxonomy

function product_types() {

	$labels = array(
		'name'                       => _x( 'Product Types', 'Product Types', 'saimon' ),
		'singular_name'              => _x( 'Product Type', 'Product Type', 'saimon' ),
		'menu_name'                  => __( 'Product Type', 'saimon' ),
		'all_items'                  => __( 'All Types', 'saimon' ),
		'parent_item'                => __( 'Parent Type', 'saimon' ),
		'parent_item_colon'          => __( 'Parent Type:', 'saimon' ),
		'new_item_name'              => __( 'New Type Name', 'saimon' ),
		'add_new_item'               => __( 'Add New Type', 'saimon' ),
		'edit_item'                  => __( 'Edit Type', 'saimon' ),
		'update_item'                => __( 'Update Type', 'saimon' ),
		'view_item'                  => __( 'View Type', 'saimon' ),
		'separate_items_with_commas' => __( 'Separate types with commas', 'saimon' ),
		'add_or_remove_items'        => __( 'Add or remove types', 'saimon' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'saimon' ),
		'popular_items'              => __( 'Popular Types', 'saimon' ),
		'search_items'               => __( 'Search Types', 'saimon' ),
		'not_found'                  => __( 'Not Found', 'saimon' ),
		'no_terms'                   => __( 'No types', 'saimon' ),
		'items_list'                 => __( 'Types list', 'saimon' ),
		'items_list_navigation'      => __( 'Types list navigation', 'saimon' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);

	register_taxonomy( 'product_type', array( 'saimon-products' ), $args );

}
add_action( 'after_setup_theme', 'product_types' );
