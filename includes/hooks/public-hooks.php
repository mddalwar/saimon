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

function saimon_header_cart_button(){
	global $saimon;
	$wooCartUrl	= function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : '';
	$cart 		= $saimon['header_cart_init'];
	$cartText 	= isset( $saimon['header_cart_text'] ) ? $saimon['header_cart_text'] : '';
	$cartLink 	= !empty( $saimon['header_cart_link'] ) ? $saimon['header_cart_link'] : $wooCartUrl;
	$cartIcon	= !empty( $cartText ) ? '<i class="fa-lg ' . $cartText .'"></i>' : '<i class="fas fa-cart-arrow-down fa-lg"></i>';
	$cartTarget	= '';

	if( $saimon['header_cart_target'] == 2 ){
		$cartTarget = 'target="_blank"';
	}

	if( $cart == 1 ){
		printf('<a href="%s" class="me-3" %s>%s</a>', $cartLink, $cartTarget, $cartIcon);
	}
}
add_action('header_cart', 'saimon_header_cart_button');