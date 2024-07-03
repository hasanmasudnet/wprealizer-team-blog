<?php get_header();
global $wp;
?>
<?php if (is_home() || is_front_page()) : ?>
    <section class="top-post-area pt-10">
        <?php echo get_template_part('template-parts/post/latest', 'post'); ?>
    </section>

    <?php else :
    while (have_posts()) : the_post(); ?>
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-nav-area">
                            <h1 class="text-white"><?php echo ucfirst(get_the_title()); ?></h1>

                            <p class="text-white link-nav"><a href="<?php echo home_url() ?>">Home </a> <span class="lnr lnr-arrow-right"></span><a href="<?php echo home_url($wp->request) ?>"><?php echo ucfirst(get_the_title()) ?></a></p>
                        </div>
                    </div>
                    <?php do_action('get_magazine_breaking_news'); ?>
                </div>
            </div>
        </section>
<?php
    endwhile;
endif;
get_footer();
?>