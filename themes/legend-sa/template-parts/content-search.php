<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package legend-sa
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-featured-img">
		<?php legend_sa_post_thumbnail(); ?>
	</div>
	<div class="entry-text">
		<div class="entry-heading">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			
			<?php endif; ?>
		</div><!-- .entry-heading -->
		<div class="entry-content">
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink() ?>">
				<p class=blog-btn>Learn More<p>
			</a>
		</div><!-- .entry-content -->
	</div><!-- .entry-text -->

	
</article><!-- #post-<?php the_ID(); ?> -->
