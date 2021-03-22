<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sakura_Theme
 */

get_header();
?>



	<main id="primary" class="site-main container">

		<?php if ( have_posts() ) : ?>

			<header class="page-header my-5">
				<?php
				echo post_type_archive_title( '<h1 class="page-title">', '</h1>' );
				// the_archive_title( '<h1 class="page-title">', '</h1>' );
				// the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			echo '<div class="row all-posts">';
			while ( have_posts() ) :
				the_post();
				?>
				<!-- populating archive posts -->
				<!-- This design takes from the blog archive display design but only targets sakura highlight post types -->
				<div class="col-12">
					<a class="post-item" href="<?php echo get_permalink( $post ); ?>">
						<div class="row">
							<div class="col-12 col-sm-3 text-center">
								<div style="background-image: url(<?php echo get_the_post_thumbnail_url( $post, 'large' ); ?>)" class="post-image"></div>
							</div>
							<div class="col-12 col-sm-9 post-content">
								<div class="row">
									<div class="col-6">
										<p><?php echo date_format(date_create($post->post_date), 'D M d, Y'); ?></p>
									</div>
									<div class="col-6">
										<p class="d-flex justify-content-end">by <?php echo get_author_name( $post->post_author ); ?></p>
									</div>
								</div>
								<h4 class="post-title"><?php echo $post->post_title; ?></h4>
								<p class="mb-0 mt-4 text-center post-read-more">Read More</p>
							</div>
						</div>	
					</a>
				</div>
				<?php

			endwhile;

			echo '</div>';

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
