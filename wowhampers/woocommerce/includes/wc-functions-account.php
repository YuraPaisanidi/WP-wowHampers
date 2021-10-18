<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Rename WooCommerce MyAccount menu items
 */
add_filter( 'woocommerce_account_menu_items', 'rename_menu_items' );
function rename_menu_items( $items ) {

    // $items['downloads']    = 'Download MP3s';
    $items['orders']       = 'My Orders';
    $items['edit-account'] = 'Profile';
    $items['edit-address'] = 'Shipping address';

    return $items;
}


//------------------Remove "dashboard" from account navigation---------------

function WOO_account_menu_items($items) {
	unset($items['dashboard']);
	return $items;            
}

add_filter ('woocommerce_account_menu_items', 'WOO_account_menu_items');


// REmove Billing fields on my account edit-addresses and checkout
add_filter( 'woocommerce_billing_fields' , 'custom_billing_fields' );
function custom_billing_fields( $fields ) {

    // Billing Fields
    unset($fields['billing_first_name']);
    unset($fields['billing_last_name']);
    unset($fields['billing_company']);
    unset($fields['billing_country']);
    unset($fields['billing_state']);
    unset($fields['billing_postcode']);
    unset($fields['billing_email']);
    unset($fields['billing_phone']);

    return $fields;
}


//Remove required field requirement for first/last name in My Account Edit form
add_filter('woocommerce_save_account_details_required_fields', 'remove_required_fields');

function remove_required_fields( $required_fields ) {
		unset($required_fields['account_display_name']);
		unset($required_fields['account_last_name']);

		return $required_fields;
}


$tag             = 'woocommerce_save_account_details'; 
$function_to_add = 'my_save_account';
$priority        = 10;
$accepted_args   = 1; 
add_action( $tag, $function_to_add, $priority, $accepted_args ); 
function my_save_account($user_id) {
  $date  = ! empty( $_POST[ 'date' ] ) ? $_POST[ 'date' ] : '';
  update_user_meta($user_id, 'date', $date);
	$phone  = ! empty( $_POST[ 'phone' ] ) ? $_POST[ 'phone' ] : '';
  update_user_meta($user_id, 'phone', $phone);
}