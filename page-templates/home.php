<?php /* Template Name: Homepage */ ?>


<?php get_header();  ?>

<div class="site-main-container">

    <section class="top-post-area pt-10">
        <div class="container no-padding">
            <div class="row small-gutters">

                <?php
                $top_posts_query = new WP_Query(array(
                    'posts_per_page' => 3,
                    'offset' => 0
                ));
                if ($top_posts_query->have_posts()) : ?>
                    <?php $counter = 0;
                    while ($top_posts_query->have_posts()) : $top_posts_query->the_post();
                        $counter++; ?>

                        <?php if ($counter == 1) : ?>
                            <div class="col-lg-8 top-post-left">
                                <div class="feature-image-thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('top-featured', ['class' => 'img-fluid']); ?>
                                    <?php endif; ?>
                                </div>

                                <div class="top-post-details">
                                    <ul class="tags">
                                        <li><?php the_category(' '); ?></li>
                                    </ul>
                                    <a href="<?php the_permalink(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a>

                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span><?php the_author(); ?></a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo get_the_date(); ?></a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span><?php comments_number(); ?></a></li>
                                    </ul>

                                </div>
                            </div>
                        <?php elseif ($counter == 2 || $counter == 3) : ?>
                            <?php if ($counter == 2) : ?>
                                <div class="col-lg-4 top-post-right">
                                <?php endif; ?>

                                <div class="single-top-post <?php echo $counter == 3 ? 'mt-10' : ''; ?>">
                                    <div class="feature-image-thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="top-post-details">
                                        <ul class="tags">
                                            <li><?php the_category(' '); ?></li>
                                        </ul>
                                        <a href="<?php the_permalink(); ?>">
                                            <h4><?php the_title(); ?></h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span><?php the_author(); ?></a></li>
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo get_the_date(); ?></a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span><?php comments_number(); ?></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <?php if ($counter == 3) : ?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php endif; ?>

                <div class="col-lg-12">
                    <div class="news-tracker-wrap">
                        <h6><span>Breaking News:</span> <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-8 post-list">

                    <div class="latest-post-wrap">
                        <h4 class="cat-title">Latest News</h4>
                        <?php
                        $latest_args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'offset' => 3
                        );
                        $latest_post_query = new WP_Query($latest_args);

                        if ($latest_post_query->have_posts()) :

                            while ($latest_post_query->have_posts()) : $latest_post_query->the_post(); ?>
                                <div class="single-latest-post row align-items-center">
                                    <div class="col-lg-5 post-left">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                                            <?php endif; ?>
                                        </div>
                                        <ul class="tags">
                                            <li><a href="<?php the_permalink(); ?>"><?php echo the_category(' '); ?></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7 post-right">
                                        <a href="<?php the_permalink(); ?>">
                                            <h4><?php the_title(); ?></h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span><?php the_author(); ?></a></li>
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo get_the_date(); ?></a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span><?php comments_number(); ?></a></li>
                                        </ul>
                                        <p class="excert">
                                            <?php echo the_excerpt(); ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        else : ?>
                            <p><?php _e('Sorry, no posts found.'); ?></p>
                        <?php endif; ?>
                    </div>


                    <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-ad.jpg" alt>
                    </div>


                    <div class="popular-post-wrap">
                        <h4 class="title">Popular Posts</h4>
                        <div class="feature-post relative">
                            <div class="feature-img relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/f1.jpg" alt>
                            </div>
                            <div class="details">
                                <ul class="tags">
                                    <li><a href="#">Food Habit</a></li>
                                </ul>
                                <a href="image-post.html">
                                    <h3>A Discount Toner Cartridge Is Better Than Ever.</h3>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-20 medium-gutters">
                            <div class="col-lg-6 single-popular-post">
                                <div class="feature-img-wrap relative">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/f2.jpg" alt>
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">Travel</a></li>
                                    </ul>
                                </div>
                                <div class="details">
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is
                                            Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                    </ul>
                                    <p class="excert">
                                        Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 single-popular-post">
                                <div class="feature-img-wrap relative">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/f3.jpg" alt>
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">Travel</a></li>
                                    </ul>
                                </div>
                                <div class="details">
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is
                                            Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                    </ul>
                                    <p class="excert">
                                        Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="relavent-story-post-wrap mt-30">
                        <h4 class="title">Relavent Stories</h4>
                        <div class="relavent-story-list-wrap">
                            <div class="single-relavent-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/r1.jpg" alt>
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">Lifestyle</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is
                                            Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                    <p class="excert">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                    </p>
                                </div>
                            </div>
                            <div class="single-relavent-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/r2.jpg" alt>
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">Science</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is
                                            Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                    <p class="excert">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                    </p>
                                </div>
                            </div>
                            <div class="single-relavent-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/r3.jpg" alt>
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">Travel</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is
                                            Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                    <p class="excert">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebars-area">
                        <div class="single-sidebar-widget editors-pick-widget">
                            <h6 class="title">Editor’s Pick</h6>
                            <div class="editors-pick-post">
                                <div class="feature-img-wrap relative">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/e1.jpg" alt>
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">Travel</a></li>
                                    </ul>
                                </div>
                                <div class="details">
                                    <a href="image-post.html">
                                        <h4 class="mt-20">A Discount Toner Cartridge Is
                                            Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                    </ul>
                                    <p class="excert">
                                        Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
                                    </p>
                                </div>
                                <div class="post-lists">
                                    <div class="single-post d-flex flex-row">
                                        <div class="thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e2.jpg" alt>
                                        </div>
                                        <div class="detail">
                                            <a href="image-post.html">
                                                <h6>Help Finding Information
                                                    Online is so easy</h6>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-post d-flex flex-row">
                                        <div class="thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e3.jpg" alt>
                                        </div>
                                        <div class="detail">
                                            <a href="image-post.html">
                                                <h6>Compatible Inkjet Cartr
                                                    world famous</h6>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-post d-flex flex-row">
                                        <div class="thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e4.jpg" alt>
                                        </div>
                                        <div class="detail">
                                            <a href="image-post.html">
                                                <h6>5 Tips For Offshore Soft
                                                    Development </h6>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget ads-widget">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/sidebar-ads.jpg" alt>
                        </div>
                        <div class="single-sidebar-widget newsletter-widget">
                            <h6 class="title">Newsletter</h6>
                            <p>
                                Here, I focus on a range of items
                                andfeatures that we use in life without
                                giving them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="col-autos">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" type="text">
                                    </div>
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p>
                                You can unsubscribe us at any time
                            </p>
                        </div>
                        <div class="single-sidebar-widget most-popular-widget">
                            <h6 class="title">Most Popular</h6>
                            <div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m1.jpg" alt>
                                </div>
                                <div class="details">
                                    <a href="image-post.html">
                                        <h6>Help Finding Information
                                            Online is so easy</h6>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m2.jpg" alt>
                                </div>
                                <div class="details">
                                    <a href="image-post.html">
                                        <h6>Compatible Inkjet Cartr
                                            world famous</h6>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m3.jpg" alt>
                                </div>
                                <div class="details">
                                    <a href="image-post.html">
                                        <h6>5 Tips For Offshore Soft
                                            Development </h6>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m4.jpg" alt>
                                </div>
                                <div class="details">
                                    <a href="image-post.html">
                                        <h6>5 Tips For Offshore Soft
                                            Development </h6>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget social-network-widget">
                            <h6 class="title">Social Networks</h6>
                            <ul class="social-list">
                                <li class="d-flex justify-content-between align-items-center fb">
                                    <div class="icons d-flex flex-row align-items-center">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                        <p>983 Likes</p>
                                    </div>
                                    <a href="#">Like our page</a>
                                </li>
                                <li class="d-flex justify-content-between align-items-center tw">
                                    <div class="icons d-flex flex-row align-items-center">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                        <p>983 Followers</p>
                                    </div>
                                    <a href="#">Follow Us</a>
                                </li>
                                <li class="d-flex justify-content-between align-items-center yt">
                                    <div class="icons d-flex flex-row align-items-center">
                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                        <p>983 Subscriber</p>
                                    </div>
                                    <a href="#">Subscribe</a>
                                </li>
                                <li class="d-flex justify-content-between align-items-center rs">
                                    <div class="icons d-flex flex-row align-items-center">
                                        <i class="fa fa-rss" aria-hidden="true"></i>
                                        <p>983 Subscribe</p>
                                    </div>
                                    <a href="#">Subscribe</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


<?php get_footer();  ?>