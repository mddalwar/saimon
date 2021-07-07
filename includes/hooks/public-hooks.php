<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function saimon_header_button(){
	global $saimon;
	$button 		= $saimon['header_button_init'];
	$buttonText 	= isset( $saimon['header_button_text'] ) ? $saimon['header_button_text'] : '';
	$buttonLink 	= isset( $saimon['header_button_link'] ) ? $saimon['header_button_link'] : '';
	$buttonTarget	= '';
	
	if( $saimon['header_button_target'] == 1 ){
		$buttonTarget = 'target="_blank"';
	}

	if( $button == 1 ){
		printf('<a href="%s" class="btn btn-primary me-3" %s>%s</a>', $buttonLink, $buttonTarget, $buttonText);
	}
}

add_action('header_button', 'saimon_header_button');