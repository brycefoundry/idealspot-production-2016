<?php
/*
 * Template Name: Home
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section id="home-masthead">
			<h1 class="dark-blue"><?php the_field('main_header'); ?></h1>
			<h1 class="dark-blue"><?php the_field('home_main_header_2'); ?></h1>
			<h2 class="blue"><?php the_field('home_main_sub_header'); ?></h2>
			<div class="inner">
				
				<a class="button orange demo" href="">Request a Demo</a>

				<form id="app-cta" class="front-page-cta" action="https://www.idealspot.com/app/businesses" method="post">
					
					<input class="button blue btn cta existing-business" type="submit" value="Get Started for Free">
				</form>
			</div>
			<div id="cloud-1" class="clouds sm"></div>
			<div id="cloud-2" class="clouds lg"></div>
			<div id="cloud-3" class="clouds med"></div>
			<div id="cloud-4" class="clouds lg"></div>
			<div id="cloud-5" class="clouds sm"></div>
			<div id="cloud-6" class="clouds med"></div>
			<div id="cloud-7" class="clouds lg"></div>
			<div id="cloud-8" class="clouds sm"></div>
			<div id="cloud-9" class="clouds lg"></div>
			<div id="car-1" class="cars sw"></div>
			<div id="car-2" class="cars ne"></div>
			<div id="car-3" class="cars se"></div>
			<div id="car-4" class="cars nw"></div>
			<div id="car-5" class="cars sw"></div>
			<div id="car-6" class="cars ne"></div>

			<div id="people-1" class="people"></div>
			<div id="people-2" class="people"></div>
			<ul id="popup-list">
				<li class="popups inactive" id="pop-up-1">
					<a href="/products/#product-2">
						<div class="img-container">
							<img src="<?php the_field('pop_up_1_icon');?>"/>
						</div>

						<div class="content">
							<h5 class="blue"><?php the_field('pop_up_1_header'); ?></h5>
							<p><?php the_field('pop_up_1_content'); ?></p>
						</div>	
					</a>
				</li>
				<li class="popups inactive" id="pop-up-2">
					<a href="/products/#product-3">
						<div class="img-container">
							<img src="<?php the_field('pop_up_2_icon');?>"/>
						</div>

						<div class="content">
							<h5 class="blue"><?php the_field('pop_up_2_header'); ?></h5>
							<p><?php the_field('pop_up_2_content'); ?></p>
						</div>	
					</a>
				</li>
				
				<li class="popups inactive" id="pop-up-3">
					<a href="/products/#product-5">
						<div class="img-container">
							<img src="<?php the_field('pop_up_3_icon');?>"/>
						</div>

						<div class="content">
							<h5 class="blue"><?php the_field('pop_up_3_header'); ?></h5>
							<p><?php the_field('pop_up_3_content'); ?></p>
						</div>	
					</a>
				</li>
				
				<li class="popups inactive" id="pop-up-4">
					<a href="/products/#product-7">
						<div class="img-container">
							<img src="<?php the_field('pop_up_4_icon');?>"/>
						</div>

						<div class="content">
							<h5 class="blue"><?php the_field('pop_up_4_header'); ?></h5>
							<p><?php the_field('pop_up_4_content'); ?></p>
						</div>	
					</a>
				</li>
				
				<li class="popups inactive" id="pop-up-5">
					<a href="/products/#product-9">
						<div class="img-container">
							<img src="<?php the_field('pop_up_5_icon');?>"/>
						</div>

						<div class="content">
							<h5 class="blue"><?php the_field('pop_up_5_header'); ?></h5>
							<p><?php the_field('pop_up_5_content'); ?></p>
						</div>	
					</a>
				</li>

				

			</ul>
			
			<div class="background-1">
				<img src="/wp-content/themes/tangerine-clean/images/mast-bg-lg.png" alt="">
			</div>

			<div class="background-2">
				<img src="/wp-content/themes/tangerine-clean/images/home/mast-bg-grid.png" alt="">
			</div>
			
			<div class="loader"></div>
		</section>

		<section id="home-2">
			<div class="grid-1">
				<h1 class="black"><?php the_field('home_section_2_header'); ?></h1>
				<h2 class="blue"><?php the_field('home_section_2_sub_header'); ?></h2>
				<p><?php the_field('home_section_2_content_1'); ?></p>
					
				<div class="retail-container">
					<a href="/solutions/retail-restaurants" class="retail-illustration"></a>
					<h4 class="black"><?php the_field('home_section_2_business_header_1'); ?></h4>
					<p><?php the_field('home_section_2_business_content_1'); ?></p>
					<a class="button orange" href="/solutions/retail-restaurants">View Solutions</a>
				</div>
				
				
				<div class="broker-container">
					<a href="/solutions/brokers-developers" class="broker-illustration"></a>
					<div class="content">
						<h4 class="black"><?php the_field('home_section_2_business_content_2'); ?></h4>
						<p><?php the_field('home_section_2_business_header_2'); ?></p>
						<a class="button blue" href="/solutions/brokers-developers">View Solutions</a>
					</div>
					
				</div>
				
				
			</div>
		</section>
		
		<section id="home-3">
			<div class="grid-1">
				<h1 class="black"><?php the_field('home_section_3_header'); ?></h1>
				<h2 class="blue"><?php the_field('home_section_3_sub_header'); ?></h2>
				<p><?php the_field('home_section_3_content_1'); ?></p>
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
								<h5 class="c-1"><a href="/products/#product-2"><?php the_field('circle_header_1'); ?></a></h5>
								<h5 class="c-3"><a href="/products/#product-3"><?php the_field('circle_header_4'); ?></a></h5>
								<h5 class="c-2"><a href="/products/#product-5"><?php the_field('circle_header_3'); ?></a></h5>
								<h5 class="c-4"><a href="/products/#product-6"><?php the_field('circle_header_6'); ?></a></h5>
								<h5 class="c-5"><a href="/products/#product-7"><?php the_field('circle_header_2'); ?></a></h5>
								<h5 class="c-6"><a href="/products/#product-9"><?php the_field('circle_header_5'); ?></a></h5>
						</div>					
					</div>
				</div>
				
			</div>
		</section>

		<section id="pullout">
			<div class="grid-1">
				<img class="float-left" src="/wp-content/themes/tangerine-clean/images/home/computer-store@2x.png" alt="">
				<blockquote class="white"><?php the_field('callout_content'); ?></blockquote>
			</div>
			
		</section>

		<section id="home-4">
			<div class="grid-1">
				
				<div id="industry-standards">
					<div class="col-left">
						<h1 class="black"><?php the_field('standards_header'); ?></h1>
						<h2 class="blue"><?php the_field('standards_subheader'); ?></h2>

						<p><?php the_field('standards_content'); ?></p>
						
					</div>
					<div class="float-right video-container"><?php the_field('standards_video'); ?></div>
				</div>
				
				<div id="innovative-tech">
					<div class="col-right">
						<h1 class="black"><?php the_field('innovative_header'); ?></h1>
						<h2 class="orange"><?php the_field('innovative_subheader'); ?></h2>
						<blockquote><?php the_field('innovative_blockquote'); ?></blockquote>

						<p><?php the_field('innovative_content'); ?></p>
						
					</div>
					<div class="float-left video-container"><?php the_field('innovative_video'); ?></div>
			</div>

				
				
			</div>			
		</section>

		<?php include 'brands.php'; ?>
		<?php include 'schedule-demo.php'; ?>

		

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
