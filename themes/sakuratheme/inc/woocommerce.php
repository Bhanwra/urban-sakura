<?php

    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 0 );

    function price_blurb() {
        global $woocommerce;
    }
    add_action( 'woocommerce_single_product_summary', 'price_blurb', 1 );

    add_filter( 'woocommerce_add_to_cart_fragments', 'sakuratheme_woocommerce_header_add_to_cart_fragment' );

    function sakuratheme_woocommerce_header_add_to_cart_fragment( $fragments ) {
        global $woocommerce;

        ob_start();

        ?>
        <a class="cart nav-link" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
        <?php
        $fragments['a.cart.nav-link'] = ob_get_clean();
        return $fragments;
    }

?>