<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?> product__price_item"><?php echo $product->get_price_html(); ?></p>
<script>
		let priceText = document.querySelector('.product__price_item .amount').innerText.replace('$', '');

		const calculatePrice = (calcInc, calcSub) => {

			document.querySelector(calcInc).addEventListener('click', function(e){
				let number = document.querySelector('.quantity .qty');
				let price = document.querySelector('.product__price_item');
				let numberValue = 1;

				if(numberValue === 1){
					let newPrice = priceText * (Number(number.value) + 1) ;
					price.innerText ='$' + newPrice.toFixed(2);
					let numberValue = number.value;
				} else {
					let newPrice = priceText * number.value;
					price.innerText ='$' + newPrice.toFixed(2);
				}

			});
			document.querySelector(calcSub).addEventListener('click', function(e){
				let number = document.querySelector('.quantity .qty');
				let price = document.querySelector('.product__price_item');
				let numberValue = Number(number.value);
				
				if(numberValue === 1){
						let newPrice = Number(priceText);
						price.innerText ='$' + newPrice.toFixed(2);
				} else {
						let newPrice = priceText * (Number(number.value) - 1);
						price.innerText ='$' + newPrice.toFixed(2);
				}

			});

		};
		calculatePrice('.wbu-btn-inc', '.wbu-btn-sub');

</script>
