<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sakura_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php 
			if ( has_post_thumbnail() ) {
				?>
				<section class="hero" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
					<div class="container">
						<div class="d-flex justify-content-end">
							<div class="hero-content">
								<h2>The Urban Sakura</h2>
							</div>
						</div>
					</div>
				</section>
				<?php
			}
			echo "<div class='container'>";
            the_content();
			echo "</div>";
        ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
