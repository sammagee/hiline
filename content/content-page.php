<?php
/**
 * The template for displaying page content
 *
 * @package WordPress
 * @subpackage Hi-Line
 * @since Hi-Line 1.0
 */
?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="page-header">
		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php the_content(); ?>
	</div><!-- .article-content -->

</article><!-- #page-## -->
