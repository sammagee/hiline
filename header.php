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

		<header id="header" class="clearfix noselect">

			<div class="nav-header clearfix">
				<nav id="navigation" class="clearfix" role="navigation">
					<div class="primary-nav desktop">
						<?php
						/*
						 * Primary Nav
						 */
						$args = array(
							'container'      => false,
							'menu_class'     => 'menu clearfix',
							'theme_location' => 'primary',
						);

						wp_nav_menu( $args ); ?>
					</div><!-- .primary-nav -->

					<div class="dropdown-nav">
						<span id="mobiledropdowntoggle" class="dropdown-nav-toggle mobile">
							<i class="genericon genericon-ellipsis"></i>
						</span><!-- #mobiledropdowntoggle -->

						<span id="desktopdropdowntoggle" class="dropdown-nav-toggle desktop">
							<i class="genericon genericon-ellipsis"></i>
						</span><!-- #desktopdropdowntoggle -->

						<div class="nav desktop">
							<div class="section-nav">
								<?php
								/*
								 * Section Nav
								 */
								$args = array(
									'container'      => false,
									'menu_class'     => 'menu',
									'theme_location' => 'section',
								);

								wp_nav_menu( $args ); ?>
							</div><!-- .section-nav -->
							
							<div class="social-nav">
								<?php
								/*
							 	 * Social Links
							 	 */
								$args = array(
									'container'      => false,
									'menu_class'     => 'menu',
									'theme_location' => 'social',
								);

								wp_nav_menu( $args ); ?>
							</div><!-- .social-nav -->
						</div><!-- .nav -->
					</div><!-- .dropdown-nav -->
				</nav><!-- #navigation -->

				<?php get_search_form(); ?>

				<div class="logo">
					<a href="<?php echo home_url(); ?>"></a>
				</div><!-- .logo -->
			</div><!-- .nav-header -->
			
			<nav id="mobile-nav" class="mobile clearfix" role="navigation">
				<div class="dropdown-nav mobile">
					<div class="nav mobile">
						<div class="primary-nav">
							<?php
							/*
							 * Primary Nav
							 */
							$args = array(
								'container'      => false,
								'menu_class'     => 'menu',
								'theme_location' => 'primary',
							);

							wp_nav_menu( $args ); ?>
						</div><!-- .primary-nav -->

						<div class="section-nav">
							<?php
							/*
							 * Section Nav
							 */
							$args = array(
								'container'      => false,
								'menu_class'     => 'menu',
								'theme_location' => 'section',
							);

							wp_nav_menu( $args ); ?>
						</div><!-- .section-nav -->

						<div class="social-nav">
							<?php
							/*
							 * Social Links
							 */
							$args = array(
								'container'      => false,
								'menu_class'     => 'menu',
								'theme_location' => 'social',
							);

							wp_nav_menu( $args ); ?>
						</div><!-- .social-nav -->

					</div><!-- .nav -->
				</div><!-- .dropdown-nav -->
			</nav><!-- #mobile-nav -->
			
		</header><!-- #header -->

		<div id="page">

