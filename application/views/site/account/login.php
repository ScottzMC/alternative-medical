<!DOCTYPE html>
<html lang="en-US"><!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <!-- Title -->
    <title>Advanced Alternative Medical Solution || Login to Account</title>

</head>
<body class="woocommerce woocommerce-page">

<!--banner-->
<div class="banner clearfix"></div>
<div class="page-top clearfix">
    <!--page main heading-->
    <div class="container">
        <h1 class="entry-title">Login</h1>
    </div>
</div>
<div class="shop-page clearfix">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="blog-page-single clearfix">
                <article id="post-237" class=" clearfix post-237 page type-page status-publish hentry">
                    <div class="full-width-contents">
                        <div class="entry-content">
                            <div class="woocommerce">
                                <div class="woocommerce-info">Create an account here <a href="<?php echo site_url('account/register'); ?>">Click here to register</a></div>
                                <form class="checkout woocommerce-checkout" action="<?php echo base_url('account/login'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="col2-set" id="customer_details">
                                        <div class="col-1">
                                            <div class="woocommerce-billing-fields">
                                                <h3>Login to Account</h3>
                                                <p class="form-row form-row form-row-first validate-required" id="">
                                                  <label for="billing_first_name" class="">
                                                    Email Address <abbr class="required" title="required">*</abbr>
                                                  </label>
                                                  <input type="email" class="input-text " name="email" placeholder="Enter Email Address" value="">
                                                  <span class="text-danger" style="color: red;"><?php echo form_error('email'); ?></span>
                                                </p>
                                                <p class="form-row form-row form-row-first validate-required" id="">
                                                  <label for="billing_first_name" class="">
                                                    Password <abbr class="required" title="required">*</abbr>
                                                  </label>
                                                  <input type="password" class="input-text " name="password" placeholder="Enter Password">
                                                  <span class="text-danger" style="color: red;"><?php echo form_error('cpassword'); ?></span>
                                                </p>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                  <div class="form-row place-order">
                                    <input type="submit" class="button alt" name="loginBtn" value="Login">
                                  </div>
                              </form>
                              <?php
                                if($this->form_validation->run() == TRUE){
                                  echo $this->session->flashdata('msg');
                                  echo $this->session->flashdata('msgError');
                                }
                              ?>
                        </div>
                    </div>
                </article>
              </div>
          </div>
        </div>
    </div>
</div>

</body>
</html>
