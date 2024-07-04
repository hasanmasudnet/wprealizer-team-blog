<?php
// Sidebar Register Function

function blogpress_widget_register()
{
    register_sidebar(array(
        'name' => __('Main Widget Area', 'blogpress'),
        'id'   => 'sidebar-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'blogpress'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer Area-1', 'blogpress'),
        'id'   => 'footer-1',
        'description' => __('Apperas in the Footer', 'blogpress'),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => __('Footer Area-2', 'blogpress'),
        'id'   => 'footer-2',
        'description' => __('Apperas in the Footer', 'blogpress'),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => __('Footer Area-3', 'blogpress'),
        'id'   => 'footer-3',
        'description' => __('Apperas in the Footer', 'blogpress'),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => __('Footer Area-4', 'blogpress'),
        'id'   => 'footer-4',
        'description' => __('Apperas in the Footer', 'blogpress'),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => __('Footer Area-5', 'blogpress'),
        'id'   => 'footer-5',
        'description' => __('Apperas in the Footer', 'blogpress'),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => __('Footer Copyright', 'blogpress'),
        'id'   => 'footer-6',
        'description' => __('Note: Kindly use custom html', 'blogpress'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
}
add_action('widgets_init', 'blogpress_widget_register');
