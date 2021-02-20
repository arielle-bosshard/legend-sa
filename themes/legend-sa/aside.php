<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package legend-sa
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

	<aside id="third" class="widget-area">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>

	</aside><!-- #secondary -->
