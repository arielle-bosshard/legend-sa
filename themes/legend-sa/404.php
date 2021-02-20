<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package legend-sa
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found full-width">
			<div class="page-content">
				<img src="http://legend-sa.local/wp-content/uploads/2021/02/404-error.png" alt="404 error">
				<p><?php esc_html_e( 'The page you are looking for could not be found. But don’t worry! Sometimes we need to fail our way to future success. We are here to help you 😉', 'legend-sa' ); ?></p>
	
			</div><!-- .page-content -->
			<div class="lost-man">
				<img src="http://legend-sa.local/wp-content/uploads/2021/02/frustrated-man.png" alt="sad man sitting on steps">
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
