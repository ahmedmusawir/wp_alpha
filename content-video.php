<?php 
/**
*
* content-video.php
*
* The default template for displaying posts with Video post format.
**/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Article Header -->
	<header class="entry-header"> 

	<!-- If single page, desplay the title -->
	<!-- Else, we display the title in a link -->
	<?php  if ( is_single() ) : ?>
		<h1><?php the_title(); ?></h1>

	<?php else : ?>
		<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

	<?php endif; ?>	

	<p class="entry-meta">
		<?php 
			//Display the meta information
			alpha_post_meta();
		?>
	</p>

		
	</header> 
	<!-- end entry-header -->
	
	<!-- Article content -->
	<div class="entry-content">
		<?php 
			
			the_content( __( 'Continue reading &rarr;', 'alpha' ) );

			wp_link_pages();
		?>
	</div>
	<!-- end entry-content -->

	<!-- Article Footer  -->
	<footer class="entry-footer">
		<?php 
			//If we have a single page and the author bio exists, display it.
			if (is_single() && get_the_author_meta( 'description' ) ) {
				echo '<h2>' . __( 'Written by ', 'alpha' ) . get_the_author() . '</h2>';
				echo '<p>' . the_author_meta( 'description' ) . '</p>';
			}
		?>
	</footer>
</article>



















































