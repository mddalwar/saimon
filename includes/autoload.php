<?php 
/**
 * All class will be loaded at here.
 *
 * Don't avoid the file.
 *
 * @package Saimon
 * @since 1.0
 */

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}

class Saimon_Autoloader {

	public function __construct(){
		require_once wp_normalize_path( INCLUDE_DIR . 'classes/class-saimon.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'post-types/machinaries.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'post-types/machine-types.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'classes/class-saimon-product-options.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'classes/class-saimon-init.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'functions/public-functions.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'functions/admin.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'tgm/init.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'classes/class-saimon-nav-walker.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'hooks/public-hooks.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'hooks/comments.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'classes/class-saimon-comment-walker.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'classes/widgets/class-about-widget.php' );

		if( class_exists( 'Redux' ) ){
			require_once wp_normalize_path( INCLUDE_DIR . 'options/options.php' );
		}		

		if( defined( 'ELEMENTOR_PATH' ) ){
			require INCLUDE_DIR . '/classes/elementor/elementor-widgets-init.php';
		}
	}
}
