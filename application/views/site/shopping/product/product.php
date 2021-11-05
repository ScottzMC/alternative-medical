<!DOCTYPE html>
<html lang="en-US"><!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <!-- Title -->
    <title>Advanced Alternative Medical Solutions || View our Products</title>
</head>
<body class="woocommerce woocommerce-page">

<!--banner-->
<div class="banner clearfix"></div>
<div class="page-top clearfix">
    <!--page main heading-->
    <div class="container">
        <h1 class="entry-title">Shop</h1>
    </div>
</div>
<div class="shop-page clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 ">
                <div id="container">
                    <div id="content" role="main">
                        <!--<form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>-->

                        <ul class="products">
                          <?php if(!empty($all_product)){ foreach($all_product as $product){ ?>
                            <?php
                            $check = array_slice(explode(',', $product['image']), 0, 1);

                            foreach($check as $image){
                              $image;
                            }
                            ?>
                            <li class="first post-338 product type-product status-publish has-post-thumbnail product_cat-posters sale shipping-taxable purchasable product-type-simple product-cat-posters instock">
                                <a href="<?php echo site_url('shopping/product/detail/'.strtolower($product['title'])); ?>">
                                    <img src="<?php echo base_url('uploads/'.$image); ?>" alt="<?php echo $product['title']; ?>">
                                    <h3><?php echo str_replace('-', ' ', $product['title']); ?></h3>
                                    <span class="price">
                                      <span class="amount">$<?php echo number_format($product['price']); ?></span>
                                    </span>
                                </a>
                            </li>
                            <?php } }else{ echo ''; } ?>
                        </ul>

                        <nav class="woocommerce-pagination clearfix">
                            <ul class="page-numbers">
                              <?php echo $this->pagination->create_links(); ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-12 ">
                <section id="woocommerce_price_filter-1" class="widget woocommerce widget_price_filter">
                    <h3 class="title">Filter by price</h3>
                    <form method="get" action="#">
                        <div class="price_slider_wrapper">
                            <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" >
                              <div class="ui-slider-range ui-widget-header ui-corner-all" ></div>
                              <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" ></span>
                              <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;">
                    </span>
                            </div>
                            <div class="price_slider_amount">
                                <input type="text" id="min_price" name="min_price" value="" data-min="2" placeholder="Min price" style="display: none;">
                                <input type="text" id="max_price" name="max_price" value="" data-max="35" placeholder="Max price" style="display: none;">
                                <button type="submit" class="button">Filter</button>
                                <div class="price_label" style="">
                                    Price: <span class="from">$2</span> — <span class="to">$35</span>
                                </div>

                                <div class="clear"></div>
                            </div>
                        </div>
                    </form>
                </section>

            </div>
        </div><!-- /.row -->

    </div><!-- /.container -->

</div>

</body>
</html>
