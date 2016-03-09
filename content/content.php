<?php
/**
 * The default template for displaying content
 *
 * Used for single.
 *
 * @package WordPress
 * @subpackage Hi-Line
 * @since Hi-Line 1.0
 */
?>

<article id="article-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="article-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<header class="article-header">
		<?php the_title( '<h1 class="article-title">', '</h1>' ); ?>
	</header><!-- .article-header -->

	<div class="article-content">
		<?php the_content(); ?>
	</div><!-- .article-content -->

	<footer class="article-footer">
		<div class="tags-links clearfix">
			<?php echo get_the_tag_list('', ' '); ?>
		</div>
		
		<div class="article-meta clearfix">
			<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
			<?php hiline_entry_meta(); ?>
		</div>
	</footer><!-- .article-footer -->

</article>
