<?php
/**
 * Extra files & functions are hooked through this file.
 *
 * This file maintaining all requred files.
 *
 * @package Saimon
 * @since 1.0
 */

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}

if ( ! defined( 'SAIMON_VERSION' ) ) {
	define( 'SAIMON_VERSION', '1.0.0' );
}

if ( ! defined( 'THEME_DIR' ) ) {
	define( 'THEME_DIR', wp_normalize_path( get_template_directory() .'/') );
}

if ( ! defined( 'THEME_URL' ) ) {
	define( 'THEME_URL', wp_normalize_path( get_template_directory_uri() . '/') );
}

if ( ! defined( 'ASSET_DIR' ) ) {
	define( 'ASSET_DIR', wp_normalize_path( get_template_directory() . '/assets/' ) );
}

if ( ! defined( 'ASSET_URL' ) ) {
	define( 'ASSET_URL', wp_normalize_path( get_template_directory_uri() . '/assets/' ) );
}

if ( ! defined( 'INCLUDE_DIR' ) ) {
	define( 'INCLUDE_DIR', wp_normalize_path( get_template_directory() . '/includes/' ) );
}

if ( ! defined( 'INCLUDE_URL' ) ) {
	define( 'INCLUDE_URL', wp_normalize_path( get_template_directory_uri() . '/includes/' ) );
}

if ( ! defined( 'SAIMON_ADMIN_URL' ) ) {
	define( 'SAIMON_ADMIN_URL', wp_normalize_path( get_template_directory_uri() . '/admin/' ) );
}

if ( ! defined( 'SAIMON_ADMIN_DIR' ) ) {
	define( 'SAIMON_ADMIN_DIR', wp_normalize_path( get_template_directory_uri() . '/admin/' ) );
}

require_once wp_normalize_path( get_template_directory() . '/includes/boot.php' );

