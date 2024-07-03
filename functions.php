<?php

function rianblog_theme_setup() {
    load_theme_textdomain( "rianblog" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support( "post-formats", array( "image", "gallery", "quote", "audio", "video", "link" ) );
    add_editor_style( "/assets/css/editor-style.css" );

    register_nav_menu( "topmenu", __( "Top Menu", "rianblog" ) );
    add_image_size("rianblog-home-square",400,400,true);
}

add_action( "after_setup_theme", "rianblog_theme_setup" );


function rianblog_assets() {

    // CSS

    wp_enqueue_style( "fontawesome-css", get_theme_file_uri( "/assets/css/font-awesome.min.css" ), null, "1.0" );
    wp_enqueue_style( "animate-css", get_theme_file_uri( "/assets/css/animate.min.css" ), null, "1.0" );
    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/css/bootstrap.css" ), null, "1.0" );
    wp_enqueue_style( "jquery-ui-css", get_theme_file_uri( "/assets/css/jquery-ui.css" ), null, "1.0" );
    wp_enqueue_style( "linearicons-css", get_theme_file_uri( "/assets/css/linearicons.css" ), null, "1.0" );
    wp_enqueue_style( "magnific-popup-css", get_theme_file_uri( "/assets/css/magnific-popup.css" ), null, "1.0" );
    wp_enqueue_style( "owl-carousel-css", get_theme_file_uri( "/assets/css/owl.carousel.css" ), null, "1.0" );
    wp_enqueue_style( "magnific-popup-css", get_theme_file_uri( "/assets/css/magnific-popup.css" ), null, "1.0" );
    wp_enqueue_style( "main-css", get_theme_file_uri( "/assets/css/main.css" ), null, time() );
    wp_enqueue_style('rianblog-style', get_stylesheet_uri());

    // JS

    wp_enqueue_script( "easing-js", get_theme_file_uri( "/assets/js/easing.min.js" ), array( "jquery" ), time(), true);
    wp_enqueue_script( "hoverIntent-js", get_theme_file_uri( "/assets/js/hoverIntent.js" ), array( "jquery" ), time(), true );
    wp_enqueue_script( "ajaxchimp-js", get_theme_file_uri( "/assets/js/jquery.ajaxchimp.min.js" ), array( "jquery" ), time(), true );
    wp_enqueue_script( "magnificpopup-js", get_theme_file_uri( "/assets/js/jquery.magnific-popup.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "niceselect-js", get_theme_file_uri( "/assets/js/jquery.nice-select.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "jquery-ui-js", get_theme_file_uri( "/assets/js/jquery-ui.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "mail-script-js", get_theme_file_uri( "/assets/js/mail-script.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "mn-accordion-js", get_theme_file_uri( "/assets/js/mn-accordion.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "owl-carousel-js", get_theme_file_uri( "/assets/js/owl.carousel.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "superfish-menu", get_theme_file_uri( "/assets/js/superfish.menu.min.js" ), array( "jquery" ), time(), true );
    wp_enqueue_script( "main-js", get_theme_file_uri( "/assets/js/main.js" ), null, time() );
}

add_action( "wp_enqueue_scripts", "rianblog_assets" );