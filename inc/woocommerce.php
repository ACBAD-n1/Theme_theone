<?php 

function add_product_to_cart() {
   // Check if WooCommerce is active
   if ( class_exists( 'WooCommerce' ) && isset($_GET['add-to-cart']) ) {
    // Get the product ID from the query string
    $product_id = intval($_GET['add-to-cart']);
    $quantity = 1; // Default quantity

    // Add the product to the cart
    WC()->cart->add_to_cart( $product_id, $quantity );

    // Redirect to the cart page
    wp_safe_redirect( wc_get_cart_url() );
    exit;
   }
}


