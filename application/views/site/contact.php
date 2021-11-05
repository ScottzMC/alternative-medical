<!DOCTYPE html> <html lang="en-US"><!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <!-- Title -->
    <title>Advanced Alternative Medical Solutions || Contact Us</title>
</head>

<body>

<!--banner-->
<div class="banner clearfix"></div>
<div class="page-top clearfix">
    <!--page main heading-->
    <div class="container">
        <h1 class="entry-title">Contact Us</h1>
    </div>
</div>

<div class="contact-page clearfix">
    <div class="container">

        <!--contact form section-->
        <div class="blog-page-single clearfix">
            <article class="page type-page hentry  clearfix">
                <div class="full-width-contents">
                    <div class="entry-content">
                        <h2>Get in Touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,<br />
                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
                    </div>
                </div>
            </article>
        </div>

        <div class="clearfix"></div>
        <!--contact form-->
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-6 ">
                <form id="contact_form" class="contact-form" action="contact_form_handler.php" method="post">
                    <input type="text" name="name" id="name" class="required" placeholder="Full Name" title="* Please provide your name">
                    <input type="text" name="email" id="email" class="required email" placeholder="Email Address" title="* Please provide a valid email address">
                    <input type="text" name="number" id="number" placeholder="Phone Number">
                    <input type="hidden" name="action" value="send_message">
                    <input type="hidden" name="nonce" value="">
                    <textarea name="message" id="message" class="required" cols="30" rows="5"  placeholder="Message" title="* Please provide your message"></textarea>
                    <input id="contact-form-submit" class="form-submit-btn" type="submit" value="SUBMIT">
                    <img src="images/loader.gif" id="contact-loader" class="ajax-loader" alt="Loading...">
                    <div id="error-container"></div>
                    <div id="response-container"></div>
                </form>
            </div>

            <!--contact detail-->
            <div class="col-lg-6 col-md-6 col-sm-6  col-lg-offset-1 col-md-offset-1">
                <div class="contact-sidebar clearfix">
                    <article class="address-area clearfix">
                        <h2><span>Medical Press</span></h2>
                        <div class="row">
                            <div class="col-md-6">
                                <address>121 King Street, Melbourne
                                    Victoria 3000 Australia</address>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <strong>Phone :</strong>+1-800-123-4567
                                </p>
                                <p>
                                    <strong>Fax :</strong>+1-123-456-7890
                                </p>
                            </div>
                        </div>
                    </article>
                    <!--social icons-->
                    <article class="social-icon clearfix">
                        <h5><span>Social :</span></h5>
                        <ul class="clearfix">
                            <li class="twitter-icon"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="facebook-icon"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="google-icon"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin-icon"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="instagram-icon"><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="youtube-icon"><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="skype-icon"><a target="_blank" href="skype:skypeusername?add"><i class="fa fa-skype"></i></a></li>
                            <li class="rss-icon"><a target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>
