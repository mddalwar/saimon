<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if( ! function_exists( 'saimon_product_orderby' )){

	function saimon_product_orderby(){
		$saimon_product_orderby = array(
			'menu_order' => __( 'Product By', 'saimon' ),
			'popularity' => __( 'Popularity', 'saimon' ),
			'rating'     => __( 'Average rating', 'saimon' ),
			'date'       => __( 'Latest', 'saimon' ),
			'price'      => __( 'Price: Low to High', 'saimon' ),
			'price-desc' => __( 'Price: High to Low', 'saimon' ),
		);
		return $saimon_product_orderby;
	}

	add_filter( 'woocommerce_catalog_orderby', 'saimon_product_orderby');
}


if ( ! function_exists( 'saimon_woocommerce_loop_product_title' ) ) {

	/**
	 * Show the product title in the product loop. By default this is an H2.
	 */
	function saimon_woocommerce_loop_product_title() {
		$title = '<h4 class="product-title">' . get_the_title() . '</h4>';
		echo $title;
	}
}

remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_shop_loop_item_title', 'saimon_woocommerce_loop_product_title', 10 );

function saimon_product_loop_link_close(){
	echo '</a>';
}
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 10 );
add_action('woocommerce_before_shop_loop_item_title', 'saimon_product_loop_link_close', 10);




/**
 * Show notice if cart is empty.
 *
 * @since 3.1.0
 */
function saimon_empty_cart_message() {
	echo '<div class="container"><p class="cart-empty woocommerce-info">' . wp_kses_post( apply_filters( 'wc_empty_cart_message', __( 'Your cart is currently empty.', 'woocommerce' ) ) ) . '</p></div>';
}

remove_action( 'woocommerce_cart_is_empty', 'wc_empty_cart_message', 10 );
add_action( 'woocommerce_cart_is_empty', 'saimon_empty_cart_message', 10 );

function saimon_output_all_notices() {
	echo '<div class="container"><div class="woocommerce-notices-wrapper">';
	wc_print_notices();
	echo '</div></div>';
}
remove_action( 'woocommerce_cart_is_empty', 'woocommerce_output_all_notices', 5 );
add_action( 'woocommerce_cart_is_empty', 'saimon_output_all_notices', 5 );

function saimon_woocommerce_billing_fields( $fields ){
	// First Name
	$fields['billing_first_name']['class'][] = 'form-group';
	$fields['billing_first_name']['input_class'][] = 'form-control';
	$fields['billing_first_name']['placeholder'] = 'Your First Name';

	// Last Name
	$fields['billing_last_name']['class'][] = 'form-group';
	$fields['billing_last_name']['input_class'][] = 'form-control';
	$fields['billing_last_name']['placeholder'] = 'Your Last Name';

	// Company Name
	$fields['billing_company']['class'][] = 'form-group';
	$fields['billing_company']['input_class'][] = 'form-control';
	$fields['billing_company']['placeholder'] = 'Enter Company Name';

	// Country Selection
	$fields['billing_country']['class'][] = 'form-group';
	$fields['billing_country']['input_class'][] = 'form-control custom-select';

	// Address Line 1
	$fields['billing_address_1']['class'][] = 'form-group';
	$fields['billing_address_1']['input_class'][] = 'form-control';
	$fields['billing_address_1']['placeholder'] = 'Address Line 1';

	// Address Line 2
	$fields['billing_address_2']['class'][] = 'form-group';
	$fields['billing_address_2']['input_class'][] = 'form-control';
	$fields['billing_address_2']['placeholder'] = 'Address Line 2';

	// City
	$fields['billing_city']['class'][] = 'form-group';
	$fields['billing_city']['input_class'][] = 'form-control';
	$fields['billing_city']['placeholder'] = 'Address Line 2';


	// State Selection
	$fields['billing_state']['class'][] = 'form-group';
	$fields['billing_state']['input_class'][] = 'form-control custom-select';

	// Post Code
	$fields['billing_postcode']['class'][] = 'form-group';
	$fields['billing_postcode']['input_class'][] = 'form-control';
	$fields['billing_postcode']['placeholder'] = 'Enter Post Code';

	// Phone Number
	$fields['billing_phone']['class'][] = 'form-group';
	$fields['billing_phone']['input_class'][] = 'form-control';
	$fields['billing_phone']['placeholder'] = 'Your Phone Number';

	// Phone Number
	$fields['billing_email']['class'][] = 'form-group';
	$fields['billing_email']['input_class'][] = 'form-control';
	$fields['billing_email']['placeholder'] = 'Enter Email Address';

	return $fields;
}
add_filter( 'woocommerce_billing_fields', 'saimon_woocommerce_billing_fields' );