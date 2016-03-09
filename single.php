<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section id="primary">
	<main id="main" class="single container" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content/content', get_post_format() );

			the_post_navigation( array(
				'next_text' => '<h5 class="meta-nav" aria-hidden="true">' . 'Next' . '</h5>' .
					'<h2 class="post-title">%title</h2>',
				'prev_text' => '<h5 class="meta-nav" aria-hidden="true">' . 'Previous' . '</h5>' .
					'<h2 class="post-title">%title</h2>',
			) );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

		// End the loop.
		endwhile;
		?>
	</main><!-- .single -->
</section><!-- #primary -->

<?php get_footer(); ?>
