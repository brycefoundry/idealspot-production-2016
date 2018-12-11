<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				
					<h1 class="dark-blue">404</h1>
					<h2 class="blue">Sorry We Can't Find That</h2>
					<div class="inner">
						<p>Check out some of our most recent case studies in the meantime to get an idea what to expect and what you can accomplish with Idealspot. Have a great day!</p>

					</div>



				
			</section><!-- .error-404 -->

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

		</main><!-- .site-main -->

		

	</div><!-- .content-area -->


<?php get_footer(); ?>
