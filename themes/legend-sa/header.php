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
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-8P7ZCYB6H6"></script>
	<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-8P7ZCYB6H6');
	</script>
	
	<!-- Start of HubSpot Embed Code -->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6982869.js"></script>
	<!-- End of HubSpot Embed Code -->
	
	<!-- Facebook Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window,document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '483973973010524'); 
			fbq('track', 'PageView');
			fbq('track', 'Subscribe', {value: '0.00', currency: 'USD', predicted_ltv: '0.00'});
			fbq('track', 'Contact');
			fbq('track', 'FindLocation');
			fbq('track', 'Schedule');
			fbq('track', 'Lead');
			fbq('track', 'ViewContent');
		</script>
		<noscript>
			<img height="1" width="1" 
			src="https://www.facebook.com/tr?id=483973973010524&ev=PageView
			&noscript=1"/>
		</noscript>
	<!-- End Facebook Pixel Code -->
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
				<img src="http://legend-sa.local/wp-content/uploads/2021/01/legend-logo-white.png" alt="Legend Logo White"> </a>
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
	</header><!-- #masthead -->
