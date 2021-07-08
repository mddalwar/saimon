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