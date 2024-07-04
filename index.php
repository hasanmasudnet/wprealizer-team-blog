<?php get_header(); ?>

<!-- Main -->

<div class="site-main-container">

    <section class="top-post-area pt-10">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-nav-area">
                        <h1 class="text-white"><?php the_title(); ?></h1>
                        <p class="text-white link-nav"><a href="<?php echo home_url(); ?>">Home </a> <span class="lnr lnr-arrow-right"></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


<!-- Footer -->
<?php get_footer(); ?>