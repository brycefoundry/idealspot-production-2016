<?php
/*
 * Template Name: Docs
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section id="sub-masthead">
			<h1 class="dark-blue">Docs</h1>
			
			
			
		</section>

		<section id="feed">
			<div class="grid-1">
			


				<form action="<?php bloginfo('url'); ?>">
					<fieldset>
						<input id="search-input" placeholder="Search for a document..." type="text" name="s" value="" maxlength="50" required="required" />
						<select name="category_name">
							<option value="docs">All Docs</option>
							<option value="getting-started">Getting Started</option>
						</select>
						<button class="blue button" id="search-btn" type="submit">Search</button>
					</fieldset>
				</form>
	

				<ul class="cat">
					<li>
						<div class="inner">
							<div class="img-container">
								<img src="<?php the_field('doc-category-thumb-1'); ?>"/>
							</div>

							<div class="content-container">
								<div class="contents">
									<h4 class="blue"><?php the_field('doc-category-1'); ?></h4>
									<p><?php the_field('doc-category-description-1'); ?></p>
									
								</div>
								<div class="bottom-bar">
									<div class="details">
										<span class="article-num"><?php echo wt_get_category_count(135); ?> Articles</span>
									</div>

									<button class="expand blue button">Expand +</button>
								</div>
							</div>
						</div>
						

						<ul class="articles">
							<?php query_posts('cat=135&posts_per_page=100'); //set p=x where x is post id of post you want to see or use query_posts('cat=1&posts_per_page=1); to show one post from Category 1
							if (have_posts()) : ?>	

							<?php while (have_posts()) : the_post(); ?>
								<li <?php post_class() ?> id="post-<?php the_ID(); ?>">
									<a href="<?php the_permalink() ?>"><h6 class="blue"><?php echo ShortenText(get_the_title()); ?></h6></a>
									<p><?php	the_excerpt('Read the rest of this entry »'); ?></p>
									<div class="bottom-bar">
										<img class="avatar" src="<?php my_gravatar_url() ?>" alt="">
										<span class="author"><?php the_author(); ?></span>
									</div>
									
								</li>
								<?php endwhile; ?>
								
								<?php else : ?>
									
								<?php endif; ?>

						</ul>
					</li>

					


				</ul>
			</div>
		</section>

		<?php include 'schedule-demo.php'; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
