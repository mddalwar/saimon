<?php 
// Register Service Type
function saimon_services_init() {

	$labels = array(
		'name'                  => _x( 'Services', 'Services', 'saimon' ),
		'singular_name'         => _x( 'Service', 'Service', 'saimon' ),
		'menu_name'             => __( 'Services', 'saimon' ),
		'name_admin_bar'        => __( 'Service', 'saimon' ),
		'archives'              => __( 'Service Archives', 'saimon' ),
		'attributes'            => __( 'Service Attributes', 'saimon' ),
		'parent_item_colon'     => __( 'Parent Service:', 'saimon' ),
		'all_items'             => __( 'All Services', 'saimon' ),
		'add_new_item'          => __( 'Add New Service', 'saimon' ),
		'add_new'               => __( 'Add New', 'saimon' ),
		'new_item'              => __( 'New Service', 'saimon' ),
		'edit_item'             => __( 'Edit Service', 'saimon' ),
		'update_item'           => __( 'Update Service', 'saimon' ),
		'view_item'             => __( 'View Service', 'saimon' ),
		'view_items'            => __( 'View Services', 'saimon' ),
		'search_items'          => __( 'Search Service', 'saimon' ),
		'not_found'             => __( 'Not found', 'saimon' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'saimon' ),
		'featured_image'        => __( 'Service Image', 'saimon' ),
		'set_featured_image'    => __( 'Set service image', 'saimon' ),
		'remove_featured_image' => __( 'Remove service image', 'saimon' ),
		'use_featured_image'    => __( 'Use as service image', 'saimon' ),
		'insert_into_item'      => __( 'Insert into service', 'saimon' ),
		'uploaded_to_this_item' => __( 'Uploaded to this service', 'saimon' ),
		'items_list'            => __( 'Services list', 'saimon' ),
		'items_list_navigation' => __( 'Services list navigation', 'saimon' ),
		'filter_items_list'     => __( 'Filter services list', 'saimon' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'saimon' ),
		'description'           => __( 'These the services for show your service', 'saimon' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'services', $args );
}
add_action( 'after_setup_theme', 'saimon_services_init' );