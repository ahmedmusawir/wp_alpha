<?php 
/**
*
* comments.php
*
* The template for displaying comments.
**/
?>

<?php 
	//Prevent the direct loading of comments.php.
	if ( ! empty( $_SERVER['SCRIPT-FILENAME'] ) && basename( $_SERVER['SCRIPT-FILENAME'] ) == 'comments.php' ){
		die( __( 'You cannot access this page directly.', 'alpha') );
	}
?>

<!-- If the post is password protected, display info text and return. -->

<?php if ( post_password_required() ) : ?>
	
	<p>
		<?php 
			_e( 'The post is password protected. Enter the password to view the comments.', 'alpha');
			return;
		?>
	</p>

<?php endif; ?>

<!-- Comments Area  -->
<div class="comments-area" id="comments">
	
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php 
				printf( _nx( 'One comment', '%1$s comments', get_comments_number(), 'Comment Title', 'alpha' ), number_format_i18n( get_comments_number() ) );
			?>
		</h2>

		<ol class="comments">
			<?php wp_list_comments(); ?>
		</ol>

		<?php 
			//If the comments are pagination, display the controls.
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>

		<nav class="comment-nav" role="navigation">
			<p class="comment-nav-prev">
				<?php previous_comments_link( __( '&larr; Older Comments', 'alpha' ) ); ?>
			</p>
			<p class="comment-nav-next">
				<?php next_comments_link( __( 'Newer Comments &rarr;', 'alpha' ) ); ?>
			</p>
		</nav>
		<!-- comment-nav ends -->
		<?php endif ?>
		<!-- END: if ( get_comment_pages_count() -->

		<!-- If the comments are closed, display an info text. -->
		<?php if ( ! comments_open() && get_comments_number() ) :	?>

			<p class="no-comments">
				<?php _e( 'Comments are closed.', 'alpha' ); ?>			
			</p>
		
		<?php endif; ?>
		<!-- END: if ( ! comments_open() && get_comments_number() )  -->


	<?php endif; ?>
	<!-- END:  if ( have_comments() -->

	<?php comment_form(); ?>
</div>
<!-- end comments-area	 -->
















































