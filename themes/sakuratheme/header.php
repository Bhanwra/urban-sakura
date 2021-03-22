<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sakura_Theme
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sakuratheme' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="container py-3">
			<div class="row">
				<div class="col-12 col-md-4">
					<?php
					wp_nav_menu( array(
						"menu" => "nav-menu-left",
						"menu_class" => "nav-menu"
					) );
					?>
				</div>
				<div class="col-12 col-md-4 text-center d-flex justify-content-center align-items-center">
					<div class="site-branding">
						<?php
						the_custom_logo();
						// if ( is_front_page() && is_home() ) :
							?>
							<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="font-alt"><?php bloginfo( 'name' ); ?></a></h1> -->
							<?php
						// else :
							?>
							<p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="font-alt h3"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						// endif;
						$sakuratheme_description = get_bloginfo( 'description', 'display' );
						if ( $sakuratheme_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $sakuratheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-12 col-md-4">
					<?php

					$NavMenuRight = wp_get_nav_menu_items( "nav-menu-right" );

					echo "<ul class='nav-menu nav-menu-right'>";
					foreach ($NavMenuRight as $MenuItem) {
						echo ($MenuItem->title == "Cart") ? 
							"<li class='menu-item'><a href='$MenuItem->url'>$MenuItem->title (". WC()->cart->get_cart_contents_count() .")</a></li>":
							"<li class='menu-item'><a href='$MenuItem->url'>$MenuItem->title</a></li>";
					}
					?>
					
				</div>
			</div>
		</div>

		

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sakuratheme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav> -->
		<!-- #site-navigation -->
	</header><!-- #masthead -->

	<?php 
		if ( !is_home() && !is_front_page() && get_post_type() != "sakura_highlight" ) {
			echo "<h2 class='my-5'>$pagename</h2>";
		}
	?>