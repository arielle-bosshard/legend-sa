<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package legend-sa
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="singular-post full-width">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content-page', get_post_type() );

			endwhile; // End of the loop.
			?>
		</section>
		<section class="recent-posts full-width">				
			<div class="section-heading">
				<h1>Industry Updates</h1>
				<h2>What are the latest relevant subjects?</h2>
			</div>
			<div class="blog-post">
				<ul>
					<?php query_posts('posts_per_page=4'); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<li><a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail(); ?>	
								<h3><?php the_title(); ?></h3>							
								<p><?php the_excerpt(); ?></p>
								<p class=blog-btn>Learn More ><p>
							</a></li>
						<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</ul>
			</div>
			<p class="to-blog-btn">
            <a href="/blog/" data-type="page">More Blog Content &gt;</a>
			</p>
		</section>

	</main><!-- #main -->

<?php

get_footer();
