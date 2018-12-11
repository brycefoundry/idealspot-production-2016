<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			

			

			// End of the loop.
		endwhile;
		?>
	<section id="schedule-demo">
		<div class="container">
			<h1 class="black">Schedule</h1>
			<h2 class="blue">A Demo</h2>
			<p>Not convinced? Let us give you a personal tour of the application and show you how you can find the perfect customer for your business today.</p>	
			<a class="blue button demo" href="">Request A Demo</a>
		</div>
	</section>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->


<?php get_footer(); ?>
