<?php
/**
 * Custom template tags for Hi-Line
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage Hi-Line
 * @since Hi-Line 1.0
 */

if ( ! function_exists( 'hiline_entry_meta' ) ) :
/**
 * Prints HTML with meta information for the categories, tags.
 *
 * @since Hi-Line 1.0
 */
function hiline_entry_meta() {

	if ( 'post' == get_post_type() ) {
		printf( '<span class="byline"><span class="author vcard"><span class="screen-reader-text">%1$s </span><a class="url fn n" href="%2$s">%3$s</a></span></span> ', '',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
		);
	}

	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'M j, Y' ) ),
			get_the_date( 'M j, Y' )
		);

		printf( '<span class="posted-on"><span class="screen-reader-text">%1$s </span>%3$s</span>',
			'on ',
			esc_url( get_permalink() ),
			$time_string
		);
	}

}
endif;