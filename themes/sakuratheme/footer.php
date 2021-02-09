<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sakura_Theme
 */

?>

</div>

	<footer id="colophon" class="site-footer">

		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8 text-center">
					<div class="row mb-3">
						<div class="col-12">
							<h4 class="h5 text-left">Links</h4>
						</div>
						<div class="col-4">
							<a href="" class="d-block py-1">Shipping & Returns</a>
							<a href="" class="d-block py-1">FAQ</a>
							<a href="" class="d-block py-1">Trade Program</a>
						</div>
						<div class="col-4">
							<a href="" class="d-block py-1">Contact</a>
							<a href="" class="d-block py-1">About</a>
							<a href="" class="d-block py-1">Events</a>
						</div>
						<div class="col-4">
							<a href="" class="d-block py-1">Careers</a>
							<a href="" class="d-block py-1">Story</a>
							<a href="" class="d-block py-1">COVID-19</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 text-center">
					<h4 class="h5 text-left">Social</h4>
					<a href="" class="d-block py-1">Facebook</a>
					<a href="" class="d-block py-1">Twitter</a>
					<a href="" class="d-block py-1">Instagram</a>
				</div>
			</div>
			<div class="row mt-2">
				<div class="site-info col-12 text-center">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sakuratheme' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'sakuratheme' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'sakuratheme' ), 'sakuratheme', '<a href="http://portfolio.karanbhanwra.com/">Karan Bhanwra</a>' );
						?>
				</div><!-- .site-info -->
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
