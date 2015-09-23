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

	<div class="feed-wrapper">
		<div class="feed noselect">
			<div class="container">
				
			</div>
		</div><!-- .feed -->

		<aside class="links noselect">
			<nav class="nav-wrapper clearfix">
				<?php

				$args = array(
					'menu_class'     => 'nav clearfix',
					'theme_location' => 'secondary',
				);

				wp_nav_menu( $args );

				?>
			</nav>
			<nav class="nav-wrapper clearfix">
				<?php

				$args = array(
					'menu_class'     => 'nav clearfix',
					'theme_location' => 'social',
				);

				wp_nav_menu( $args );

				?>
			</nav>
		</aside>
	</div><!-- .feed-wrapper -->

<?php get_footer(); ?>