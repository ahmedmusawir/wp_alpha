<?php
/**
*
* index.php
*
* The main template file.
**/
?>

<?php get_header() ?>

<section class="main-content col-md-8" role="main">
	<!-- <h1>I am index.php</h1> -->

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			
			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; ?>
		<?php alpha_paging_nav(); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>	
	
	<?php endif; ?> 

</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
