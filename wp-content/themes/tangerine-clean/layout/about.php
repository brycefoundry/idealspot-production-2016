<?php
/*
 * Template Name: About
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section id="sub-masthead">
			<h1 class="dark-blue"><?php the_field('about-mast-header-lg'); ?></h1>
			<h2 class="blue"><?php the_field('about-mast-header-sm'); ?></h2>
			<div class="inner">
				<a class="button blue" href="/contact-us/">Contact Us</a>
				<a class="button orange demo" href="">Schedule a Demo</a>
			</div>
			
		</section>
		

		<ul class="tertiary-nav">
			<li data-id="our-story"><a id="our-story-link" href="#">Our Story</a></li>
			<li data-id="our-team"><a id="our-team-link" href="#">Our Team</a></li>
			<li data-id="our-investors"><a id="our-investors-link" href="#">Our Investors</a></li>
			<li data-id="press"><a id="press-link" href="#">Press</a></li>
		</ul>

		<section class="anchors" id="our-story">
			<div class="grid-1">
				<h1 class="dark-blue"><?php the_field('story-header-lg'); ?></h1>
				<h2 class="blue"><?php the_field('story-header-sm'); ?></h2>
				<p><?php the_field('story-content'); ?></p>

				
			</div>
		</section>

		<section class="anchors" id="our-team">
			<div class="grid-1">
				<h1 class="dark-blue"><?php the_field('team-header-lg'); ?></h1>
				<blockquote><?php the_field('team-header-sm'); ?></blockquote>
			
				<ul>
					<li>
						<div class="container">
							<img class="float-left" src="<?php the_field('team-member-avatar-1'); ?>" alt="">
							<h6><?php the_field('team-member-name-1'); ?></h6>
							<h6><?php the_field('team-member-title-1'); ?></h6>
							<a class="in-btn-circl" href="<?php the_field('team-member-social-1'); ?>"></a>
						</div>
						<p><?php the_field('team-member-description-1'); ?></p>
					</li>

					<li>
						<div class="container">
							<img class="float-left" src="<?php the_field('team-member-avatar-2'); ?>" alt="">
							<h6><?php the_field('team-member-name-2'); ?></h6>
							<h6><?php the_field('team-member-title-2'); ?></h6>
							<a class="in-btn-circl" href="<?php the_field('team-member-social-2'); ?>"></a>
						</div>
						<p><?php the_field('team-member-description-2'); ?></p>
					</li>

					<li>
						<div class="container">
							<img class="float-left" src="<?php the_field('team-member-avatar-3'); ?>" alt="">
							<h6><?php the_field('team-member-name-3'); ?></h6>
							<h6><?php the_field('team-member-title-3'); ?></h6>
							<a class="in-btn-circl" href="<?php the_field('team-member-social-3'); ?>"></a>
						</div>
						<p><?php the_field('team-member-description-3'); ?></p>
					</li>

					<li>
						<div class="container">
							<img class="float-left" src="<?php the_field('team-member-avatar-4'); ?>" alt="">
							<h6><?php the_field('team-member-name-4'); ?></h6>
							<h6><?php the_field('team-member-title-4'); ?></h6>
							<a class="in-btn-circl" href="<?php the_field('team-member-social-4'); ?>"></a>
						</div>
						<p><?php the_field('team-member-description-4'); ?></p>
					</li>

					<li>
						<div class="container">
							<img class="float-left" src="<?php the_field('team-member-avatar-5'); ?>" alt="">
							<h6><?php the_field('team-member-name-5'); ?></h6>
							<h6><?php the_field('team-member-title-5'); ?></h6>
							<a class="in-btn-circl" href="<?php the_field('team-member-social-5'); ?>"></a>
						</div>
						<p><?php the_field('team-member-description-5'); ?></p>
					</li>

					<li>
						<div class="container">
							<img class="float-left" src="<?php the_field('team-member-avatar-6'); ?>" alt="">
							<h6><?php the_field('team-member-name-6'); ?></h6>
							<h6><?php the_field('team-member-title-6'); ?></h6>
							<a class="in-btn-circl" href="<?php the_field('team-member-social-6'); ?>"></a>
						</div>
						<p><?php the_field('team-member-description-6'); ?></p>
					</li>

					<li>
						<div class="container">
							<img class="float-left" src="<?php the_field('team-member-avatar-7'); ?>" alt="">
							<h6><?php the_field('team-member-name-7'); ?></h6>
							<h6><?php the_field('team-member-title-7'); ?></h6>
							<a class="in-btn-circl" href="<?php the_field('team-member-social-7'); ?>"></a>
						</div>
						<p><?php the_field('team-member-description-7'); ?></p>
					</li>
					<li>
						<div class="container">
							<img class="float-left" src="<?php the_field('team-member-avatar-8'); ?>" alt="">
							<h6><?php the_field('team-member-name-8'); ?></h6>
							<h6><?php the_field('team-member-title-8'); ?></h6>
							<a class="in-btn-circl" href="<?php the_field('team-member-social-8'); ?>"></a>
						</div>
						<p><?php the_field('team-member-description-8'); ?></p>
					</li>

					
				</ul>
			
			</div>
			</section>

		<section class="anchors" id="our-investors">
			<div class="grid-1">
				<h1 class="dark-blue"><?php the_field('investors-header-lg'); ?></h1>
				<div class="investor">
					<img src="<?php the_field('investor-image-1'); ?>" alt="">
					<a class="button blue" target="_blank" href="<?php the_field('investor-link-1'); ?>">Visit Site</a>
				</div>

				<div class="investor">
					<img src="<?php the_field('investor-image-2'); ?>" alt="">
					<a class="button blue" target="_blank" href="<?php the_field('investor-link-2'); ?>">Visit Site</a>
				</div>
			</div>
		</section>

		<?php include 'press.php'; ?>

	
		
		<?php include 'schedule-demo.php'; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
