<?php

/**
 * @file
 * Ajax shopping cart block template file.
 *
 * If you want to make changes in the structure Shopping Cart, copy this file to
 * your theme's templates directory. DO NOT change this file.
 *
 * Available variables:
 * - $order: Order object of the current user.
 * - $line_items: Line items wrapper.
 * - $quantity: Number of items in the cart.
 * - $total: Array containing the total amount and the default currency you are
 *   in the site.
 * Other variables:
 * - $line_item_list: Array containing all line item objects.
 * - $products: Array containing all product objects that are stored in the
 *   cart.
 * - $product_prices: Array containing the prices of products in cart. The price
 *   also has currency code or symbol attached to it. Currency code or symbol
 *   depends on the AJAX Add to Cart settings.
 * - $product_price_total: Total amount including taxes. The total has currency
 *   code or symbol attached to it. Currency code or symbol depends on the AJAX
 *   Add to Cart settings.
 * - $checkout_link: Array containing properties to generate checkout link.
 * - $checkout_url: The checkout url depends on AJAX Add to Cart settings.
 * - $products_list_html: Products list as HTML content.
 * - $shipping: If you have included shipping prices then this variable will be
 *   available. This is an array containing the details of the shipping you have
 *   included in order. If you have not included shipping in your order then
 *   this variable will not be available.
 * - $configuration['show_labels']: Check whether to display labels in cart.
 * - $configuration['remove_cart']: Check whether to display link or image in
 *   for the option remove product from cart.
 * - $configuration['display_tax']: Check whether to display tax.
 * - $configuration['empty_cart_message']: Message to display if the cart is
 *   empty.
 */
?>
<div class="ajax-shopping-cart">   
    <div class="ajax-shopping-cart__quantity">
      <?php print $cart_contents; ?>      
    </div>
    <div class="ajax-shopping-cart__product-added" style="display:none">
      <?php print $product_added_text; ?>
    </div>

</div>