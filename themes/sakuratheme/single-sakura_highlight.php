<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sakura_Theme
 */

get_header();
?>

	<main id="primary" class="site-main single-post sakura_highlight">

		<?php
		while ( have_posts() ) :
			// feature image highlight display
			if ( has_post_thumbnail() && !is_product() ) {
				echo '
					<div class="post-thumbnail-custom" style="background-image: url('. get_the_post_thumbnail_url( ) .');">
						<div class="container">
							<p class="post-thumbnail-subtitle">Sakura Highlight</p>
							<h2 class="post-thumbnail-title">'. $post->post_title .'</h2>
						</div>
					</div>';
			}
			// adding container wrapper after feature image
			echo '<div class="container">';
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			
			echo '</div>';

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'sakuratheme' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'sakuratheme' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
