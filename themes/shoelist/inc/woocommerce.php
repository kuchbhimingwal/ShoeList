<?php

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 1 );

function sampletheme_woocommerce_single_product_summary_subtitle() {
    echo 'Look at the amazing prize';
}
add_action( 'woocommerce_single_product_summary', 'sampletheme_woocommerce_single_product_summary_subtitle', 1);