<?php get_header(); ?>

<div class="container">
    <main class="site-main" style="margin: 120px auto;">

        <?php if (have_posts()) : ?>
            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    printf(esc_html__('Search Results for: %s', 'blogpress'), '<span>' . get_search_query() . '</span>');
                    ?>
                </h1>
            </header>

            <?php
            while (have_posts()) : the_post();
            ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                    </header>

                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                </article><!-- #post-<?php the_ID(); ?> -->
            <?php endwhile; ?>

            <?php the_posts_pagination(); ?>

        <?php else : ?>

            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e('Nothing Found', 'blogpress'); ?></h1>
            </header>

            <div class="page-content mt-5">
                <p class="mt-10"><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'blogpress'); ?></p>
            </div>

        <?php endif; ?>

    </main>
</div>

<?php get_footer(); ?>