<!DOCTYPE html>
<html lang="zxx" class="no-js">

<!-- Mirrored from preview.colorlib.com/theme/magazine/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jul 2024 10:59:05 GMT -->
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="shortcut icon" href="img/fav.html">

<meta name="author" content="colorlib">

<meta name="description" content>

<meta name="keywords" content>

<meta charset="UTF-8">

<title>Magazine</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body id="top" <?php body_class() ?>>
<header>
<div class="header-top">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
<ul>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
<li><a href="#"><i class="fa fa-behance"></i></a></li>
</ul>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
<ul>
<li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>+440 012 3654 896</span></a></li>
<li><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection#ef9c9a9f9f809d9baf8c8083809d83868dc18c8082"><span class="lnr lnr-envelope"></span><span><span class="__cf_email__" data-cfemail="f3808683839c8187b3909c9f9c819f9a91dd909c9e">[email&#160;protected]</span></span></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="logo-wrap">
<div class="container">
<div class="row justify-content-between align-items-center">
<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
<a href="index.html">
<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt>
</a>
</div>
<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/banner-ad.jpg" alt>
</div>
</div>
</div>
</div>
<div class="container main-menu" id="main-menu">
<div class="row align-items-center justify-content-between">
<nav id="nav-menu-container">

<?php
   wp_nav_menu( array(
      'theme_location' => 'topmenu',
      'menu_id'        => 'topmenu',
      'menu_class'     => 'nav-menu'
   ) )
?>
</nav>
<div class="navbar-right">
<form class="Search">
<input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
<label for="Search-box" class="Search-box-label">
<span class="lnr lnr-magnifier"></span>
</label>
<span class="Search-close">
<span class="lnr lnr-cross"></span>
</span>
</form>
</div>
</div>
</div>
</header>