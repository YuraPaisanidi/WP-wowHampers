<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//---------------------------------Remove actions--------------------
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',  20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count',  20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices',  10 );



//---------------------------------Archive item----------------------------

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
	
		<?php the_post_thumbnail(); ?>
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
			<?php echo do_shortcode( '[ti_wishlists_addtowishlist]' ); ?>
			<a href="<?php the_permalink(); ?>">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</a>
		</div>

	<?php
}


