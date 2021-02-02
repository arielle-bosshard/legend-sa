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
					<h5>Always be updated on the industry!</h5>
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
						<a href="http://legend-sa.local/contact-us/"> <!--to contact page calendar section-->
							<img src="http://legend-sa.local/wp-content/uploads/2021/01/contact-img-1.png" alt="laptop on desk">
							<p>Book A Meeting></p>
						</a>
					</div>
					<div class="msg-form-info-link half-width">
						<a href="http://legend-sa.local/contact-us/"> <!-- to contact page-->
							<img src="http://legend-sa.local/wp-content/uploads/2021/01/contact-img-2.png" alt="paper on desk">
							<p>Talk To Us></p>
						</a>
					</div>
			</section>
			<section class="footer-menus full-width">
				<div class="footer-logo quarter-width">
					<img src="http://legend-sa.local/wp-content/uploads/2021/01/cropped-legend-logo-white.png" alt="legend sa logo">
				</div>
				<div class="explore-menu quarter-width">
					<h5>Explore</h5>
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
					<h5>Find Us</h5>
					<div class="company-contact-display">
						<img src="http://legend-sa.local/wp-content/uploads/2021/01/location.png" alt="location pin icon">
						<p>Route de Crassier 7, 1262<br>
							Eysins, Switzerland</p>
					</div>
					<div class="company-contact-display">
						<img src="http://legend-sa.local/wp-content/uploads/2021/01/phone.png" alt="phone icon">
						<p>+41 22 575 29 28</p>
					</div>
					<div class="company-contact-display">
						<img src="http://legend-sa.local/wp-content/uploads/2021/01/mail.png" alt="mail icon">
						<p>info@legend.eu.com</p>
					</div>
				</div>
				<div class="youtube-lastest-vid quarter-width">
					<h5>Latest Video</h5>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/TWkcj6gKoMk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</section>
			<div class="section-separator"></div>
			<section class="legal-sm-links full-width">
				<div class="privacypol">
					<a href="" >Privacy Policy</a>
				</div>
				<div class="copyright">
					<p>© 2021 Legend SA - Developed by <a href="www.bossarielle.com">Boss.Arielle</a> and <a href="https://www.behance.net/gabrielcnog">Gabriel Nogueira</a>
				</div>
				<div class=footer-sm-menu>
					<nav class="social-media-navigation sm-nav" role="navigation">
						<ul>
							<li>
								<a href="https://www.linkedin.com/company/18901679">
									<img src="http://legend-sa.local/wp-content/uploads/2021/01/linkedin.png" alt="linkedin icon">
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UClM2B6xCEEQ3MAbJ0oUoBYw">
									<img src="http://legend-sa.local/wp-content/uploads/2021/01/youtube.png" alt="youtube icon">
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/legendsaofficial/?hl=en">
									<img src="http://legend-sa.local/wp-content/uploads/2021/01/instagram.png" alt="instagram icon">
								</a>
							</li>
							<li>
								<a href="https://twitter.com/search?q=%40legendsaofcl&amp;src=recent_search_click">
									<img src="http://legend-sa.local/wp-content/uploads/2021/01/twitter.png" alt="twitter icon">
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/LegendSAOfficial?_rdc=2&amp;_rdr">
									<img src="http://legend-sa.local/wp-content/uploads/2021/01/facebook.png" alt="facebook icon">
								</a>
							</li>
						</ul>
					</nav><!-- #social media navigation -->
				</div>
			</section>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
