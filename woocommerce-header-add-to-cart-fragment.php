<?php

add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment', 10 );

function woocommerce_header_add_to_cart_fragment( $fragments ) {

	global $woocommerce;

	ob_start();

		echo '<a class="cart-item" href="'.wc_get_cart_url().'" title="View Cart">';
			echo '<span class="cart-icon"> <i class="fa fa-shopping-cart"></i> </span>';
			echo '<span class="cart-number">'.WC()->cart->get_cart_contents_count().'</span>';
		echo '</a>';

	$fragments['a.cart-item'] = ob_get_clean();

	return $fragments;

}
