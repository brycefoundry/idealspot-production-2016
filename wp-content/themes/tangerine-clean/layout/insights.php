<?php
/*
 * Template Name: Insights
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section id="sub-masthead">
			<h1 class="white">Idealspot</h1>
			
			<h2 class="white">Insights</h2>
			
			
		</section>
		
		<section id="case-feed">
			<div id="articles" class="grid-1">
				<div class="search-container">
					<input class="search" id="search-input" placeholder="Search for Insights">
					<button class="sort blue button" data-sort="title" id="search-btn">Search</button>
				</div>
					
					
				
				
				

				
				<ul class="list">
				<?php query_posts('cat=133&posts_per_page=100'); //set p=x where x is post id of post you want to see or use query_posts('cat=1&posts_per_page=1); to show one post from Category 1
				if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>
					<li <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<div class="img-container">
							<?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
						</div>
						<a class="link" href="<?php the_permalink() ?>"><h6 class="title"><?php echo ShortenText(get_the_title()); ?></h6></a>
						<h5 class="timestamp"><?php the_time('l, F jS, Y') ?></h5>
						<p><?php	the_excerpt('Read the rest of this entry »'); ?></p>
						<a class="button blue" href="<?php the_permalink() ?>">Read More</a>
					</li>
					<?php endwhile; ?>
					
					<?php else : ?>
						<h2 class="center">Not Found</h2>
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php get_search_form(); ?>
					<?php endif; ?>
					</ul>
			</div>
			
		</section>
		

		<?php include 'schedule-demo.php'; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
