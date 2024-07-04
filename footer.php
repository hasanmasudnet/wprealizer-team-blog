<footer class="footer-area section-gap">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6 single-footer-widget">
            <?php
               if ( is_active_sidebar( "footer-left" ) ) {
                  dynamic_sidebar( "footer-left" );
               }
            ?>
         </div>
         <div class="col-lg-2 col-md-6 single-footer-widget">
            <?php
               if ( is_active_sidebar( "footer-middle" ) ) {
                  dynamic_sidebar( "footer-middle" );
               }
            ?>
         </div>
         <div class="col-lg-2 col-md-6 single-footer-widget">
            <?php
               if ( is_active_sidebar( "footer-middle-right" ) ) {
                  dynamic_sidebar( "footer-middle-right" );
               }
            ?>
         </div>
         <div class="col-lg-2 col-md-6 single-footer-widget">
            <?php
               if ( is_active_sidebar( "footer-right" ) ) {
                  dynamic_sidebar( "footer-right" );
               }
            ?>
         </div>
         <div class="col-lg-3 col-md-6 single-footer-widget">
            <?php
               if(is_active_sidebar("footer-gallery")){
                  dynamic_sidebar("footer-gallery");
               }
            ?>
         </div>
      </div>
      <div class="footer-bottom row align-items-center">
         <p class="footer-text m-0 col-lg-8 col-md-12">
            <?php print rianblog_copyright_text(); ?>
         </p>
         <div class="col-lg-4 col-md-12">
            <div class="footer-social">
               <?php
                  if(is_active_sidebar("footer-social-icon")){
                     dynamic_sidebar("footer-social-icon");
                  }
               ?>
            </div>
         </div>
      </div>
   </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>


