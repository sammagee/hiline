<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Hi-Line
 * @since Hi-Line 1.0
 */

get_header(); ?>

<section id="primary">
	<main id="main" class="page container" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content/content', 'page' );

		endwhile; ?>

	</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
