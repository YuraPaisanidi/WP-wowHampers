<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
//---------------------------------------------title product-----------------------------------------------
  remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs',  10 );
	add_action( 'woocommerce_after_single_product_summary', 'description', 25 );

	function description() {
		 the_content();
  }