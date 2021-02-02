<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package legend-sa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'legend-sa' ); ?></a>
		<?php global $wp;
			$current_slug = add_query_arg( array(), $wp->request ); 
		?>
	<header id="masthead" class="site-header header <?php echo $current_slug;?>">
		<div class="header-content full-width">
			<div class="site-branding">
			<a href="<?php echo site_url(); ?>" class="top-logo">
				<img src="http://legend-sa.local/wp-content/uploads/2021/01/cropped-legend-logo-white.png" alt="Legend Logo White"> </a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<div class="container" onclick="myFunction(this)">
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
					</div>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
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
	</header><!-- #masthead -->
