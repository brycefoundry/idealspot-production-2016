<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KCT4VR');</script>
	<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KCT4VR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site">
	<div class="site-inner">
		

		<header class="nav" id="masthead" class="site-header" role="banner">
			<a href="/" class="logo">Home</a>
			<span class="phone">512-537-1111</span>
			<ul class="top">
				<li class="top-items"><a class="top-nav" href="/products/">Products</a></li>
				<li class="top-items"><a class="top-nav" href="/pricing/">Pricing</a></li>
				<li class="top-items">
					<span class="solutions">Solutions for 
						<svg width="13px" height="9px" viewBox="823 30 13 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <defs></defs>
						    <path d="M832.836815,35.2370646 L827.90487,40.1690098 C827.664027,40.4098531 827.348656,40.5302748 827.033149,40.5302748 C826.717641,40.5302748 826.402271,40.4098531 826.161428,40.1690098 C825.679741,39.6877341 825.679741,38.9067058 826.161428,38.4254302 L830.221514,34.3653433 L826.161428,30.3051195 C825.679741,29.8238438 825.679741,29.0428155 826.161428,28.5615398 C826.643114,28.0798532 827.423321,28.0798532 827.905007,28.5615398 L832.836952,33.493485 C833.318502,33.9747607 833.318502,34.755926 832.836815,35.2370646 L832.836815,35.2370646 Z" id="Shape" stroke="none" transform="translate(829.499130, 34.365275) rotate(-270.000000) translate(-829.499130, -34.365275) "></path>
						</svg>
					</span>
					<ul class="hidden">
						<li class="top-items"><a class="top-nav" href="/solutions/retail-restaurants/">Retail &amp; Restaurants</a></li>
						<li class="top-items"><a class="top-nav" href="/solutions/brokers-developers/">Brokers &amp; Developers</a></li>
						
					</ul>
				</li>
				<li class="top-items">
					<span class="resources">Resources 
						<svg width="13px" height="9px" viewBox="823 30 13 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <defs></defs>
						    <path d="M832.836815,35.2370646 L827.90487,40.1690098 C827.664027,40.4098531 827.348656,40.5302748 827.033149,40.5302748 C826.717641,40.5302748 826.402271,40.4098531 826.161428,40.1690098 C825.679741,39.6877341 825.679741,38.9067058 826.161428,38.4254302 L830.221514,34.3653433 L826.161428,30.3051195 C825.679741,29.8238438 825.679741,29.0428155 826.161428,28.5615398 C826.643114,28.0798532 827.423321,28.0798532 827.905007,28.5615398 L832.836952,33.493485 C833.318502,33.9747607 833.318502,34.755926 832.836815,35.2370646 L832.836815,35.2370646 Z" id="Shape" stroke="none" transform="translate(829.499130, 34.365275) rotate(-270.000000) translate(-829.499130, -34.365275) "></path>
						</svg>
					</span>
					<ul class="hidden">
						<li class="top-items"><a class="top-nav" href="/resources/customers-case-studies">Customers &amp; Case Studies</a></li>
						<li class="top-items"><a class="top-nav" href="/resources/docs">Docs</a></li>
						<li class="top-items"><a class="top-nav" href="/resources/idealspot-insights">Idealspot Insights</a></li>
						<li class="top-items"><a class="top-nav" href="/webinar">Signup for a Webinar</a></li>
						<li class="top-items"><a class="top-nav" href="/choose-location-ebook/">Free eBook Download</a></li>
					</ul>
				
				</li>
				<li class="top-items"><a class="top-nav" href="/about/">About</a></li>
				<li class="top-items"><a class="top-nav" href="https://www.idealspot.com/app/login">Login</a></li>
			</ul>
			
			

			<form action="https://www.idealspot.com/app/businesses" method="post">
				<input id="submit-email" type="submit" value="Get Started">
				<input id="email-input" type="email" name="email" placeholder="Enter Email">
			</form>

			<button data-id="1" id="mobile-menu">
				<h6>Menu</h6>
				
			</button>

		</header><!-- .site-header -->
		<ul class="sub-nav resources">
			<li class="subnav-items">
				<h6>Customers &amp; Case Studies</h6>
				<a class="blue button" href="/resources/customers-case-studies">Learn More</a>
			</li>
			<li class="subnav-items">
				<h6>Docs</h6>
				<a class="blue button" href="/resources/docs">Learn More</a>
			</li>
			<li class="subnav-items">
				<h6>Idealspot Insights</h6>
				<a class="blue button" href="/resources/idealspot-insights">Learn More</a>
			</li>
			<li class="subnav-items">
				<h6>Signup for a Webinar</h6>
				<a class="blue button" href="/webinar">Learn More</a>
			</li>
			<li id="free-download">Get Your <a href="/choose-location-ebook/">Free Download</a> of the “Choose An Ideal Location” Book</li>
		</ul>

		<ul class="sub-nav solutions">
			<li id="solutions-rr-mast">
				<a class="link" href="/solutions/retail-restaurants">
					<h1 class="dark-blue">Retail &amp;</h1>
					<h2 class="orange">Restaurants</h2>
					<div class="inner">
						<button class="button orange" href="/solutions/retail-restaurants/">View Solutions</button>
					</div>
				</a>
			</li>
			<li id="solutions-bd-mast">
				<a class="link" href="/solutions/brokers-developers/">
					<h1 class="dark-blue">Brokers &amp;</h1>
					<h2 class="blue">Developers</h2>
					<div class="inner">
						<button class="button blue" href="/solutions/brokers-developers/">View Solutions</button>
					</div>
				</a>
			</li>
		</ul>
		<div id="content" class="site-content">
