<!--page footer-->
<footer id="main-footer" class="site-footer clearfix">
    <div class="container">
        <div class="row">


            <!--about widget-->
            <div class="col-md-3 col-sm-6">
                <section  class="widget animated fadeInLeft">
                    <h3 class="title">About Advanced Alternative Medical Solutions</h3>
                    <div class="textwidget">
                        <p>Alternative Healthcare medicine is a healing practice that is not related to any of the scientific
                          methods of treatment. It consists of a wide ranhe of health care practices, natural products and
                          therapies, ranging from natural herbs to be modified by products extract.</p>
                    </div>
                </section>
            </div>


            <!--general services-->
            <div class="col-md-3 col-sm-6  ">
                <section class="widget animated fadeInLeft ae-animation-fadeInLeft">
                    <h3 class="title">General Services</h3>
                    <ul>
                        <li>
                            <a href="#">Immunization</a>
                        </li>
                        <li>
                            <a href="#">Medical Services</a>
                        </li>
                        <li>
                            <a href="#">Surgical</a>
                        </li>
                        <li>
                            <a href="#">Diagnostic Services</a>
                        </li>
                        <li>
                            <a href="#">Pharmacy</a>
                        </li>
                    </ul>
                </section>
            </div>

            <div class="clearfix visible-sm"></div>

            <!--recent posts-->
            <div class="col-md-3 col-sm-6  ">
                <section  class="widget animated fadeInLeft">
                    <h3 class="title">Latest Tweets</h3>
                    <ul id="twitter_update_list">
                      <li>No Tweet Loaded !</li>
                    </ul>
                </section>
            </div>
            <!--subscription form-->
            <div class="col-md-3 col-sm-6  ">
                <section  class="widget animated fadeInLeft">
                    <h3 class="title">Subscribe!</h3>
                    <div class="textwidget">Subscribe to my blog for updates</div>
                    <div>

                        <form name="subs-form" id="subs_form" class="subs-form" method="post" action="subscription-handler.php">


                            <label for="subs-name">Name:</label>
                            <input name="name" id="subs-name" class="required" type="text" title="* Please provide your name" /><br/>

                            <label for="subs-email">Email:</label>
                            <input name="email" class="required email" id="subs-email" type="text" title="* Please provide a valid email address" /><br/>

                            <input type="hidden" name="action" value="send_message">
                            <input type="hidden" name="nonce" value="">

                            <input id="subs-form-submit" name="Submit" type="submit" value="SUBMIT" />
                            <img src="images/loader3.gif" id="subs-loader" alt="Loading...">
                            <div id="subs-error-container"></div>
                            <div id="subs-response-container"></div>

                        </form>

                    </div>

                </section>
            </div>
        </div>
        <div class="footer-bottom animated fadeInDown clearfix">
            <div class="row">
                <div class="col-sm-7">
                    <p>&copy; Copyright 2019. Powered by Advanced Alternative Medical Technologies</p>
                </div>
                <!--footer social icons-->
                <div class="col-sm-5 clearfix">
                    <ul class="footer-social-nav">
                        <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a target="_blank" href="skype:skypeusername?add"><i class="fa fa-skype"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#top" id="scroll-top"></a>

<script type='text/javascript' id='quick-js'></script>
<script src="<?php echo base_url('js/jquery-2.2.3.min.js'); ?>"></script>
<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.flexslider-min.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.swipebox.min.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.isotope.min.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.appear.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.ui.core.min.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.ui.datepicker.min.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.validate.min.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.form.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.autosize.min.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.meanmenu.min.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.velocity.min.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery-twitterFetcher.js'); ?>"></script>
<script src="<?php echo base_url('js/respond.min.js'); ?>"></script>
<script src="<?php echo base_url('js/custom.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery-migrate-1.2.1.min.js'); ?>"></script>
