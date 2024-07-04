<?php get_header(); ?>

<div class="search-area top-post-area" style="padding:80px 0;">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <main class="site-main">

               <?php if ( have_posts() ) : ?>
                  <header class="page-header text-center">
                     <h1 class="page-title">
                           <?php
                           printf( esc_html__( 'Search Results for: %s', 'philosophy' ), '<span>' . get_search_query() . '</span>' );
                           ?>
                     </h1>
                  </header>
                  <div class="row" style="margin-top:30px;">
                     <?php
                     // Start the Loop.
                     while ( have_posts() ) :
                        the_post();
                        $categories = get_the_category();
                        ?>
                        <div class="col-lg-4 col-md-6 top-post-right">
                           <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                              <div class="single-top-post">
                                 <div class="feature-image-thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
                                 </div>
                                 <div class="top-post-details">
                                    <ul class="tags">
                                       <?php if ( ! empty( $categories ) ) : ?>
                                          <li><a href="#"><?php echo esc_html( $categories[0]->name ); ?></a></li>
                                       <?php endif; ?>
                                    </ul>
                                    <?php the_title( sprintf( '<h4 class="entry-title"><a class="text-white" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
                                    <ul class="meta">
                                       <li><a href="#"><span class="lnr lnr-user"></span><?php print get_the_author();?></a></li>
                                       <li><a href="#"><span class="lnr lnr-calendar-full"></span><?php the_time( get_option('date_format') ); ?></a></li>
                                       <li><a href="#"><span class="lnr lnr-bubble"></span><?php comments_number();?></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </article>
                        </div>
                           <?php endwhile; ?>
                        <?php else : ?>
                  </div>
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-12">
                              <header class="page-header text-center " style="margin-bottom:20px;">
                                 <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'philosophy' ); ?></h1>
                              </header>

                              <div class="search-page-content text-center">
                                 <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'philosophy' ); ?></p>
                                 <?php get_search_form(); ?>
                              </div>
                        </div>
                     </div>
                  </div>
               <?php endif; ?>
            </main>
         </div>
      </div>
   </div>
</div>

<?php get_footer(); ?>
