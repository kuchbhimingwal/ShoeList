<?php

add_action( 'woocommerce_single_product_summary', 'woocommerce_breadcrumb', 0 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 1 );

// function sampletheme_woocommerce_single_product_summary_subtitle() {
//     echo 'Look at the amazing prize';
// }
// add_action( 'woocommerce_single_product_summary', 'sampletheme_woocommerce_single_product_summary_subtitle', 1);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 60 );
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}