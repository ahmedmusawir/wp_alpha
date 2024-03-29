<?php
/**
*
* author.php
*
* The author archive template file.
**/
?>

<?php get_header() ?>

<section class="main-content col-md-8" role="main">

	<?php if( have_posts() ) : the_post(); ?>

		<header class="page-header">

			<h1>
				<?php printf( __( 'All posts by %s.', 'alpha' ), get_the_author() ) ?>
			</h1>

			<?php 
				//if the author bio exists, display it.
				if ( get_the_author_meta( 'description' ) ) {
					echo '<p>' . the_author_meta( 'description' ) . '</p>';
				}

			?>

			<?php rewind_posts(); ?>
			
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