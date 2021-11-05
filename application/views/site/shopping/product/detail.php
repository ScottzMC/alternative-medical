<!DOCTYPE html>
<html lang="en-US"><!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <!-- Title -->
    <?php foreach($detail as $det){} ?>
    <?php foreach($customer_count as $count){} ?>
    <title>Advanced Alternative Medical Solution || View <?php echo str_replace('-', ' ', $det->title); ?> Detail</title>
</head>
<body class="single single-product woocommerce woocommerce-page">

<!--banner-->
<div class="banner clearfix"></div>
<div class="page-top clearfix">
    <!--page main heading-->
    <div class="container">
        <h1 class="entry-title"><?php echo str_replace('-', ' ', $det->title); ?></h1>
    </div>
</div>

<div class="shop-page clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="blog-page-single clearfix">
                    <div itemscope itemtype="http://schema.org/Product" class="post-338 product type-product status-publish has-post-thumbnail product_cat-posters sale shipping-taxable purchasable product-type-simple product-cat-posters instock">
                        <div class="images">
                          <?php
                          $check = array_slice(explode(',', $det->image), 0, 1);

                          foreach($check as $image){
                            $image;
                          }
                          ?>
                            <a href="<?php echo base_url('uploads/'.$image); ?>" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                <img src="<?php echo base_url('uploads/'.$image); ?>" alt="<?php echo $det->title; ?>"></a>
                            <div class="thumbnails columns-3">
                              <?php
                              $check = explode(',', $det->image);

                              foreach($check as $thumbnail){
                                $thumbnail;
                              ?>
                                <a href="<?php echo base_url('uploads/'.$thumbnail); ?>" class="zoom first" title="" data-rel="prettyPhoto[product-gallery]">
                                  <img src="<?php echo base_url('uploads/'.$thumbnail); ?>" alt="<?php echo $det->title; ?>">
                                </a>
                            <?php } ?>
                            </div>
                        </div>

                        <div class="summary entry-summary entry-content">
                            <h1 itemprop="name" class="product_title entry-title"><?php echo str_replace('-', ' ', $det->title); ?></h1>
                            <div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                <a href="#reviews" class="woocommerce-review-link" rel="nofollow">
                                  (<span itemprop="reviewCount" class="count"><?php echo $count->total_customer; ?></span> customer reviews)
                                </a>
                            </div>

                            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <p class="price"><span class="amount">&#36;<?php echo number_format($det->price); ?></span></p>
                                <meta itemprop="price" content="<?php echo number_format($det->price); ?>" />
                                <meta itemprop="priceCurrency" content="USD" />
                                <link itemprop="availability" href="http://schema.org/InStock" />
                            </div>
                            <div itemprop="description">
                                <p><?php echo $det->description; ?></p>
                            </div>

                            <form class="cart" action="<?php echo base_url('shopping/cart/add'); ?>" method="post" enctype='multipart/form-data'>
                              <input type="hidden" name="id" value="<?php echo $det->id; ?>">
                              <input type="hidden" name="title" value="<?php echo $det->title; ?>">
                              <input type="hidden" name="price" value="<?php echo $det->price; ?>">
                              <input type="hidden" name="image" value="<?php echo $image; ?>">
                              <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                            </form>
                        </div><!-- .summary -->

                        <div class="woocommerce-tabs wc-tabs-wrapper">
                            <ul class="tabs wc-tabs">
                                <li class="description_tab active">
                                    <a href="#tab-description">Description</a>
                                </li>
                                <li class="reviews_tab">
                                    <a href="#tab-reviews">Reviews(<?php echo $count->total_customer; ?>)</a>
                                </li>
                            </ul>
                            <div class="panel entry-content wc-tab" id="tab-description">
                                <h2>Product Description</h2>
                                <p><?php echo $det->description; ?></p>
                            </div>
                            <div class="panel entry-content wc-tab" id="tab-reviews">
                                <div id="reviews">
                                    <div id="comments">
                                        <h2><?php echo $count->total_customer; ?> Reviews for <?php echo str_replace('-', ' ', $det->title); ?></h2>
                                        <ol class="commentlist">
                                          <?php if(!empty($customer_review)){ foreach($customer_review as $review){ ?>
                                            <li itemprop="review" itemscope itemtype="http://schema.org/Review" class="comment even thread-even depth-1" id="li-comment-37">
                                                <div id="comment-37" class="comment_container">
                                                    <img class="avatar avatar-60 photo" src="<?php echo base_url('images/temp-images/author-img.png'); ?>" alt="Image">
                                                    <div class="comment-text">
                                                        <p class="meta">
                                                            <strong itemprop="author"><?php echo $review->fullname; ?></strong> &ndash;
                                                            <time itemprop="datePublished" datetime="2013-06-07T11:52:25+00:00"><?php echo date('j M Y', strtotime($review->created_date)); ?></time>:
                                                        </p>
                                                        <div itemprop="description" class="description">
                                                          <p><?php echo $review->review; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li><!-- #comment-## -->
                                          <?php } }else{ echo ''; } ?>
                                        </ol>
                                    </div>

                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">
                                                <h3 id="reply-title" class="comment-reply-title">Add a review
                                                <form action="<?php echo base_url('shopping/product/detail/'.$det->title); ?>" method="post" id="" class="comment-form">
                                                  <p class="comment-form-comment">
                                                    <label for="comment">Your Review</label>
                                                    <textarea id="" name="review" cols="45" rows="8" aria-required="true"></textarea>
                                                  </p>
                                                  <p class="comment-form-author">
                                                    <label for="author">Full Name <span class="required">*</span></label>
                                                    <input id="" name="fullname" type="text" value="" size="30" aria-required="true" />
                                                  </p>
                                                  <p class="comment-form-email">
                                                    <label for="email">Email Address <span class="required">*</span></label>
                                                    <input id="" name="email" type="text" value="" size="30" aria-required="true" />
                                                  </p>
                                                  <p class="form-submit">
                                                    <input name="reviewBtn" type="submit" id="" class="submit" value="Submit" />
                                                  </p>
                                              </form>
                                            </div><!-- #respond -->
                                            <?php
                                              if($this->form_validation->run() == TRUE){
                                                echo $this->session->flashdata('msgError');
                                              }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- #product-338 -->
                </div><!-- /.blog-page-single -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.shop-page -->

</body>
</html>
