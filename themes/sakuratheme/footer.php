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

	<footer id="colophon" class="site-footer mt-0">

		<div class="container mb-4">
			<div class="row">
				<div class="col-12">
					<h4 class="h5">Highlights</h4>
				</div>
				<?php
					// fetching 3 most recent highlights
					$highlightPosts = new WP_Query(array(
						"post_type" => "sakura_highlight"
					));

					// if found
					if ( $highlightPosts->have_posts() ) {
						// looping through the posts
						while ( $highlightPosts->have_posts() ) {
							$highlightPosts->the_post();

							// getting variables
							// $thumbnail = get_the_post_thumbnail( "large" );
							$thumbnail = get_the_post_thumbnail_url( $post, "large" );
							$permalink = get_post_permalink( $post );

							// rendering in HTML
							?>
							<div class="col-12 col-sm-4 text-center">
								<a href="<?php echo $permalink; ?>" class="highlight-card" style="background-image: url('<?php echo $thumbnail; ?>')">
									<div class="highlight-card-content">
										<h5><?php echo get_the_title(); ?></h5>
										<p><?php echo get_the_excerpt(); ?></p>
									</div>
								</a>
							</div>
							<?php
						}
					} else {
						// no posts found
					}
				?>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8 text-center">
					<div class="row mb-3">
						<div class="col-12">
							<h4 class="h5 text-left">Links</h4>
						</div>
						<div class="col-4">
							<a href="" class="d-block py-1 footer-link">Shipping & Returns</a>
							<a href="" class="d-block py-1 footer-link">FAQ</a>
							<a href="" class="d-block py-1 footer-link">Trade Program</a>
						</div>
						<div class="col-4">
							<a href="" class="d-block py-1 footer-link">Contact</a>
							<a href="" class="d-block py-1 footer-link">About</a>
							<a href="" class="d-block py-1 footer-link">Events</a>
						</div>
						<div class="col-4">
							<a href="" class="d-block py-1 footer-link">Careers</a>
							<a href="" class="d-block py-1 footer-link">Story</a>
							<a href="" class="d-block py-1 footer-link">COVID-19</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 text-center">
					<h4 class="h5 text-left">Social</h4>
					<a href="" class="d-block py-1 footer-link">Facebook</a>
					<a href="" class="d-block py-1 footer-link">Twitter</a>
					<a href="" class="d-block py-1 footer-link">Instagram</a>
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
