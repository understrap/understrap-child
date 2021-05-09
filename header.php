<?php
/**
 * The header for the child theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap-child
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="fb-root"></div>
	
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=2425188241074515&autoLogAppEvents=1"></script>
	
	<?php do_action( 'wp_body_open' ); ?>


	<div class="site footer-push" id="page">

	<!--********************Title and Social Links************************-->
	<div id="title-bar" class="container-fluid">

		<div class="container d-flex">

			<div class="mr-auto p-2"><h4><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>&nbsp;-&nbsp;<?php echo get_bloginfo( 'description' ); ?></h4></div>
						
			<div class="p-2 d-none d-sm-block"><a href="https://www.facebook.com/FlyingDucksIrl/"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>&nbsp;</a></div>
		
			<div class="p-2 d-none d-sm-block"><a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i>&nbsp;</a></div>
						
			<div class="p-2 d-none d-sm-block"><a href="https://twitter.com/flyingducksirl?lang=en"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i>&nbsp;</a></div>
			
		</div>
	
	</div>

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-light">

		<?php if ( 'container' == $container ) : ?>
			
			<div class="container">
		
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->

					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						
						the_custom_logo();
					
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					
					<span class="navbar-toggler-icon"></span>
				
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
				</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->

	<!--Displays Jumbotron on the Front Page only-->

	<?php if ( is_front_page() ) : ?>
			
		<?php get_template_part( 'global-templates/hero', 'none' ); ?>

	<?php endif; ?>