<?php
function blogpress_enqueue_file()
{
    // Enqueue styles
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('linearicons', get_template_directory_uri() . '/assets/css/linearicons.css', array(), '1.0.0');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '4.0.0');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0.0');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0.0');
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0');
    wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css', array(), '1.0.0');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');

    // Enqueue scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/easing.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('hoverIntent', get_template_directory_uri() . '/assets/js/hoverIntent.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), '1.12.1', true);
    wp_enqueue_script('ajaxchimp', get_template_directory_uri() . '/assets/js/ajaxchimp.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('mail-script', get_template_directory_uri() . '/assets/js/mail-script.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('mn-accordion', get_template_directory_uri() . '/assets/js/mn-accordion.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/nice-select.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('superfish', get_template_directory_uri() . '/assets/js/superfish.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'blogpress_enqueue_file');

// Google Font
function blogpress_gfont()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700', false);
}
add_action('wp_enqueue_scripts', 'blogpress_gfont');
