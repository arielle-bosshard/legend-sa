<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
								<p class=blog-btn>Learn More><p>
							</a></li>
						<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</ul>
			</div>
			<p class="to-blog-btn">
            <a href="http://legend-sa.local/blog/" data-type="page" data-id="77">More Blog Content&gt;</a>
			</p>
		</section>
	</main>


<?php

get_footer();
