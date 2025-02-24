<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShoeList-Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'shoelist' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="grid-container fluid">
			<div class="grid-x grid-margin-x">
				<div class="cell  medium-2 small-11">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$shoelist_description = get_bloginfo( 'description', 'display' );
						if ( $shoelist_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $shoelist_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="cell medium-8 small-11">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'shoelist' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-primary',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="cell medium-2 small-11 socials">
					<a href="http://shoelistwebsite.local/cart/"><img src="http://shoelistwebsite.local/wp-content/uploads/2021/03/cart.png" alt="profile logo"></a>
					
					<a href="<?php echo esc_url( get_theme_mod( 'facebook_url' ) );?>" class="facebook-Link"><img src="http://shoelistwebsite.local/wp-content/uploads/2021/03/Icon-awesome-facebook-square.png" alt="facebook logo"></a>
					<a href="<?php echo esc_url( get_theme_mod( 'twitter_url' ) );?>" class="teitter-Link"><img src="http://shoelistwebsite.local/wp-content/uploads/2021/03/Icon-awesome-twitter-square.png" alt="twitter logo"></a>
				</div>
			</div>
		</div>
		

	</header><!-- #masthead -->
