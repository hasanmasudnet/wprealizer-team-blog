
<?php

$rianblog_fp = new WP_Query(
   array(
       'meta_key'       => 'featured',
       'meta_value'     => '1',
       'posts_per_page' => 3
   )
);

$post_data = array();
while ( $rianblog_fp->have_posts() ) {
   $rianblog_fp->the_post();
   $categories = get_the_category();
   $post_data[] = array(
      "title" => get_the_title(),
      "date"=>get_the_date(),
      "thumbnail"=>get_the_post_thumbnail_url(get_the_ID(),"large"),
      "author"=>get_the_author_meta("display_name"),
      'cat'=>$categories[mt_rand(0,count($categories)-1)]->name,
      "comments" => get_comments_number()
   );
}

if ( $rianblog_fp->post_count > 1 ):
   ?>

   <section class="top-post-area pt-10">
      <div class="container no-padding">
         <div class="row small-gutters gy-4">
            <div class="col-lg-8 top-post-left">
               <div class="feature-image-thumb relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="<?php echo esc_url($post_data[0]['thumbnail']); ?>" alt>
               </div>
               <div class="top-post-details">
                  <ul class="tags">
                     <li><a href="#"><?php echo esc_html($post_data[0]['cat']) ?></a></li>
                  </ul>
                  <a href="#0">
                     <h3><?php echo esc_html($post_data[0]['title']); ?></h3>
                  </a>
                  <ul class="meta">
                     <li><a href="#"><span class="lnr lnr-user"></span><?php echo esc_html($post_data[0]['author']); ?></a></li>
                     <li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo esc_html($post_data[0]['date']); ?></a></li>
                     <li><a href="#"><span class="lnr lnr-bubble"></span><?php echo esc_html($post_data[0]['comments']); ?> Comments</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-4 top-post-right">
               <?php
                  for($i=1; $i<3;$i++):
                  ?>
                  <div class="single-top-post">
                     <div class="feature-image-thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="<?php echo esc_url($post_data[$i]['thumbnail']) ?>" alt>
                     </div>
                     <div class="top-post-details">
                        <ul class="tags">
                           <li><a href="#"><?php echo esc_html($post_data[$i]['cat']) ?></a></li>
                        </ul>
                        <a href="#0">
                           <h4><?php echo esc_html($post_data[$i]['title']); ?></h4>
                        </a>
                        <ul class="meta">
                           <li><a href="#"><span class="lnr lnr-user"></span><?php echo esc_html($post_data[$i]['author']); ?></a></li>
                           <li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo esc_html($post_data[$i]['date']); ?></a></li>
                           <li><a href="#"><span class="lnr lnr-bubble"></span><?php echo esc_html($post_data[$i]['comments']); ?> Comments</a></li>
                        </ul>
                     </div>
                  </div>
               <?php
                  endfor;
                  ?>
            </div>
            <div class="col-lg-12">
               <div class="news-tracker-wrap">
                  <h6><span>Breaking News:</span> <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php
endif;