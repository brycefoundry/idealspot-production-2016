<?php
/*
 * Template Name: Landing
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section id="sub-masthead">
			<h1 class="dark-blue"><?php the_field('landing-header-lg'); ?></h1>
			<h2 class="orange"><?php the_field('landing-header-sm'); ?></h2>
			<p><?php the_field('landing-header-desc'); ?></p>
			<div class="inner">
				<a class="button orange demo" href="">Request a Demo</a>
				<form id="app-cta" class="front-page-cta" action="https://www.idealspot.com/app/businesses" method="post">
					
					<input class="button blue btn cta existing-business" type="submit" value="Get Started for Free">
				</form>
			</div>
		</section>

		<section id="landing-feature" class="orange">
			<div class="grid-1">
				
				
				<p><?php the_field('landing-content'); ?></p>

				<h2 class="dark-blue"><?php the_field('work-list-item-1'); ?></h2>

			
				<ul>
					<li>
						<div class="container">
							<span class="num">1</span>	
							<span class="icn"><img src="<?php the_field('work-list-item-image-1'); ?>" alt=""></span>	
						</div>
						<h6><?php the_field('work-list-item-1'); ?></h6>
					</li>
					<li>
						<div class="container">
							<span class="num">2</span>	
							<span class="icn"><img src="<?php the_field('work-list-item-image-2'); ?>" alt=""></span>	
						</div>
						<h6><?php the_field('work-list-item-2'); ?></h6>
					</li>
					<li>
						<div class="container">
							<span class="num">3</span>	
							<span class="icn"><img src="<?php the_field('work-list-item-image-3'); ?>" alt=""></span>	
						</div>
						<h6><?php the_field('work-list-item-3'); ?></h6>
					</li>
					<li>
						<div class="container">
							<span class="num">4</span>	
							<span class="icn"><img src="<?php the_field('work-list-item-image-4'); ?>" alt=""></span>	
						</div>
						<h6><?php the_field('work-list-item-4'); ?></h6>
					</li>
					<li>
						<div class="container">
							<span class="num">5</span>	
							<span class="icn"><img src="<?php the_field('work-list-item-image-5'); ?>" alt=""></span>	
						</div>
						<h6><?php the_field('work-list-item-5'); ?></h6>
					</li>
					
				</ul>
			
				
				
			</div>			
		</section>

		
		
		<?php include 'brands.php'; ?>
		

	
		
		<?php include 'schedule-demo.php'; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
