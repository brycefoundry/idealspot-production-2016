<?php
/*
 * Template Name: Brokers & Developers
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section id="sub-masthead">
			
			<h1 class="dark-blue"><?php the_field('brokers-header-lg'); ?></h1>
			<h2 class="blue"><?php the_field('brokers-header-sm'); ?></h2>
			<p><?php the_field('broker-header-desc'); ?></p>

			
			
		</section>

		<section id="solution-feature" class="blue">
			<div class="grid-1">
				<div class="col-left">
					<h2 class="dark-blue"><?php the_field('broker-main-content-header-lg'); ?></h2>
					<h2 class="blue"><?php the_field('broker-main-content-header-sm'); ?></h2>
					<p><?php the_field('broker-main-content-header-desc'); ?></p>
					
					
				</div>

				<div class="col-right">
					<?php the_field('broker-main-content-video'); ?>
				</div>

				<ul>
					<li>
						<div class="float-left">
							<img src="/wp-content/themes/tangerine-clean/images/brokers-developers/icn-1.svg" alt="">
						</div>
						<div class="content">
							<h4 class="blue"><?php the_field('broker-list-item-header-1'); ?></h4>
							<p><?php the_field('broker-list-item-content-1'); ?></p>
						</div>
					</li>
					<li>
						<div class="float-left">
							<img src="/wp-content/themes/tangerine-clean/images/brokers-developers/icn-2.svg" alt="">
						</div>
						<div class="content">
							<h4 class="blue"><?php the_field('broker-list-item-header-2'); ?></h4>
							<p><?php the_field('broker-list-item-content-2'); ?></p>
						</div>
					</li>
					<li>
						<div class="float-left">
							<img src="/wp-content/themes/tangerine-clean/images/brokers-developers/icn-3.svg" alt="">
						</div>
						<div class="content">
							<h4 class="blue"><?php the_field('broker-list-item-header-3'); ?></h4>
							<p><?php the_field('broker-list-item-content-3'); ?></p>
						</div>
					</li>
				</ul>
			</div>			
		</section>	

	<!--	<section id="solution-cta">
			<div class="grid-1">
				<h1 class="dark-blue"><?php the_field('broker-section-ready-header-lg'); ?></h1>
				<h2 class="sub blue"><?php the_field('broker-section-ready-header-sm'); ?></h2>

				<div class="cta-container">
					<img src="/wp-content/themes/tangerine-clean/images/brokers-developers/icn-4.svg" alt="">
					<h6><?php the_field('broker-section-2-item-header-1'); ?></h6>
					<a class="blue button" href="<?php the_field('broker-section-2-item-link-1'); ?>">Go to Your Custom Map</a>
				</div>

				<div class="cta-container">
					<img src="/wp-content/themes/tangerine-clean/images/brokers-developers/icn-5.svg" alt="">
					<h6><?php the_field('broker-section-2-item-header-2'); ?></h6>
					<a class="blue button" href="<?php the_field('broker-section-2-item-link-2'); ?>">View All Of Our Products</a>
				</div>

				<div class="cta-container last">
					<img src="/wp-content/themes/tangerine-clean/images/brokers-developers/icn-6.svg" alt="">
					<h6><?php the_field('broker-section-2-item-header-3'); ?></h6>
					<a class="blue button" href="<?php the_field('broker-section-2-item-link-3'); ?>">Schedule a Demo</a>
				</div>	
			</div>
		</section>-->

		<?php include 'brands.php'; ?>

		<?php include 'schedule-demo.php'; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
