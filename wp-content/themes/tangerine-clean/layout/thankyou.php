<?php
/*
 * Template Name: Thank You
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section id="sub-masthead">
			<h1 class="dark-blue">Thank You</h1>
			<h2 class="blue">For Requesting a Demo</h2>
			
			<div class="inner">
				<p>For faster scheduling, go ahead and choose a time from the slots below so we can get you on the calendar right away. And, you can always jump into the IdealSpot app on your own by using the "Get Started" button on the top of the page. It's free so begin exploring specific addresses, broad areas, competitors and demographics. </p>
				<!-- Calendly inline widget begin -->
				<div class="calendly-inline-widget" style="min-width: 260px; height: 1020px;" data-url="https://calendly.com/chazcalendar/idealspot-demo"></div>
				<script type="text/javascript" src="https://calendly.com/assets/external/widget.js"></script>
				<!-- Calendly inline widget end -->
			</div>
			
		</section>
		
		<section id="case-feed" style="display: none;">
			<div id="case-container" class="grid-1">
				<div id="case-list">

					<?php query_posts('cat=136&posts_per_page=100'); //set p=x where x is post id of post you want to see or use query_posts('cat=1&posts_per_page=1); to show one post from Category 1
						if (have_posts()) : ?>	
						
						<?php while (have_posts()) : the_post(); ?>
							<div data-myorder="<?php 

							$count++;
							echo $count;

							

							?>" class="mix <?php 
								$case_id = get_the_ID();
								echo get_field("case-type", $case_id);
							?>" id="post-<?php the_ID(); ?>">
								<div class="img-container"><img src="
									<?php
											$case_id = get_the_ID();
											echo get_field("case-thumb", $case_id);
									?>"/>
								</div>

								<img class="logo" src="<?php 
									$case_id = get_the_ID();
									echo get_field("case-logo", $case_id);
									?>" alt="">

								<p><?php 
									$case_id = get_the_ID();
									echo get_field("case-excerpt", $case_id);
								?></p>
								<a class="button blue" href="<?php the_permalink() ?>">Read More</a>
								
							</div>
							<?php endwhile; ?>
							
							<?php else : ?>
								
							<?php endif; ?>

				</div>
			</div>
			
		</section>


		

		<?php include 'schedule-demo.php'; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
