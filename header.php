<!DOCTYPE HTML>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('homepage is_preload'); ?>>

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
                    <!-- Logo -->
                    <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                        <a href="<?php echo site_url(); ?>">
                            <?php the_custom_logo(); ?>
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-ad.jpg" alt>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu" id="main-menu">
            <div class="row align-items-center justify-content-between">
                <nav id="nav-menu-container">
                    <?php
                    // Menus
                    wp_nav_menu(array(
                        'theme_location' => 'primary_menu',
                        'menu_class' => 'nav-menu',
                    ));
                    ?>
                    <!-- <ul class="nav-menu">
                        <li class="menu-active"><a href="index.html">Home</a></li>
                        <li><a href="archive.html">Archive</a></li>
                        <li><a href="category.html">Category</a></li>
                        <li class="menu-has-children"><a href>Post Types</a>
                            <ul>
                                <li><a href="standard-post.html">Standard Post</a></li>
                                <li><a href="image-post.html">Image Post</a></li>
                                <li><a href="gallery-post.html">Gallery Post</a></li>
                                <li><a href="video-post.html">Video Post</a></li>
                                <li><a href="audio-post.html">Audio Post</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul> -->
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