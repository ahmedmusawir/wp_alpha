<?php
/**
*
* search.php
*
* The search archive template file.
**/
?>

<?php get_header() ?>

<section class="main-content col-md-8" role="main">

	<?php if( have_posts() ) : ?>

		<header class="page-header">

			<h1>
				<?php 
					printf( __( 'Search Results for &quot;%s&quot;', 'alpha' ), get_search_query() );
				?>
			</h1>

		</header>

			<?php while( have_posts() ) : the_post(); ?> 

				<?php get_template_part('content', get_post_format() ); ?>
			
			<?php endwhile; ?>
			<!-- END: while( have_posts() ) -->

			<?php alpha_paging_nav(); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>


	<?php endif; ?> 
	<!--END: if( have_posts() ) : the_post() -->

</section>
<!-- end main-content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>