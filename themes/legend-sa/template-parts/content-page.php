<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package legend-sa
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<?php echo '<h2>'. get_the_category( $id )[0]->name .'</h2>'; ?>
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'legend-sa' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	
</article><!-- #post-<?php the_ID(); ?> -->
