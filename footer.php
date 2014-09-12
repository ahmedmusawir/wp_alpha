<?php 
/**
*
* footer.php
*
* The template for displaying the footer.
**/

?>

		</div>
		<!-- end main content row -->
	</div>
	<!-- end main container -->

	<!-- FOOTER -->
	<footer class="site-footer">
		<div class="container">
			<?php get_sidebar('footer'); ?>

			<div class="copyright">
				<p>
					&copy; <?php echo date( 'Y' ); ?>
					<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
					<?php _e( 'All rights reserved.', 'alpha' ); ?>
				</p>
			</div>
			<!-- end copyright -->
		</div>
		<!-- end container -->
	</footer>
	<!-- end site-footer -->

	<?php wp_footer(); ?>

	<!-- Latest compiled and minified JS -->
	<!-- // <script src="//code.jquery.com/jquery.js"></script> -->
	<!-- // <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->

</body>
</html>