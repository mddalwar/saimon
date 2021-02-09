<?php 
/**
 * Extra files & functions are linked through this file.
 *
 * This file linked all requred files.
 *
 * @package Saimon
 * @subpackage Saimon\includes\boot
 * @since 1.0
 */

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}

require_once wp_normalize_path( INCLUDE_DIR . 'autoload.php' );
new Saimon_Autoloader();