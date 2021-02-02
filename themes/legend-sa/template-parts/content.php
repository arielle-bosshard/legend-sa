<?php
/**
 * Template part for displaying posts
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
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					
				<?php endif; ?>
			</div><!-- .entry-heading -->

			<div class="entry-content">
				<?php
				the_excerpt(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'legend-sa' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'legend-sa' ),
						'after'  => '</div>',
					)
				);
				?>
				<a href="<?php the_permalink() ?>">
					<p class=blog-btn>Learn More<p>
				</a>
			</div><!-- .entry-content -->
		</div><!-- entry-text -->

	</article><!-- #post-<?php the_ID(); ?> -->

