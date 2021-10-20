<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// ---------------------------------------------remove actions---------------------------------------
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta',  40 );

//--------------------------------------------	description product-----------------------------------------------
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs',  10 );
	add_action( 'woocommerce_single_product_summary', 'description', 10 );

	function description() {
		?>
		<div class="product__desc">
			<?php the_content(); ?>
		</div>
		<?php
  }

	//---------------------------------------------title product-----------------------------------------------
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title',  5 );
  add_action( 'woocommerce_single_product_summary', 'single_title', 5 );
    
  function single_title() {
    if ( ! is_archive() ) {
  ?>
    <h1 class="h1 product__title">
      <?php the_title(); ?>
    </h1>

  <?php
    }
  }

	//-----------------------------------------product composition---------------
	add_action( 'woocommerce_single_product_summary', 'single_composition', 40 );

	function single_composition() {
  	?>
				<?php if( have_rows('сomposition') ): ?>
					<ul class="product__compos">
						<?php while( have_rows('сomposition') ): the_row(); 
						$item = get_sub_field('item');
						?>
							<li><span>+</span><?php echo $item; ?></li>

						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

  	<?php
  }

	//-----------------------------------Product price--------------
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price',  10 );
	add_action( 'woocommerce_after_add_to_cart_quantity', 'woocommerce_template_single_price', 30 );

	//-----------------------------------Product add to cart------------------------------------------
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart',  30 );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 50 );



//-------------------------------Change product image zoom size---------------------------
add_filter( 'woocommerce_gallery_full_size', 'change_magnifier_lightbox_image_size', 20, 1 );
function change_magnifier_lightbox_image_size( $size ){
    $thumbnail_id = get_post_thumbnail_id( get_the_id() );
    $attachment   = wp_get_attachment_metadata( $thumbnail_id, FALSE );

    // Always return a value in a filter hook
    return ( $attachment['width'] > 3071 || $attachment['height'] > 3071 ) ? 'preview' : 'large';
}

//-----------------------------------Change arert text--------------
add_filter( 'gettext', 'customizing_variable_product_message', 97, 3 );
function customizing_variable_product_message( $translated_text, $untranslated_text, $domain )
{
    if ($untranslated_text == 'Please select some product options before adding this product to your cart.') {
        $translated_text = __( 'Please select the packing before adding this product to your cart', $domain );
    }
    return $translated_text;
}