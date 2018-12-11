<?php
/*
 * Template Name: Webinar
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section id="sub-masthead">
			<h1 class="dark-blue">Demand Driven</h1>
			<h1 class="dark-blue">Site Selection</h1>
			<h2 class="blue">Find Your Ideal Spot</h2>
			<div class="inner">
				<a class="button blue" href="">Get Started For Free</a>
				<a class="button orange" id="demo" href="">Request a Demo</a>
			</div>
			
		</section>

		

		<?php include 'schedule-demo.php'; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
