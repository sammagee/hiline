<?php
/**
 * The default template for displaying feature posts in the feed
 *
 * @package WordPress
 * @subpackage Hi-Line
 * @since Hi-Line 1.0
 */
?>

<article id="article-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

	<div class="article">
		<div class="article-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div><!-- .article-thumbnail -->
		
		<div class="article-content">
			<header class="article-header clearfix">
				<div class="article-meta">
					<?php hiline_entry_meta(); ?>
				</div>
				<h3 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</header><!-- .article-header -->

			<div class="article-excerpt">
				<?php the_excerpt(); ?>
			</div><!-- .article-excerpt -->
		</div><!-- .article-content -->
	</div><!-- .article -->

</article>