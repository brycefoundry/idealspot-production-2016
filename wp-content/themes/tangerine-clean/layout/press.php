<section class="anchors" id="press">
			<div class="grid-1">
				<h1 class="dark-blue"><?php the_field('press-header-lg'); ?></h1>
				<p><?php the_field('press-header-desc'); ?></p>
				
				<ul class="logo-soup">
					<li><img src="<?php the_field('press-image-1'); ?>" alt=""></li>
					<li><img src="<?php the_field('press-image-2'); ?>" alt=""></li>
					<li><img src="<?php the_field('press-image-3'); ?>" alt=""></li>
					<li><img src="<?php the_field('press-image-4'); ?>" alt=""></li>
					<li><img src="<?php the_field('press-image-5'); ?>" alt=""></li>
					<li><img src="<?php the_field('press-image-6'); ?>" alt=""></li>
				</ul>
				<h2 class="blue">Latest</h2>
				<ul class="articles">
					<?php query_posts('cat=80&posts_per_page=100'); //set p=x where x is post id of post you want to see or use query_posts('cat=1&posts_per_page=1); to show one post from Category 1
						if (have_posts()) : ?>

							<?php while (have_posts()) : the_post(); ?>
								<li <?php post_class() ?> id="post-<?php the_ID(); ?>">
									

									<div class="image-container float-left">
										<img src="<?php
											$press_id = get_the_ID();
											echo get_field("press-release-thumb", $press_id);
										?>
										"/>
										
									</div>

									<h5 class="blue">
										<?php the_time('l, F jS, Y') ?>
									</h5>

									<a href="<?php 
										$press_id = get_the_ID();
										echo get_field("press-release-url", $press_id);?>"><h6><?php
											$press_id = get_the_ID();
											echo get_field("press-release-title", $press_id);
										?></h6></a>
								</li>
							<?php endwhile; ?>
						
							<?php else : ?>
							
						<?php endif; ?>
					
					
				</ul>

				<button id="load-press" class="button blue" href="">Load More</button>
			</div>
		</section>