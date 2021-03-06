<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
$regular_price = $product->get_regular_price();
$sell_price = $product->get_sale_price();
?>


<?php if ( !empty( $regular_price ) || !empty( $sell_price ) ) : ?>
	<div class="price">
        <span>
            <?php
                if( !empty( $regular_price ) ){
                    echo 'Price: ';
                }
                if( !empty( $sell_price ) ){
                    echo '<del>';
                }
                echo get_woocommerce_currency_symbol() . $regular_price;

                if( !empty( $sell_price ) ){
                    echo '</del>';
                }
            ?>
            
        </span>

        <span>
            <?php 
                if( !empty( $sell_price ) ){
                    echo get_woocommerce_currency_symbol() . $sell_price;
                }
            ?>
        </span>
    </div>
<?php endif; ?>
