<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Hi-Line
 * @since Hi-Line 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		
		<div class="page-wrapper">
			<header class="header-wrapper noselect">
				<div class="clearfix">
					<div class="logo">
						<a href="<?php echo home_url(); ?>"></a>
					</div>

					<nav class="nav-wrapper clearfix">
						<?php

						$args = array(
							'menu_class'     => 'nav clearfix',
							'theme_location' => 'primary',
						);

						wp_nav_menu( $args );

						?>
					</nav>

					<?php get_search_form(); ?>
				</div>
			</header>