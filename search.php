<?php
/**
 * The template for displaying search results pages.
 *
 * @package  WordPress
 * @subpackage  Hi-Line
 * @since  Hi-Line 1.0
 */

get_header(); ?>

<section id="primary">
	<main id="main" class="search container" role="main">
		
		<header class="search-header">
			<h1 class="search-title">Search for "<?php echo get_search_query(); ?>"</h1>
		</header><!-- .search-header -->

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		/*
		 * Include the post format-specific template for the content. If you want to
		 * use this in a child theme, then include a file called called content-___.php
		 * (where ___ is the post format) and that will be used instead.
		 */
		get_template_part( 'content/content', 'search' );

		// End the loop.
		endwhile;
		?>

	</main><!-- .search -->
</section><!-- #primary -->

<?php get_footer(); ?>
