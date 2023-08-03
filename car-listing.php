<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Hire Services | Our Services</title>
<!-- Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!-- Custom Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!-- Owl Carousel slider -->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!-- Slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!-- Bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!-- FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  

<!-- Header --> 
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Page Header -->
<section class="page-header services-page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Our Services</h1>
      </div>
      <ul class="custom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Our Services</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay -->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header --> 

<!-- Services -->
<section class="services-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="services-content">
          <h2>Welcome to Car Hire Services</h2>
          <p>We provide a range of premium car rental services to cater to your travel needs. Whether you're planning a business trip, family vacation, or just need a ride around town, we've got you covered.</p>
          <p>Our fleet of well-maintained vehicles offers a variety of options to choose from, including sedans, SUVs, luxury cars, and more. With competitive prices and excellent customer service, we ensure a hassle-free and enjoyable rental experience.</p>
          <p>Explore our services below and find the perfect car for your journey.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="service-box">
          <div class="service-icon"> <i class="fa fa-car"></i> </div>
          <div class="service-content">
            <h4>Wide Range of Vehicles</h4>
            <p>Choose from a diverse selection of vehicles, including economy cars, luxury models, SUVs, and more.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-box">
          <div class="service-icon"> <i class="fa fa-road"></i> </div>
          <div class="service-content">
            <h4>Flexible Rental Options</h4>
            <p>Whether you need a car for a day, a week, or longer, we offer flexible rental periods to suit your plans.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-box">
          <div class="service-icon"> <i class="fa fa-users"></i> </div>
          <div class="service-content">
            <h4>Excellent Customer Support</h4>
            <p>Our dedicated customer support team is available to assist you with any inquiries or assistance you may need.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Services --> 

<!-- Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer --> 

<!-- Back to top -->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up"></i> </a> </div>
<!-- /Back to top --> 

<!-- Login Form -->
<?php include('includes/login.php');?>
<!-- /Login Form --> 

<!-- Register Form -->
<?php include('includes/registration.php');?>
<!-- /Register Form --> 

<!-- Forgot Password Form -->
<?php include('includes/forgotpassword.php');?>
<!-- /Forgot Password Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script

