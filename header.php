<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <script nonce="1d3ae121-59a8-4634-b957-4d1f2465cc7a">
        try {
            (function(w, d) {
                ! function(U, V, W, X) {
                    U[W] = U[W] || {};
                    U[W].executed = [];
                    U.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    U.zaraz._v = "5705";
                    U.zaraz.q = [];
                    U.zaraz._f = function(Y) {
                        return async function() {
                            var Z = Array.prototype.slice.call(arguments);
                            U.zaraz.q.push({
                                m: Y,
                                a: Z
                            })
                        }
                    };
                    for (const $ of ["track", "set", "debug"]) U.zaraz[$] = U.zaraz._f($);
                    U.zaraz.init = () => {
                        var ba = V.getElementsByTagName(X)[0],
                            bb = V.createElement(X),
                            bc = V.getElementsByTagName("title")[0];
                        bc && (U[W].t = V.getElementsByTagName("title")[0].text);
                        U[W].x = Math.random();
                        U[W].w = U.screen.width;
                        U[W].h = U.screen.height;
                        U[W].j = U.innerHeight;
                        U[W].e = U.innerWidth;
                        U[W].l = U.location.href;
                        U[W].r = V.referrer;
                        U[W].k = U.screen.colorDepth;
                        U[W].n = V.characterSet;
                        U[W].o = (new Date).getTimezoneOffset();
                        if (U.dataLayer)
                            for (const bg of Object.entries(Object.entries(dataLayer).reduce(((bh, bi) => ({
                                    ...bh[1],
                                    ...bi[1]
                                })), {}))) zaraz.set(bg[0], bg[1], {
                                scope: "page"
                            });
                        U[W].q = [];
                        for (; U.zaraz.q.length;) {
                            const bj = U.zaraz.q.shift();
                            U[W].q.push(bj)
                        }
                        bb.defer = !0;
                        for (const bk of [localStorage, sessionStorage]) Object.keys(bk || {}).filter((bm => bm.startsWith("_zaraz_"))).forEach((bl => {
                            try {
                                U[W]["z_" + bl.slice(7)] = JSON.parse(bk.getItem(bl))
                            } catch {
                                U[W]["z_" + bl.slice(7)] = bk.getItem(bl)
                            }
                        }));
                        bb.referrerPolicy = "origin";
                        bb.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(U[W])));
                        ba.parentNode.insertBefore(bb, ba)
                    };
                    ["complete", "interactive"].includes(V.readyState) ? zaraz.init() : U.addEventListener("DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
                        <ul>
                            <li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>+440 012 3654 896</span></a></li>
                            <li><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection#ef9c9a9f9f809d9baf8c8083809d83868dc18c8082"><span class="lnr lnr-envelope"></span><span><span class="__cf_email__" data-cfemail="f3808683839c8187b3909c9f9c819f9a91dd909c9e">[email&#160;protected]</span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                        <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        }
                        ?>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
                        <?php
                        $right_logo = get_theme_mod('right_logo');
                        if ($right_logo) {
                            echo '<img src="' . esc_url($right_logo) . '" alt="' . get_bloginfo('name') . '">';
                        } else {
                        ?>
                            <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/banner-ad.jpg" alt>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu" id="main-menu">
            <div class="row align-items-center justify-content-between">
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'primary-menu', 'container_id' => 'navbar-collapse-1',
                            'container_class' => 'navbar-collapse collapse navbar-right',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => false,
                            'items_wrap' => '%3$s',
                            'container' => false,
                            'depth' => '5',
                        )); ?>
                        <!-- <li class="menu-active"><a href="index.html">Home</a></li>
                        <li><a href="archive.html">Archive</a></li>
                        <li><a href="category.html">Category</a></li>
                        <li class="menu-has-children"><a href>Post Types</a>
                            <ul>
                                <li><a href="standard-post.html">Standard Post</a></li>
                                <li><a href="image-post.html">Image Post</a></li>
                                <li><a href="gallery-post.html">Gallery Post</a></li>
                                <li><a href="video-post.html">Video Post</a></li>
                                <li><a href="audio-post.html">Audio Post</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li> -->
                    </ul>
                </nav>
                <div class="navbar-right">
                    <form class="Search">
                        <input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
                        <label for="Search-box" class="Search-box-label">
                            <span class="lnr lnr-magnifier"></span>
                        </label>
                        <span class="Search-close">
                            <span class="lnr lnr-cross"></span>
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </header>
    