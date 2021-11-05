<!DOCTYPE html>
<html lang="en-US"><!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <!-- Title -->
    <title>Advanced Alternative Medical Solution || Checkout</title>

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
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="blog-page-single clearfix">
                    <article id="post-237" class=" clearfix post-237 page type-page status-publish hentry">
                        <div class="full-width-contents">
                            <div class="entry-content">
                                <div class="woocommerce">
                                  <?php if(!empty($ship)){ foreach($ship as $shp){} }else{ echo ''; } ?>
                                    <form class="checkout woocommerce-checkout" action="<?php echo base_url('shopping/checkout/place_order'); ?>" method="post" enctype="multipart/form-data">
                                        <div class="col2-set" id="customer_details">
                                            <div class="col-1">
                                                <div class="woocommerce-billing-fields">
                                                    <h3>Billing Details</h3>
                                                    <p class="form-row form-row form-row-first validate-required" id="">
                                                      <label for="billing_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label>
                                                      <input type="text" class="input-text" name="firstname" id="" value="<?php echo $shp->firstname; ?>">
                                                      <span class="text-danger"><?php echo form_error('firstname'); ?></span>
                                                    </p>
                                                    <p class="form-row form-row form-row-last validate-required" id="">
                                                      <label for="billing_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label>
                                                      <input type="text" class="input-text" name="surname" value="">
                                                      <span class="text-danger"><?php echo form_error('surname'); ?></span>
                                                    </p>
                                                      <div class="clear"></div>
                                                    <p class="form-row form-row form-row-first validate-required validate-email" id="">
                                                      <label for="billing_email" class="">Email Address <abbr class="required" title="required">*</abbr></label>
                                                      <input type="email" class="input-text" name="email" id="" value="<?php echo $this->session->userdata('uemail'); ?>">
                                                    </p>
                                                    <p class="form-row form-row form-row-last validate-required validate-phone" id="">
                                                      <label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
                                                      <input type="tel" class="input-text" name="telephone" value=""></p>
                                                      <span class="text-danger"><?php echo form_error('telephone'); ?></span>
                                                      <div class="clear"></div>
                                                    <p class="form-row form-row form-row-wide address-field validate-required" id="">
                                                      <label for="billing_address_1" class="">Address 1<abbr class="required" title="required">*</abbr></label>
                                                      <input type="text" class="input-text" name="address1" value="<?php echo $shp->address1; ?>">
                                                      <span class="text-danger"><?php echo form_error('address1'); ?></span>
                                                    </p>
                                                    <p class="form-row form-row form-row-wide address-field validate-required" id="">
                                                      <label for="billing_address_1" class="">Address 2<abbr class="required" title="required">*</abbr></label>
                                                      <input type="text" class="input-text" name="address2" value="<?php echo $shp->address2; ?>">
                                                      <span class="text-danger"><?php echo form_error('address2'); ?></span>
                                                    </p>
                                                    <p class="form-row form-row form-row-wide address-field validate-required" id="" data-o_class="form-row form-row form-row-wide address-field validate-required">
                                                      <label for="billing_city" class="">Town / City <abbr class="required" title="required">*</abbr></label>
                                                      <input type="text" class="input-text" name="region" id="" value="">
                                                      <span class="text-danger"><?php echo form_error('region'); ?></span>
                                                    </p>
                                                    <p class="form-row form-row form-row-first address-field validate-required validate-state" id="billing_state_field">
                                                      <label for="billing_state" class="">State <abbr class="required" title="required">*</abbr></label>
                                                      <select name="state" id="billing_state" class="state_select" data-placeholder="">
                                                        <option value="">Select a state&hellip;</option><option value="AL" >Alabama</option><option value="AK" >Alaska</option><option value="AZ" >Arizona</option><option value="AR" >Arkansas</option><option value="CA" >California</option><option value="CO" >Colorado</option><option value="CT" >Connecticut</option><option value="DE" >Delaware</option><option value="DC" >District Of Columbia</option><option value="FL" >Florida</option><option value="GA" >Georgia</option><option value="HI" >Hawaii</option><option value="ID" >Idaho</option><option value="IL" >Illinois</option><option value="IN" >Indiana</option><option value="IA" >Iowa</option><option value="KS" >Kansas</option><option value="KY" >Kentucky</option><option value="LA" >Louisiana</option><option value="ME" >Maine</option><option value="MD" >Maryland</option><option value="MA" >Massachusetts</option><option value="MI" >Michigan</option><option value="MN" >Minnesota</option><option value="MS" >Mississippi</option><option value="MO" >Missouri</option><option value="MT" >Montana</option><option value="NE" >Nebraska</option><option value="NV" >Nevada</option><option value="NH" >New Hampshire</option><option value="NJ" >New Jersey</option><option value="NM" >New Mexico</option><option value="NY" >New York</option><option value="NC" >North Carolina</option><option value="ND" >North Dakota</option><option value="OH" >Ohio</option><option value="OK" >Oklahoma</option><option value="OR" >Oregon</option><option value="PA" >Pennsylvania</option><option value="RI" >Rhode Island</option><option value="SC" >South Carolina</option><option value="SD" >South Dakota</option><option value="TN" >Tennessee</option><option value="TX" >Texas</option><option value="UT" >Utah</option><option value="VT" >Vermont</option><option value="VA" >Virginia</option><option value="WA" >Washington</option><option value="WV" >West Virginia</option><option value="WI" >Wisconsin</option><option value="WY" >Wyoming</option><option value="AA" >Armed Forces (AA)</option><option value="AE" >Armed Forces (AE)</option><option value="AP" >Armed Forces (AP)</option><option value="AS" >American Samoa</option><option value="GU" >Guam</option><option value="MP" >Northern Mariana Islands</option><option value="PR" >Puerto Rico</option><option value="UM" >US Minor Outlying Islands</option><option value="VI" >US Virgin Islands</option></select></p>
                                                    <p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required" id="">
                                                      <label for="billing_country" class="">Country <abbr class="required" title="required">*</abbr></label>
                                                      <select name="country" id="billing_country" class="country_to_state country_select">
                                                        <option value="">Select a country&hellip;</option><option value="AX" >&#197;land Islands</option>
                                                        <option value="AF" >Afghanistan</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="PW" >Belau</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia</option><option value="BQ" >Bonaire, Saint Eustatius and Saba</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="VG" >British Virgin Islands</option><option value="BN" >Brunei</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="CV" >Cape Verde</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo (Brazzaville)</option><option value="CD" >Congo (Kinshasa)</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="HR" >Croatia</option><option value="CU" >Cuba</option><option value="CW" >Cura&Ccedil;ao</option><option value="CY" >Cyprus</option><option value="CZ" >Czech Republic</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard Island and McDonald Islands</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IR" >Iran</option><option value="IQ" >Iraq</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="CI" >Ivory Coast</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Laos</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macao S.A.R., China</option><option value="MK" >Macedonia</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia</option><option value="MD" >Moldova</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="AN" >Netherlands Antilles</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="NG" >Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="KP" >North Korea</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PS" >Palestinian Territory</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="QA" >Qatar</option><option value="IE" >Republic of Ireland</option><option value="RE" >Reunion</option><option value="RO" >Romania</option><option value="RU" >Russia</option><option value="RW" >Rwanda</option><option value="ST" >S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option><option value="BL" >Saint Barth&eacute;lemy</option><option value="SH" >Saint Helena</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="SX" >Saint Martin (Dutch part)</option><option value="MF" >Saint Martin (French part)</option><option value="PM" >Saint Pierre and Miquelon</option><option value="VC" >Saint Vincent and the Grenadines</option><option value="SM" >San Marino</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia/Sandwich Islands</option><option value="KR" >South Korea</option><option value="SS" >South Sudan</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="SD" >Sudan</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="SY" >Syria</option><option value="TW" >Taiwan</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom (UK)</option><option value="US"  selected='selected'>United States (US)</option><option value="UY" >Uruguay</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VA" >Vatican</option><option value="VE" >Venezuela</option><option value="VN" >Vietnam</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="WS" >Western Samoa</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option></select><noscript><input type="submit" name="woocommerce_checkout_update_totals" value="Update country" /></noscript></p>
                                                  <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <h3 id="order_review_heading">Your order</h3>
                                        <div id="order_review" class="woocommerce-checkout-review-order">
                                            <table class="shop_table woocommerce-checkout-review-order-table">
                                                <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
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
                                                    <td class="product-name">
                                                        <?php echo str_replace('-', ' ', $item['name']); ?> &nbsp; <strong class="product-quantity">× <?php echo $item['qty'];?></strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">$<?php echo $item['subtotal'];?></span>
                                                    </td>
                                                </tr>
                                                <?php echo form_close(); ?>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
                                                </tbody>
                                                <tfoot>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td><strong><span class="amount">$<?php echo number_format($this->cart->total()); ?></span></strong> </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                                <div class="form-row place-order">
                                                  <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="" value="Place order" data-value="Place order">
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                      if($this->form_validation->run() == FALSE){
                                        echo $this->session->flashdata('error');
                                      }
                                    ?>
                                </div>
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
