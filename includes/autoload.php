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
		require_once wp_normalize_path( get_template_directory() . '/includes/classes/class-saimon.php' );
		require_once wp_normalize_path( get_template_directory() . '/includes/classes/class-saimon-init.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'functions/admin.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'classes/class-saimon-nav-walker.php' );
		require_once wp_normalize_path( INCLUDE_DIR . 'classes/widgets/class-about-widget.php' );
	}
}
