<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon">

<!-- vector map CSS -->
<link href="<?php echo base_url('vendors/vectormap/jquery-jvectormap-2.0.2.css'); ?>" rel="stylesheet" type="text/css"/>

<!-- Custom Fonts -->
  <link href="<?php echo base_url('dist/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

<!-- Data table CSS -->
<link href="<?php echo base_url('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css'); ?>" rel="stylesheet" type="text/css"/>

<link href="<?php echo base_url('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css'); ?>" rel="stylesheet" type="text/css">

<!-- Morris Charts CSS -->
  <link href="<?php echo base_url('vendors/bower_components/morris.js/morris.css'); ?>" rel="stylesheet" type="text/css"/>

<!-- Chartist CSS -->
<link href="<?php echo base_url('vendors/bower_components/chartist/dist/chartist.min.css'); ?>" rel="stylesheet" type="text/css"/>

<!-- Calendar CSS -->
<link href="<?php echo base_url('vendors/bower_components/fullcalendar/dist/fullcalendar.css'); ?>" rel="stylesheet" type="text/css"/>
<!-- Bootstrap Wysihtml5 css -->
<link rel="stylesheet" href="<?php echo base_url('vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.css'); ?>" />

<!-- Custom CSS -->
<link href="<?php echo base_url('dist/css/style.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'); ?>" rel="stylesheet" type="text/css"/>

<!--Preloader-->
<div class="preloader-it">
  <div class="la-anim-1"></div>
</div>
<!--/Preloader-->
  <div class="wrapper">
    <!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <a id="toggle_nav_btn" style="margin-top: 20px;" class="toggle-left-nav-btn inline-block mr-20 pull-left" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
      <a href="<?php echo site_url('home'); ?>"><img class="brand-img pull-left" src="<?php echo base_url('assets/images/logo.png'); ?>" alt="brand"/></a>
    </nav>
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
    <div class="fixed-sidebar-left">
      <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li>
          <a href="<?php echo site_url('home'); ?>">
            <i class="icon-grid mr-10"></i>Back To Store
          </a>
        </li>
        <li>
          <a class="active" href="<?php echo site_url('admin/dashboard'); ?>">
            <i class="icon-picture mr-10"></i>Dashboard
          </a>
        </li>

        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr">
            <i class="icon-basket mr-10"></i>Product Details
            <span class="pull-right">
              <i class="fa fa-fw fa-angle-down"></i>
            </span>
          </a>
          <ul id="ecom_dr" class="collapse collapse-level-1">
            <li>
              <a href="<?php echo site_url('admin/product/view_product'); ?>">View Products</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin/product/add_product'); ?>">Add Product</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="<?php echo site_url('ewallet/dashboard'); ?>">
            <i class="icon-wallet mr-10"></i>Ewallet
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('account/logout'); ?>">
            <i class="icon-layers mr-10"></i>Logout
          </a>
        </li>
      </ul>
    </div>
  <!-- /Left Sidebar Menu -->
