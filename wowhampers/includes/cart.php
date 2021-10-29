<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Set custom cart item price
add_action( 'woocommerce_before_calculate_totals', 'add_custom_price', 1000, 1);
function add_custom_price( $cart ) {
    // This is necessary for WC 3.0+
    if ( is_admin() && ! defined( 'DOING_AJAX' ) )
        return;

    // Avoiding hook repetition (when using price calculations for example | optional)
    if ( did_action( 'woocommerce_before_calculate_totals' ) >= 2 )
        return;

    // Loop through cart items
    foreach ( $cart->get_cart() as $cart_item ) {
        $cart_item['data']->set_price( 40 );
    }
}