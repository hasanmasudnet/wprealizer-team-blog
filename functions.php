<?php
function magazine_theme_enqueue_styles()
{
    // link css
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700', false);
    wp_enqueue_style('linearicons', get_template_directory_uri() . '/assets/css/linearicons.css', array(), null);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), null);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), null);
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), null);
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), null);
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), null);
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), null);
    wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css', array(), null);
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), null);

    // link js
    wp_enqueue_script('jquery-2.2.4', get_template_directory_uri() . '/assets/js/vendor/jquery-2.2.4.min.js', array('jquery'), null, true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '1.12.9', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA', array(), null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/easing.min.js', array('jquery'), null, true);
    wp_enqueue_script('hoverIntent', get_template_directory_uri() . '/assets/js/hoverIntent.js', array('jquery'), null, true);
    wp_enqueue_script('superfish', get_template_directory_uri() . '/assets/js/superfish.min.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-ajaxchimp', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('mn-accordion', get_template_directory_uri() . '/assets/js/mn-accordion.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('mail-script', get_template_directory_uri() . '/assets/js/mail-script.js', array('jquery'), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
    wp_enqueue_script('google-analytics', 'https://www.googletagmanager.com/gtag/js?id=UA-23581568-13', array(), null, true);
}
add_action('wp_enqueue_scripts', 'magazine_theme_enqueue_styles');



function add_google_analytics()
{
?>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-23581568-13');
    </script>
<?php
}
add_action('wp_head', 'add_google_analytics');

function my_theme_setup()
{
    add_theme_support('post-thumbnails', array(
        'post',
        'page',
        'service',
    ));

    // Set custom dimensions for post thumbnails
    add_image_size('custom-thumbnail', 130, 130, array('center', 'center'));


    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 130,
        'width'       => 130,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu'),
    ));
}

add_action('after_setup_theme', 'my_theme_setup');

// Add customizer settings for the second logo
function magazine_theme_customize_register($wp_customize)
{
    // Adding a section for the right logo
    $wp_customize->add_section('right_logo_section', array(
        'title'       => __('Right Logo', 'magazine-theme'),
        'priority'    => 30,
        'description' => __('Upload a logo for the right side.', 'magazine-theme'),
    ));

    // Adding the setting for the right logo
    $wp_customize->add_setting('right_logo', array(
        'default'     => 'rfgvbsdx',
        'transport'   => 'refresh',
    ));

    // Adding the control for the right logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'right_logo', array(
        'label'       => __('Right Logo', 'magazine-theme'),
        'section'     => 'right_logo_section',
        'settings'    => 'right_logo',
    )));
}
add_action('customize_register', 'magazine_theme_customize_register');

//Breaking news 

function magazine_breaking_news()
{
    // Breaking News
    echo '<div class="col-lg-12">
                    <div class="news-tracker-wrap">
                        <h6><span>Breaking News:</span> <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
                    </div>
            </div>';
}

add_action('get_magazine_breaking_news', 'magazine_breaking_news');

?>