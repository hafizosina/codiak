<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
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
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content">
			<?php 
				esc_html_e( 'Skip to content', 'understrap' ); 
			?>
			
		</a>

		<nav class="navbar navbar-expand-lg navbar-light bg-navbar">

			<?php if ( 'container' == $container ) : ?>
			<div class="container rows">
			<?php endif; ?>
				<!-- <div class="row"> -->

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="col-lg-2" >					
						<a class="navbar-brand collapse navbar-collapse" href="#"><?php bloginfo('name') ?></a>
					</div>

					<div class="col-lg-8">
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
					</div>
					<div class="col-lg-2 flex-column">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="btn btn-success mr-1" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
							<li><a class="btn btn-primary mr-1" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						</ul>
					</div>
				
				<!-- </div> -->


			<?php if ( 'container' == $container ) : ?>
			</div>
			<?php endif; ?>

		</nav>

	</div><!-- #wrapper-navbar end -->