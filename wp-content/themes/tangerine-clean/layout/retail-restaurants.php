<?php
/*
 * Template Name: Retail & Restaurants
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section id="sub-masthead">
			<h1 class="dark-blue"><?php the_field('retail-header-lg'); ?></h1>
			<h2 class="orange"><?php the_field('retail-header-sm'); ?></h2>
			<p><?php the_field('retail-header-desc'); ?></p>
			
		</section>

		<section id="solution-feature" class="orange">
			<div class="grid-1">
				<div class="col-left">
					<h2 class="dark-blue"><?php the_field('retail-main-content-header-lg'); ?></h2>
					<h2 class="orange"><?php the_field('retail-main-content-header-sm'); ?></h2>
					<p><?php the_field('retail-main-content-header-desc'); ?></p>
					
				</div>

				<div class="col-right">
					<?php the_field('retail-main-content-video'); ?>
				</div>
				
				<ul>
					<li>
						<div class="float-left">
							<img src="/wp-content/themes/tangerine-clean/images/retail-restaurants/icn-1.svg" alt="">
						</div>
						<div class="content">
							<h4 class="orange"><?php the_field('retail-list-item-header-1'); ?></h4>
							<p><?php the_field('retail-list-item-content-1'); ?></p>
						</div>
					</li>
					<li>
						<div class="float-left">
							<img src="/wp-content/themes/tangerine-clean/images/retail-restaurants/icn-2.svg" alt="">
						</div>
						<div class="content">
							<h4 class="orange"><?php the_field('retail-list-item-header-2'); ?></h4>
							<p><?php the_field('retail-list-item-content-2'); ?></p>
						</div>
					</li>
					<li>
						<div class="float-left">
							<img src="/wp-content/themes/tangerine-clean/images/retail-restaurants/icn-3.svg" alt="">
						</div>
						<div class="content">
							<h4 class="orange"><?php the_field('retail-list-item-header-3'); ?></h4>
							<p><?php the_field('retail-list-item-content-3'); ?></p>
						</div>
					</li>
				</ul>
			</div>			
		</section>

		<!--<section id="solution-cta">
			<div class="grid-1">
				<h1 class="dark-blue">Ready to Find Your</h1>
				<h2 class="sub orange">Ideal Location?</h2>

				<div class="cta-container">
					<img src="/wp-content/themes/tangerine-clean/images/retail-restaurants/icn-4.svg" alt="">
					<h6>Ready To Start Mapping Your Business And Looking For Your Locations ?</h6>
					<a class="orange button" href="">Go to Your Custom Map</a>
				</div>

				<div class="cta-container">
					<img src="/wp-content/themes/tangerine-clean/images/retail-restaurants/icn-5.svg" alt="">
					<h6>Want To Get More Infomation On Our Current Data Products?</h6>
					<a class="orange button" href="">View All Of Our Products</a>
				</div>

				<div class="cta-container last">
					<img src="/wp-content/themes/tangerine-clean/images/retail-restaurants/icn-6.svg" alt="">
					<h6>Want To Talk To One Of Our Location Experts / Data Scientists?</h6>
					<a class="orange button" href="">Schedule a Demo</a>
				</div>
			</div>
		</section>-->
		
		<?php include 'brands.php'; ?>
		

	
		
		<?php include 'schedule-demo.php'; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
