<footer class="footer-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 single-footer-widget">
				<?php dynamic_sidebar('footer-1') ?>
			</div>
			<div class="col-lg-2 col-md-6 single-footer-widget">
				<?php dynamic_sidebar('footer-2') ?>
			</div>
			<div class="col-lg-2 col-md-6 single-footer-widget">
				<?php dynamic_sidebar('footer-3') ?>
			</div>
			<div class="col-lg-2 col-md-6 single-footer-widget">
				<?php dynamic_sidebar('footer-4') ?>
			</div>
			<div class="col-lg-3 col-md-6 single-footer-widget">
				<?php dynamic_sidebar('footer-5') ?>
			</div>
		</div>
		<div class="footer-bottom row align-items-center">
			<!-- Copyright area -->
			<?php dynamic_sidebar('footer-6'); ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>