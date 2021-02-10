<?php 

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}

// Register Machinaries Post Type
function saimon_machinaries() {

	$labels = array(
		'name'                  => _x( 'Machines', 'Post Type General Name', 'saimon' ),
		'singular_name'         => _x( 'Machine', 'Post Type Singular Name', 'saimon' ),
		'menu_name'             => __( 'Machines', 'saimon' ),
		'name_admin_bar'        => __( 'Machines', 'saimon' ),
		'archives'              => __( 'Machine Archives', 'saimon' ),
		'attributes'            => __( 'Machine Attributes', 'saimon' ),
		'parent_item_colon'     => __( 'Parent Machine:', 'saimon' ),
		'all_items'             => __( 'All Machines', 'saimon' ),
		'add_new_item'          => __( 'Add New Machine', 'saimon' ),
		'add_new'               => __( 'Add New Machine', 'saimon' ),
		'new_item'              => __( 'New Machine', 'saimon' ),
		'edit_item'             => __( 'Edit Machine', 'saimon' ),
		'update_item'           => __( 'Update Machine', 'saimon' ),
		'view_item'             => __( 'View Machine', 'saimon' ),
		'view_items'            => __( 'View Machines', 'saimon' ),
		'search_items'          => __( 'Search Machine', 'saimon' ),
		'not_found'             => __( 'Not found', 'saimon' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'saimon' ),
		'featured_image'        => __( 'Machine Image', 'saimon' ),
		'set_featured_image'    => __( 'Set machine image', 'saimon' ),
		'remove_featured_image' => __( 'Remove machine image', 'saimon' ),
		'use_featured_image'    => __( 'Use as machine image', 'saimon' ),
		'insert_into_item'      => __( 'Insert into machine', 'saimon' ),
		'uploaded_to_this_item' => __( 'Uploaded to this machine', 'saimon' ),
		'items_list'            => __( 'Machines list', 'saimon' ),
		'items_list_navigation' => __( 'Machines list navigation', 'saimon' ),
		'filter_items_list'     => __( 'Filter machines list', 'saimon' ),
	);
	$args = array(
		'label'                 => __( 'Machine', 'saimon' ),
		'description'           => __( 'Add machinaries to this post type', 'saimon' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'machine_type' ),
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
	register_post_type( 'machinaries', $args );

}

add_action('after_setup_theme', 'saimon_machinaries');