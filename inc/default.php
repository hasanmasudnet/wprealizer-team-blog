<?php
function blogpress_theme_setup()
{
    //Theme Support
    add_theme_support('automatic-feed-links');

    add_theme_support('title-tag');

    add_theme_support('custom-logo');

    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'blogpress_theme_setup');


// Excerpt Length
function blogpress_excerpt($length)
{
    return 12;
}
add_filter('excerpt_length', 'blogpress_excerpt');

add_image_size('top-featured', 756, 522, array('center', 'center'));
