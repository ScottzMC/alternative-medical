<!DOCTYPE html>
<html lang="en-US"><!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <!-- Title -->
    <title>Advanced Alternative Medical Solution || View Shopping Cart</title>
</head>
<body class="woocommerce-cart woocommerce-page">

<!--banner-->
<div class="banner clearfix"></div>
<div class="page-top clearfix">
    <!--page main heading-->
    <div class="container">
        <h1 class="entry-title">Cart</h1>
    </div>
</div>

<div class="shop-page clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="blog-page-single clearfix">
                    <article class="clearfix post-236 page type-page status-publish hentry">
                        <div class="full-width-contents">
                            <div class="entry-content">
                                <div class="woocommerce">
                                        <table class="shop_table shop_table_responsive cart" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-thumbnail">&nbsp;</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">SubTotal</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <div><?php echo $message; ?></div>
                                            <?php
                                            $session_email = $this->session->userdata('uemail');
                                            if(empty($session_email)){
                                              $message = '<p><div class="alert alert-danger" role="alert">
                                                Please Login or Register to be able to Update Cart and Checkout
                                              </div></p>';
                                              echo $message;
                                            }
                                            ?>
                                            <?php if ($cart = $this->cart->contents()): ?>
                                            <?php $grand_total = 0; $i = 1; ?>
                                            <?php foreach($cart as $item):
                                                $check = array_slice(explode(',', $item['image']), 0, 1);

                                                foreach($check as $image) {
                                                   $image;
                                                }
                                             ?>
                                            <?php echo form_open('shopping/cart/update_cart'); ?>
                                            <?php
                                              echo form_hidden('cart['. $item['id'] .'][id]', $item['id']);
                                              echo form_hidden('cart['. $item['id'] .'][rowid]', $item['rowid']);
                                              echo form_hidden('cart['. $item['id'] .'][price]', $item['price']);
                                              echo form_hidden('cart['. $item['id'] .'][qty]', $item['qty']);
                                            ?>
                                            <tr class="cart_item">
                                                <td class="product-remove">
                                                    <a href="<?php echo base_url('shopping/cart/remove/'.$item['rowid']); ?>" class="remove" title="Remove this item">×</a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="<?php echo base_url('uploads/'.$image); ?>" alt="<?php echo $item['name']; ?>"></a>
                                                </td>
                                                <td class="product-name" data-title="Product">
                                                    <a href="<?php echo site_url('shopping/product/detail/'.strtolower($item['name'])); ?>">
                                                      <?php echo str_replace('-', ' ', $item['name']); ?>
                                                    </a>
                                                </td>
                                                <td class="product-price" data-title="Price">
                                                    <span class="amount">$<?php echo number_format($item['price']); ?></span>
                                                </td>
                                                <td class="product-quantity" data-title="Quantity">
                                                  <div class="quantity">
                                                    <?php echo form_input('cart['.$item['id'].'][qty]', $item['qty'], 'maxlength="3" class="input-text qty text" size="1"'); ?>
                                                 </div>
                                                </td>
                                                <td class="product-subtotal" data-title="Total">
                                                    <span class="amount">$<?php echo number_format($item['subtotal']); ?></span>
                                                </td>
                                            </tr>
                                            <?php echo form_close(); ?>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                            </tbody>
                                        </table>

                                    <div class="cart-collaterals">
                                      <?php if($this->cart->contents()){} ?>
                                        <div class="cart_totals ">
                                            <h2>Cart Totals</h2>
                                            <table cellspacing="0" class="shop_table shop_table_responsive">
                                                <tbody>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td data-title="Total"><strong><span class="amount">$<?php echo $this->cart->total(); ?></span></strong> </td>
                                                </tr>
                                                </tbody>
                                              </table>
                                          <?php if($this->cart->contents() && !empty($session_email)){ ?>
                                            <div class="wc-proceed-to-checkout">
                                              <a href="<?php echo site_url('shopping/checkout'); ?>" class="checkout-button button alt wc-forward">
                                                Proceed to Checkout
                                              </a>
                                            </div>
                                          <?php }else{ echo ''; } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
