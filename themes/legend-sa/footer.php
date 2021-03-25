<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package legend-sa
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<section class="newsletter-subscription full-width">
				<div class="newsletter-cta-text">
					<p class="sml-title">Always be updated on the industry!</p>
					<p>We will never spam your e-mail box.</p>
				</div>
				<div class="newsletter-form"> <!-- Or use plug-in-->
					<!--[if lte IE 8]>
					<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
					<![endif]-->
					<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
					<script>
					hbspt.forms.create({
						portalId: "6982869",
						formId: "31910748-82c4-433d-8418-e39a48fde23e"
					});
					</script>
				</div>
			</section>
			<section class="contact-pg-link">
					<div class="meeting-booking-link half-width">
						<a href="/contact-us/"> <!--to contact page calendar section-->
							<img src="/wp-content/uploads/2021/01/contact-img-1.png" alt="laptop on desk">
							<p>Book A Meeting</p>
						</a>
					</div>
					<div class="msg-form-info-link half-width">
						<a href="/contact-us/"> <!-- to contact page-->
							<img src="/wp-content/uploads/2021/01/contact-img-2.png" alt="paper on desk">
							<p>Talk To Us</p>
						</a>
					</div>
			</section>
			<section class="footer-menus full-width">
				<div class="footer-logo quarter-width">
					<img src="/wp-content/uploads/2021/01/legend-logo-white.png" alt="legend sa logo">
				</div>
				<div class="explore-menu quarter-width">
					<p class="sml-title">Explore</p>
					<ul>
						<li>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
							?>
						<li>
					</ul>
				</div>
				<div class="footer-contact-info quarter-width">
					<p class="sml-title">Find Us</p>
					<div class="company-contact-display">
						<img src="/wp-content/uploads/2021/01/location.png" alt="location pin icon">
						<p>Route de Crassier 7, 1262<br>
							Eysins, Switzerland</p>
					</div>
					<div class="company-contact-display">
						<img src="/wp-content/uploads/2021/01/phone.png" alt="phone icon">
						<p>+41 22 575 29 28</p>
					</div>
					<div class="company-contact-display">
						<img src="/wp-content/uploads/2021/01/mail.png" alt="mail icon">
						<p>info@legend.eu.com</p>
					</div>
				</div>
				<div class="youtube-lastest-vid quarter-width">
					<p class="sml-title">Latest Video</p>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/TWkcj6gKoMk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</section>
			<div class="section-separator"></div>
			<section class="legal-sm-links full-width">
				<div class="privacypol">
					<a href="/documents/privacy_policy_legend.pdf" >Privacy Policy</a>
				</div>
				<div class="copyright">
					<p>© 2021 Legend SA - Developed by <a href="https://www.bossarielle.com">Boss.Arielle</a> and <a href="https://www.behance.net/gabrielcnog">Gabriel Nogueira</a>
				</div>
				<div class=footer-sm-menu>
					<nav class="social-media-navigation sm-nav" role="navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-2',
									'menu_id'        => 'sm-menu',
								)
							);
						?>
					</nav><!-- #social media navigation -->
				</div>
			</section>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
