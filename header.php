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
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
      <?php wp_head(); ?>
   </head>
   <body id="top" <?php body_class() ?>>
      <header>
         <div class="header-top">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
                     <?php
                        if(is_active_sidebar("header-social-icon")){
                           dynamic_sidebar("header-social-icon");
                        }
                     ?>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
                     
                     <?php
                        if(is_active_sidebar("header-address")){
                           dynamic_sidebar("header-address");
                        }
                     ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="logo-wrap">
            <div class="container">
               <div class="row justify-content-between align-items-center">
                  <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                     <?php 
                        if(has_custom_logo()){
                           the_custom_logo();
                        }else{
                           echo "<h3><a href='".home_url( "/" )."'>".get_bloginfo('name')."</a></h3>";
                        }
                     ?>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
                     
                     <?php
                        if(is_active_sidebar("header-cta")){
                           dynamic_sidebar("header-cta");
                        }
                     ?>
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
                  <?php get_search_form(); ?>
               </div>
            </div>
         </div>
      </header>