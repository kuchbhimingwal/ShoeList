<?php

add_action( 'woocommerce_single_product_summary', 'woocommerce_breadcrumb', 0 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 1 );

// function sampletheme_woocommerce_single_product_summary_subtitle() {
//     echo 'Look at the amazing prize';
// }
// add_action( 'woocommerce_single_product_summary', 'sampletheme_woocommerce_single_product_summary_subtitle', 1);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 60 );
add_filter( 'wc_product_sku_enabled', 'bbloomer_remove_product_page_sku' );
  
function bbloomer_remove_product_page_sku( $enabled ) {
    if ( ! is_admin() && is_product() ) {
        return false;
    }
    return $enabled;
}