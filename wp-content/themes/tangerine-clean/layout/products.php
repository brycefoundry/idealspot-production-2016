<?php
/*
 * Template Name: Products
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section id="sub-masthead">
			<h1 class="dark-blue">Demographics</h1>
			<span class="plus-icn">+</span>
			<ul>
				<li class=""><h2 class="orange"><?php the_field('products-rotate-header-1'); ?></h2></li>
				<li class="inactive"><h2 class="orange"><?php the_field('products-rotate-header-2'); ?></h2></li>
				<li class="inactive"><h2 class="orange"><?php the_field('products-rotate-header-3'); ?></h2></li>
			</ul>
			
			
		</section>

		<section id="fivesteps">
			<div class="grid-1">
			
				<div id="circle-graphic-container">
					<div class="legend">
						<div class="blue">
							<h6 class="white">Industry Standard</h6>
						</div>
						<div class="orange">
							<h6 class="white">Innovative Tech</h6>
						</div>
					</div>

					<div class="circle-graphic">
						<div class="grid-1">
							<h5 class="c-1"><a href="/products/#product-2"><?php the_field('circle-header-1'); ?></a></h5>
							<h5 class="c-3"><a href="/products/#product-3"><?php the_field('circle-header-4'); ?></a></h5>
							<h5 class="c-2"><a href="/products/#product-5"><?php the_field('circle-header-3'); ?></a></h5>
							<h5 class="c-4"><a href="/products/#product-6"><?php the_field('circle-header-6'); ?></a></h5>
							<h5 class="c-5"><a href="/products/#product-7"><?php the_field('circle-header-2'); ?></a></h5>
							<h5 class="c-6"><a href="/products/#product-9"><?php the_field('circle-header-5'); ?></a></h5>
						</div>					
					</div>
				</div>

				
			</div>


		</section>

		<section id="fivesteps-breakdown">
			<div class="grid-1">
				
					<blockquote class="white"><strong>IdealSpot</strong> combines accurate and relevant data with thoughtful analysis to help retailers, landlords, and commercial real estate providers find and evaluate locations. Map existing, competitive, and potential locations for your business. Explore the demographics of your city, and evaluate the population surrounding any location on your map.</blockquote>
					<br />
					<blockquote class="white"><strong>Social Interest and Search Intent</strong> map layers reveal geo-located demand for your product or service. Hourly vehicle traffic counts let you understand the flow of potential customers near your locations. Analyze the retail landscape using Market Gap, Void, and Balance, or through our Location Scoring to plot Market Opportunities for your business.</blockquote>
				
			</div>
			
		</section>

		<section id="more">
			
			<div class="grid-1">
				<aside>
					<ul>
						<li><a data-id="product-1" href="#product-1"><?php the_field('product-header-1'); ?></a></li>
						<li><a data-id="product-2" href="#product-2"><?php the_field('product-header-2'); ?></a></li>
						<li><a data-id="product-3" href="#product-3"><?php the_field('product-header-3'); ?></a></li>
						<li><a data-id="product-4" href="#product-4"><?php the_field('product-header-4'); ?></a></li>
						<li><a data-id="product-5" href="#product-5"><?php the_field('product-header-5'); ?></a></li>
						<li><a data-id="product-6" href="#product-6"><?php the_field('product-header-6'); ?></a></li>
						<li><a data-id="product-7" href="#product-7"><?php the_field('product-header-7'); ?></a></li>
						<li><a data-id="product-8" href="#product-8"><?php the_field('product-header-8'); ?></a></li>
						<li><a data-id="product-9" href="#product-9"><?php the_field('product-header-9'); ?></a></li>
						
					</ul>
					
					<button id="coming-soon-btn" class="button orange">Coming Soon</button>

				</aside>
				<div class="content">
					<h2 id="product-1" class="dark-blue"><?php the_field('product-header-1'); ?></h2>
					<div class="float-vid"><?php the_field('product-video-1'); ?></div>
					<p class="text-content"><?php the_field('product-content-1'); ?></p>
					
				</div>

				<div class="content">
					<h2 id="product-2" class="dark-blue"><?php the_field('product-header-2'); ?></h2>
					<div class="float-vid"><?php the_field('product-video-2'); ?></div>
					<p class="text-content"><?php the_field('product-content-2'); ?></p>
					
				</div>

				<div class="content">
					<h2 id="product-3" class="dark-blue"><?php the_field('product-header-3'); ?></h2>
					<div class="float-vid"><?php the_field('product-video-3'); ?></div>
					<p class="text-content"><?php the_field('product-content-3'); ?></p>
					
				</div>

				<div class="content">
					<h2 id="product-4" class="dark-blue"><?php the_field('product-header-4'); ?></h2>
					<div class="float-vid"><?php the_field('product-video-4'); ?></div>
					<p class="text-content"><?php the_field('product-content-4'); ?></p>
					
				</div>

				<div class="content">
					<h2 id="product-5" class="dark-blue"><?php the_field('product-header-5'); ?></h2>
					<div class="float-vid"><?php the_field('product-video-5'); ?></div>
					<p class="text-content"><?php the_field('product-content-5'); ?></p>
					
				</div>

				<div class="content">
					<h2 id="product-6" class="dark-blue"><?php the_field('product-header-6'); ?></h2>
					<div class="float-vid"><?php the_field('product-video-6'); ?></div>
					<p class="text-content"><?php the_field('product-content-6'); ?></p>
					
				</div>

				<div class="content">
					<h2 id="product-7" class="dark-blue"><?php the_field('product-header-7'); ?></h2>
					<div class="float-vid"><?php the_field('product-video-7'); ?></div>
					<p class="text-content"><?php the_field('product-content-7'); ?></p>
					
				</div>

				<div class="content">
					<h2 id="product-8" class="dark-blue"><?php the_field('product-header-8'); ?></h2>
					<div class="float-vid"><?php the_field('product-video-8'); ?></div>
					<p class="text-content"><?php the_field('product-content-8'); ?></p>
					
				</div>
				<div class="content">
					<h2 id="product-9" class="dark-blue"><?php the_field('product-header-9'); ?></h2>
					<div class="float-vid"><?php the_field('product-video-9'); ?></div>
					<p class="text-content"><?php the_field('product-content-9'); ?></p>
					
				</div>
				
			</div>
			


		</section>

		<section id="coming-soon">
			<div class="grid-1">
				<h1 class="white"><?php the_field('coming-soon-header'); ?></h1>
				<div class="col-right">
					

					<h4 class="white"><?php the_field('product-upcoming-data-header'); ?></h4>
					<?php the_field('product-upcoming-data-list'); ?>

					<h4 class="white"><?php the_field('product-upcoming-features-header'); ?></h4>
					<?php the_field('product-upcoming-features-list'); ?>
				</div>
				

				
			</div>
		</section>

		<div class="scroll-down-btn">
			
		</div>

		<?php include 'schedule-demo.php'; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
