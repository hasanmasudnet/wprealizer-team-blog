<?php get_header(); ?>

<div class="content-area">
    <main class="site-main">

        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    printf( esc_html__( 'Search Results for: %s', 'philosophy' ), '<span>' . get_search_query() . '</span>' );
                    ?>
                </h1>
            </header>

            <?php
            // Start the Loop.
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                    </header><!-- .entry-header -->

                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-summary -->
                </article><!-- #post-<?php the_ID(); ?> -->
            <?php endwhile; ?>

            <?php the_posts_pagination(); ?>

        <?php else : ?>

            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'philosophy' ); ?></h1>
            </header>

            <div class="page-content">
                <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'philosophy' ); ?></p>
                <?php get_search_form(); ?>
            </div><!-- .page-content -->

        <?php endif; ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
