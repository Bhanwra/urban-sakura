<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sakura_Theme
 */

get_header();
?>

	<main id="primary" class="site-main container">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			?>
			<div class="row all-posts my-5">
				<?php
					foreach (get_posts() as $key => $post) {
						?>
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
					}
				?>
			</div>
			<?php
			/* Start the Loop */
			// while ( have_posts() ) :
			// 	var_dump(get_post()->post_title);
			// 	the_post();

			// 	/*
			// 	 * Include the Post-Type-specific template for the content.
			// 	 * If you want to override this in a child theme, then include a file
			// 	 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
			// 	 */
			// 	get_template_part( 'template-parts/content', get_post_type() );

			// endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
