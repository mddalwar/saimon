<?php 
/**
 * Extra files & functions are linked through this file.
 *
 * This file linked all requred files.
 *
 * @package Saimon
 * @since 1.0
 */

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}

require_once wp_normalize_path( get_template_directory() . '/includes/autoload.php' );
new Saimon_Autoloader();