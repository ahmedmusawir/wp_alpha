<?php 
/**
*
* function.php 
* 
* The theme's functions and definitions.
*
**/

/*==============================================
=            1.0 - Define Constants            =
==============================================*/
define('THEMEROOT', get_stylesheet_directory_uri() );
define('IMAGES', THEMEROOT . '/images' );
define('SCRIPTS', THEMEROOT . '/js' );
define('FRAMEWORK', get_template_directory() . '/framework' );


/*-----  End of 1.0 - Define Constants  ------*/

/*================================================
=            2.0 - Load the framework            =
================================================*/
require_once( FRAMEWORK . '/init.php' );


/*-----  End of 2.0 - Load the framework  ------*/

/*=====================================================================================
=            3.0 Setup the content width value based on the theme's design            =
=====================================================================================*/
if ( ! isset( $content_width )) {
	$content_width = 800;
}


/*-----  End of 3.0 Setup the content width value based on the theme's design  ------*/

/*=========================================================================================
=            4.0 - Setup theme default and register various supported features            =
=========================================================================================*/
if ( ! function_exists( 'alpha_setup' ) ) {
	function alpha_setup() {
		/**
		*
		* Make the theme available for translation
		*
		**/
		$lang_dir = THEMEROOT . '/languages';
		load_theme_textdomain( 'alpha', $lang_dir );

		/**
		*
		* Add support for post formats.
		*
		**/
		add_theme_support('post-formats', 
			array(
				'gallery',
				'link',
				'image',
				'quote',
				'video',
				'audio'
			)

		);

		/**
		*
		* Add support for automatic feed links.
		*
		**/
		add_theme_support( 'automatic-feed-links');

		/**
		*
		* Add support for post thumbnails.
		*
		**/
		add_theme_support( 'post-thumbnails' );

		/**
		*
		* Register nav menus.
		*
		**/
		register_nav_menus(

			array(
				'main-menu' => __( 'Main Menu', 'alpha' ) //alpha is the textdomain
			)
		);		
		
	}

	add_action('after_theme_setup', 'alpha_setup');

}
/*-----  End of 4.0 - Setup theme default and register various supported features  ------*/

/*==========================================================================
=            5.0 - Display meta information for a specific post            =
==========================================================================*/
if ( ! function_exists('alpha_post_meta' )) {

	function alpha_post_meta(){
		echo '<ul class="list-inline entry-meta">';

		if ( get_post_type() === 'post' ) {
			// If the post is sticky, mark it.
			if ( is_sticky() ) {
				echo '<li class="meta-featured-post"><i class="fa fa-thumb-tack"></i>' . __( 'Sticky', 'alpha' ) . '</li>';
			}

			//Get the post author.
			printf(
				'<li class="meta-author"><a href="%1$s" rel="author">%2$s</a></li>',
				esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);

			//Get the date.
			echo '<li class="meta-date">' . get_the_date() . '</li>';

			//The Categories.
			$category_list = get_the_category_list( ', ');
			if ( $category_list ) {
				echo '<li class="meta-categories">' . $category_list . '</li>';
			}

			//The tags.
			$tag_list = get_the_tag_list( '', ', ' );
			if ( $tag_list ) {
				echo '<li class="meta-tags">' . $tag_list .'</li>';
			}

			//Comments Link.
			if ( comments_open() ) :
				echo '<li>';
				echo '<span class="meta-reply">';
				comments_popup_link( __( 'Leave a comment', 'alpha' ), __( 'One comment so far', 'alpha' ), __( 'View all % comments', 'alpha') );
				echo '</span>';
				echo '</li>';
			endif;

			//Edit link.
			if ( is_user_logged_in() ) {
				echo '<li>';
				edit_post_link( __( 'Edit', 'alpha' ), '<span class="meta-edit">', '</span>' );
				echo '</li>';
			}
		}
	}
}


/*-----  End of 5.0 - Display meta information for a specific post  ------*/

/*===============================================================================
=            6.0 - Display navigation to next/previous set of posts.            =
===============================================================================*/
if ( ! function_exists( 'alpha_paging_nav' )) {

	function alpha_paging_nav() { ?>
		<ul>
			<?php if ( get_previous_posts_link() ) : ?>
				<li class="next">
					<?php previous_posts_link( __( 'Newer Posts &rarr;', 'alpha') ); ?>
				</li>
				<?php endif; 
			?>
			<?php 
				if ( get_next_posts_link() ) : ?> 
				<li class="previous">
					<?php next_posts_link( __( '&larr; Older Posts', 'alpha' ) ); ?>
				</li>
				<?php endif;
			?>
		</ul> <?php
	}
}


/*-----  End of 6.0 - Display navigation to next/previous set of posts.  ------*/















































