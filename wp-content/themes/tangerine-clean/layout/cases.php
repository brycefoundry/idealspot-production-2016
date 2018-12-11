<?php
/*
 * Template Name: Customers & Case Studies
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section id="sub-masthead">
			<h1 class="white"><?php the_field('customers-header-lg'); ?></h1>
			<h2 class="blue"><?php the_field('customers-header-sm'); ?></h2>
			<p class="white"><?php the_field('customers-header-desc'); ?></p>
			
			
		</section>
		


		<ul class="tertiary-nav">
			<li><div class="filter" data-filter="all">All</div></li>
			<li><div class="filter" data-filter=".restaurants">Restaurants</div></li>
			<li><div class="filter" data-filter=".retailers">Retailers</div></li>
			<li><div class="filter" data-filter=".service">Service Industry</div></li>
			<li><div class="filter" data-filter=".brokers">Brokers</div></li>
		</ul>


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
