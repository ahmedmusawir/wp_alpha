<?php 
/**
*
* sidebar.php
*
* The Primary Sidebar
**/
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<aside class="sidebar col-md-4" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside>
	<!-- end sidebar -->
<?php endif ?>