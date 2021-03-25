<?php
/**
 * The template for displaying all pages
 *
 *
 * @package legend-sa
 */

get_header();
?>

	<main> 
		<div id="primary" class="homepage">
			<?php while ( have_posts() ): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		<section class="recent-posts full-width">				
			<div class="section-heading">
				<h2>Industry Updates</h2>
				<p class="subtitle">What are the latest relevant subjects?</p>
			</div>
			<div class="blog-post">
				<ul>
					<?php query_posts('posts_per_page=4'); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<li>
								<a href="<?php the_permalink() ?>">
									<div class="featured-image-display">
										<?php the_post_thumbnail(); ?>
									</div>
									<p class="blogtitle"><?php the_title(); ?></p>						
									<p><?php the_excerpt(); ?></p>
									<p class=blog-btn>Learn More<p>
								</a>
							</li>
						<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</ul>
			</div>
			<p class="to-blog-btn">
            <a href="/blog/">More Blog Content</a>
			</p>
		</section>
	</main>


<?php

get_footer();
