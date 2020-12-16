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
	<!-- <script src="https://kit.fontawesome.com/yourcode.js"></script> -->
	<!-- <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
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

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="col-lg-2" >					
					<a class="navbar-brand collapse navbar-collapse" href="#"><?php bloginfo('name') ?></a>
				</div>

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
				<div class="divider-v1"></div>

				<?php if( !is_user_logged_in() ) :?>
					<ul class="nav navbar-nav float-right form-inline">
						<li><a class="btn btn-success  m-rounded-left form-inline" href="<?php echo wp_login_url(); ?>"><i class="fa fa-sign-in form-inline" aria-hidden="true"></i> Login</a></li>
						<li><a class="btn btn-primary m-rounded-right form-inline" href="#"><i class="fa fa-user form-inline" aria-hidden="true"></i> Sign Up</a></li>
					</ul>

				<?php elseif( is_user_logged_in() ) : ?>
					<?php global $current_user; wp_get_current_user(); ?>
					<div class="col-lg-2">
						<ul class="nav navbar-nav float-right form-inline">
							<li><a class="btn btn-success  m-rounded-left form-inline" href="<?php echo wp_login_url(); ?>"><i class="fa fa-user form-inline" aria-hidden="true"></i> <?php echo $current_user->display_name ?> </a></li>
							<li><a class="btn btn-warning m-rounded-right form-inline" href="#"><i class="fa fa-sign-out form-inline" aria-hidden="true"></i> </a></li>
						</ul>
					</div>

				<?php endif; ?>
					


			<?php if ( 'container' == $container ) : ?>
			</div>
			<?php endif; ?>

		</nav>

	</div><!-- #wrapper-navbar end -->