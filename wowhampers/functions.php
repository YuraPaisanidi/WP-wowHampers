<?php

/**
 * Implement the Script-Style
 */
require get_template_directory() . '/includes/style-script.php';

/**
 * Implement additional functions
 */
require get_template_directory() . '/includes/additional-functions.php';

/**
 * Implement menu
 */
require get_template_directory() . '/includes/menu.php';

/**
 * Implement ACF
 */
require get_template_directory() . '/includes/acf.php';

/**
 * Implement pagination
 */
require get_template_directory() . '/includes/pagination.php';


/**
 * Implement pagination
 */
require get_template_directory() . '/includes/post-type.php';


/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
}
