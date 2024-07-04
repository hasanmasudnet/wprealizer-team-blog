<?php

// Hook
function rianblog_theme_setup() {
    load_theme_textdomain( "rianblog" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "custom-logo" );
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support( "post-formats", array( "image", "gallery", "quote", "audio", "video", "link" ) );
    add_editor_style( "/assets/css/editor-style.css" );

    register_nav_menu( "topmenu", __( "Top Menu", "rianblog" ) );
    register_nav_menus( array(
        "footer-left"   => __( "Footer Left Menu", "rianblog" ),
        "footer-middle" => __( "Footer Middle Menu", "rianblog" ),
        "footer-middle-right"  => __( "Footer Middle Right Menu", "rianblog" ),
        "footer-right"  => __( "Footer Right Menu", "rianblog" ),
    ) );
    add_image_size("rianblog-home-square",400,400,true);
    remove_theme_support( 'widgets-block-editor' );
}

add_action( "after_setup_theme", "rianblog_theme_setup" );

// Assets
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


// Widgets
function rianblog_widgets() {
    register_sidebar( array(
        'name'          => __( 'Footer Left', 'rianblog' ),
        'id'            => 'footer-left',
        'description'   => __( 'Widgets in this area will be shown on footer section.', 'rianblog' ),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Middle', 'rianblog' ),
        'id'            => 'footer-middle',
        'description'   => __( 'Widgets in this area will be shown on footer section.', 'rianblog' ),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Middle Right', 'rianblog' ),
        'id'            => 'footer-middle-right',
        'description'   => __( 'Widgets in this area will be shown on footer section.', 'rianblog' ),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Middle', 'rianblog' ),
        'id'            => 'footer-right',
        'description'   => __( 'Widgets in this area will be shown on footer section.', 'rianblog' ),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Gallery', 'rianblog' ),
        'id'            => 'footer-gallery',
        'description'   => __( 'Widgets in this area will be shown on footer section.', 'rianblog' ),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Social Icon', 'rianblog' ),
        'id'            => 'footer-social-icon',
        'description'   => __( 'Widgets in this area will be shown on footer section.', 'rianblog' ),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

}

add_action( "widgets_init", "rianblog_widgets" );


// Search
function rianblog_search_form( $form ) {
    $homedir      = home_url( "/" );
    $label        = __( "Search for:", "rianblog" );
    $button_label = __( "Search", "rianblog" );
    $newform      = <<<FORM
    <form role="search" method="get" class="Search" action="{$homedir}">
        <input type="text" class="form-control Search-box" name="s" id="Search-box" placeholder="Search">
        <label for="Search-box" class="Search-box-label">
        <span class="lnr lnr-magnifier"></span>
        </label>
        <span class="Search-close">
        <span class="lnr lnr-cross"></span>
        </span>
    </form>
    FORM;

    return $newform;

}

add_filter( "get_search_form", "rianblog_search_form" );

// rianblog copyright text
function rianblog_copyright_text() {
    $homedirc = home_url( "/" );
    $default_text = sprintf(
        esc_html__( 'Copyright 2024 All rights reserved | This template is made with %s by %s', 'rianblog' ),
        '<i class="fa fa-heart-o" aria-hidden="true"></i>',
        '<a href="' . esc_url( $homedirc ) . '" target="_blank">Colorlib</a>'
    );

    $custom_text = get_theme_mod( 'rianblog_copyright', $default_text );

    // Use wp_kses_post to allow safe HTML
    echo wp_kses_post( $custom_text );
}
