<?php
function blogpress_theme_setup()
{
    //Theme Support
    add_theme_support('automatic-feed-links');

    add_theme_support('title-tag');

    add_theme_support('custom-logo');

    add_theme_support('post-thumbnails');

    add_image_size("blogpress-square", 400, 250, true);

    add_image_size('top-featured', 756, 510, array('center', 'center'));
}
add_action('after_setup_theme', 'blogpress_theme_setup');


// Excerpt Length
function blogpress_excerpt($length)
{
    return 12;
}
add_filter('excerpt_length', 'blogpress_excerpt');

function custom_excerpt($content)
{
    return wp_trim_words($content, 12, '.');
}

// Search
function blogpress_search($form)
{
    $homedir      = home_url('/');
    $label        = __('Search for:', 'blogpress');
    $button_label = __('Search', 'blogpress');
    $newform      = <<<FORM
    <form role='search' method='get' class='Search' action='{$homedir}'>
        <input type='text' class='form-control Search-box' name='s' id='Search-box' placeholder='Search'>
        <label for='Search-box' class='Search-box-label'>
        <span class='lnr lnr-magnifier'></span>
        </label>
        <span class='Search-close'>
        <span class='lnr lnr-cross'></span>
        </span>
    </form>
    FORM;

    return $newform;
}

add_filter('get_search_form', 'blogpress_search');
