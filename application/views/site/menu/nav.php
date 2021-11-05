
    <!-- Define a view port to mobile devices to use - telling the browser to assume that
    the page is as wide as the device (width=device-width)
     and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('images/favicon-new.png'); ?>">

    <!-- Google Web Font -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,800,900,300,200" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- bootstrap Style Sheet (caution ! - Do not edit this stylesheet) -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css'); ?>">
    <!-- Flexslider stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('css/flexslider.css'); ?>">
    <!-- Animations stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('css/animations.css'); ?>">
    <!-- Awesome Font stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.css'); ?>">
    <!-- Datepciker stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('css/datepicker.css'); ?>">
    <!-- Swipebox stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('css/swipebox.css'); ?>">
    <!-- meanmenu stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('css/meanmenu.css'); ?>">
    <!-- Include the site main stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('css/woocommerce.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/main.css'); ?>">

    <!-- Include the site responsive  stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('css/custom-responsive.css'); ?>">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?php echo base_url('js/respond.min.js'); ?>"></script>
    <![endif]-->

    <div class="header-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-5 ">
                    <p>Welcome to Alternative Advanced Medical System</p>
                </div>
                <!--opening hours-->
                <div class="col-md-7 text-right">
                    <p>
                        Opening Hours : <span>Monday to Saturday - 8am to 9pm</span>
                        <br class="visible-xs">Contact : <span>+1-800-654-3210</span>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <header id="header">
        <div class="container">

            <!-- Website Logo -->
            <div class="logo clearfix">
                <a href="<?php echo base_url('home'); ?>">
                    <img src="<?php echo base_url('images/temp-images/logo-two.png'); ?>" alt="Alternative Advanced Medical System">
                </a>
            </div>

            <!-- Main Navigation -->
            <nav class="main-menu">
                <ul class="header-nav clearfix" id="menu-main-menu">
                    <li>
                        <a href="<?php echo site_url('home'); ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('shopping/product'); ?>">Our Products</a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('shopping/cart'); ?>">Shopping Cart(<?php echo $this->cart->total_items(); ?>)</a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('services'); ?>">Our Services</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('about'); ?>">About Us</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('contact'); ?>">Contact Us</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('testimonial'); ?>">Testimonials</a>
                    </li>
                    <?php if($this->session->userdata('ustatus') == "Admin"){ ?>
        							<li class="dropdown">
        								<a href="<?php echo site_url('admin/dashboard'); ?>">Admin</a>
        							</li>
        							<li class="dropdown">
        								<a href="<?php echo site_url('account/logout'); ?>">Logout</a>
        							</li>
                    <?php }else if($this->session->userdata('login')){ ?>
                      <li class="dropdown">
                        <a href="<?php echo site_url('ewallet/dashboard'); ?>">My Ewallet</a>
                      </li>
                      <li class="dropdown">
                        <a href="<?php echo site_url('account/logout'); ?>">Logout</a>
                      </li>
                    <?php }else{ ?>
                    <li class="dropdown">
                      <a href="<?php echo site_url('account/login'); ?>">Login</a>
                    </li>
                    <li class="dropdown">
                      <a href="<?php echo site_url('account/register'); ?>">Register</a>
                    </li>
                    <?php } ?>
                </ul>
            </nav>
            <div id="responsive-menu-container"></div>
        </div>
    </header>
