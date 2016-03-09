<?php
/**
 * The main template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Hi-Line
 * @since Hi-Line 1.0
 */

get_header(); ?>

<section id="primary">
	<main id="main" class="home container clearfix" role="main">

		<div class="abc-column clearfix">

			<div class="a-column feature column">
				<div class="column-content">

					<a href="<?php echo get_category_link( get_cat_ID('feature') ); ?>" class="column-title">Feature &raquo;</a>

					<?php

					// The Query
					$the_query = new WP_Query( array( 'category_name' => 'feature', 'posts_per_page' => '5' ) );

					$first = true;

					// The Loop
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) :
							$the_query->the_post(); ?>

							<article <?php post_class('clearfix'); ?>>
								<?php if ( $first ) : ?>
									<div class="article-thumbnail">
										<?php the_post_thumbnail(); ?>
									</div><!-- .article-thumbnail -->

									<?php $first = false; ?>

								<?php else : ?>

									<div class="article-thumbnail--small">
										<?php the_post_thumbnail(); ?>
									</div><!-- .article-thumbnail--small -->

								<?php endif; ?>

								<h5 class="article-author byline">
									<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?>
								</h5>

								<h3 class="article-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>

								<div class="article-excerpt">
									<?php the_excerpt(); ?>
								</div>
							</article><!-- .article -->

					<?php endwhile;
					endif;

					/* Restore original Post Data */
					wp_reset_postdata(); ?>

				</div><!-- .column-content -->
			</div><!-- .a-column -->

			<div class="b-column news column">
				<div class="column-content">

					<a href="<?php echo get_category_link( get_cat_ID('news') ); ?>" class="column-title">News &raquo;</a>

					<?php

					// The Query
					$the_query = new WP_Query( array( 'category_name' => 'news', 'posts_per_page' => '5' ) );

					// The Loop
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) :
							$the_query->the_post(); ?>

							<article <?php post_class('clearfix'); ?>>
								<h5 class="article-author byline">
									<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?>
								</h5>

								<h3 class="article-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>

								<div class="article-excerpt">
									<?php the_excerpt(); ?>
								</div>
							</article><!-- .article -->

					<?php endwhile;
					endif;

					/* Restore original Post Data */
					wp_reset_postdata(); ?>
					
				</div><!-- .column-content -->
			</div><!-- .b-column -->

			<div class="c-column opinion column">

				<a href="<?php echo get_category_link( get_cat_ID('opinion') ); ?>" class="column-title">Opinion &raquo;</a>

				<div class="column-content">
					<?php

					// The Query
					$the_query = new WP_Query( array( 'category_name' => 'opinion', 'posts_per_page' => '5' ) );


					// The Loop
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) :
							$the_query->the_post(); ?>

							<article <?php post_class('clearfix'); ?>>
								<h5 class="article-author byline">
									<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?>
								</h5>

								<h3 class="article-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>

								<div class="article-excerpt">
									<?php the_excerpt(); ?>
								</div><!-- .article-excerpt -->
							</article><!-- .article -->

					<?php endwhile;
					endif;

					/* Restore original Post Data */
					wp_reset_postdata(); ?>

				</div><!-- .column-content -->
			</div><!-- .c-column -->
		</div><!-- .abc-column -->

		<div class="sports column">
			<?php
					
			if (function_exists('ditty_news_ticker')) {
				ditty_news_ticker(11126); ?>
			
				<a href="<?php echo get_category_link( get_cat_ID('sports') ); ?>" class="column-title">Sports &raquo;</a>
			<?php } ?>
			
			<div class="column-content">
				<?php

				// The Query
				$the_query = new WP_Query( array( 'category_name' => 'sports', 'posts_per_page' => '4' ) );


				// The Loop
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
						$the_query->the_post(); ?>

						<article <?php post_class('clearfix'); ?>>
							<h5 class="article-author byline">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?>
							</h5>

							<h3 class="article-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>

							<div class="article-excerpt">
								<?php the_excerpt(); ?>
							</div><!-- .article-excerpt -->
						</article><!-- .article -->

				<?php endwhile;
				endif;

				/* Restore original Post Data */
				wp_reset_postdata(); ?>

			</div><!-- .column-content -->
		</div><!-- .column -->

		<div class="entertainment column">
			<a href="<?php echo get_category_link( get_cat_ID('entertainment') ); ?>" class="column-title">Entertainment &raquo;</a>
			
			<div class="column-content">
				<?php

				// The Query
				$the_query = new WP_Query( array( 'category_name' => 'entertainment', 'posts_per_page' => '4' ) );


				// The Loop
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
						$the_query->the_post(); ?>

						<article <?php post_class('clearfix'); ?>>
							<h5 class="article-author byline">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?>
							</h5>

							<h3 class="article-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>

							<div class="article-excerpt">
								<?php the_excerpt(); ?>
							</div><!-- .article-excerpt -->
						</article><!-- .article -->

				<?php endwhile;
				endif;

				/* Restore original Post Data */
				wp_reset_postdata(); ?>

			</div><!-- .column-content -->
		</div><!-- .column -->

	</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
