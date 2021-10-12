<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//---------------------------------Remove actions--------------------
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',  20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count',  20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices',  10 );



//---------------------------------Archive item----------------------------
	add_action ( 'woocommerce_before_shop_loop_item', 'woocommerce_shop_wrap_top_start' );
	function woocommerce_shop_wrap_top_start(){
		?>
			<div class="gifts__slide_top">

		<?php
	}

	add_action ('woocommerce_before_shop_loop_item_title', 'woocommerce_shop_wrap_top_end', 15);
	function woocommerce_shop_wrap_top_end(){
		?>
			</div>

		<?php
	}

	add_action ('woocommerce_shop_loop_item_title', 'woocommerce_shop_wrap_bottom_start', 5);
	function woocommerce_shop_wrap_bottom_start(){
		?>
			<div class="gifts__slide_bottom">

		<?php
	}

	add_action ('woocommerce_after_shop_loop_item', 'woocommerce_shop_wrap_bottom_end', 20);

	function woocommerce_shop_wrap_bottom_end(){
		?>
			</div>

		<?php
	}


//--------------------------------Archive item thumb-------
remove_action ('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action ( 'woocommerce_before_shop_loop_item_title', 'woocommerce_shop_item_image', 10);

function woocommerce_shop_item_image() {
	?>

	<div class="gifts__slide_img">
		<?php the_post_thumbnail(); ?>
	</div>
	<?php
}

//--------------------------------Archive item title-------------------------------------
remove_action ('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action ('woocommerce_shop_loop_item_title', 'woocommerce_shop_item_title', 10);
function woocommerce_shop_item_title() {
	?>
		<p class="gifts__slide_name"><?php the_title(); ?></p>
	<?php
}

//-------------------------------Archive item add to cart----------------
remove_action ('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
add_action ('woocommerce_after_shop_loop_item', 'woocommerce_shop_item_btns', 10);

function woocommerce_shop_item_btns() {
	?>

		<div class="gifts__slide_btns">
			<button class="wishlist">
				<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M20.2913 2.61183C19.7805 2.10083 19.1741 1.69547 18.5066 1.41891C17.8392 1.14235 17.1238 1 16.4013 1C15.6788 1 14.9634 1.14235 14.2959 1.41891C13.6285 1.69547 13.022 2.10083 12.5113 2.61183L11.4513 3.67183L10.3913 2.61183C9.3596 1.58013 7.96032 1.00053 6.50129 1.00053C5.04226 1.00053 3.64298 1.58013 2.61129 2.61183C1.5796 3.64352 1 5.04279 1 6.50183C1 7.96086 1.5796 9.36013 2.61129 10.3918L3.67129 11.4518L11.4513 19.2318L19.2313 11.4518L20.2913 10.3918C20.8023 9.88107 21.2076 9.27464 21.4842 8.60718C21.7608 7.93972 21.9031 7.22431 21.9031 6.50183C21.9031 5.77934 21.7608 5.06393 21.4842 4.39647C21.2076 3.72901 20.8023 3.12258 20.2913 2.61183V2.61183Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</button>
			<button class="">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</button>
		</div>

	<?php
}

//--------------------------------Archive pagination-----------------
// remove_action ('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
// add_action ('woocommerce_after_shop_loop', 'woocommerce_load_more', 10);


// }
