<?php
/*
 * Template Name: Contact Us Thank You
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section id="sub-masthead">
			<h1 class="dark-blue">Thank You</h1>
			<h2 class="blue">For Contacting Us</h2>
			
			<div class="inner">
				<p>Check out some of our most recent case studies below to see how IdealSpot can help you succeed and how you can take your business to the next level with some of the best analysis in the industry.</p>
				
				
			</div>
			
		</section>
		
		<section id="case-feed">
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
