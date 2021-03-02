<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sakura_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<div class="container mt-5 text-center p-2">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside>
<!-- #secondary -->
