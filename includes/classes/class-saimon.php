<?php 
/**
 * This file provides main Saimon class.
 *
 * This class maintaining all initial step after activation the theme.
 *
 * @package Saimon
 * @since 1.0
 */

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}

/**
 * 
 */
class Saimon
{
	/**
	 * The template directory path.
	 *
	 * @static
	 * @access public
	 * @var string
	 */
	public static $theme_dir = '';

	/**
	 * The template directory url path.
	 *
	 * @static
	 * @access public
	 * @var string
	 */
	public static $theme_url = '';

	/**
	 * The asset folder directory path.
	 *
	 * @static
	 * @access public
	 * @var string
	 */
	public static $asset_dir = '';

	/**
	 * The asset folder url path.
	 *
	 * @static
	 * @access public
	 * @var string
	 */
	public static $asset_url = '';

	/**
	 * The include folder directory path.
	 *
	 * @static
	 * @access public
	 * @var string
	 */
	public static $include_dir = '';

	/**
	 * The include folder url path.
	 *
	 * @static
	 * @access public
	 * @var string
	 */
	public static $include_url = '';

	public function __construct(){
		
	}
}
$saiman = new Saimon();

/* Omit closing PHP tag to avoid "Headers already sent" issues. */