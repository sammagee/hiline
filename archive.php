<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Hi-Line
 * @since Hi-Line 1.0
 */

get_header(); ?>

<section id="primary">
	<main id="main" class="archive container" role="main">

		<header class="archive-header">
			<h1 class="archive-title">
				<?php the_archive_title(); ?>
			</h1>
		</header><!-- .archive-header -->

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		/*
		 * Include the post format-specific template for the content. If you want to
		 * use this in a child theme, then include a file called called content-___.php
		 * (where ___ is the post format) and that will be used instead.
		 */
		get_template_part( 'content/content', 'archive' );

		// End the loop.
		endwhile;
		?>

	</main><!-- .archive -->
</section><!-- #primary -->

<?php get_footer(); ?>