<?php
/**
*
* archive.php
*
* The date archive template file.
**/
?>

<?php get_header() ?>

<section class="main-content col-md-8" role="main">

	<?php if( have_posts() ) : ?>

		<header class="page-header">

		<h1>
			<?php 
				printf( __( 'Category Archives for &quot;%s&quot;', 'alpha' ), single_cat_title( '', false ) );
			?>

		</h1>

		<?php 
			//Show an optional category_description.
			if ( category_description() ) {
				echo '<p>' . category_description() . '</p>';
			}

		?>
			
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