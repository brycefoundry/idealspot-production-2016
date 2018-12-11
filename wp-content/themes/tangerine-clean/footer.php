<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->
		
		<footer id="colophon" class="site-footer" role="contentinfo">
			
				<div class="col-left">
					<a href="" class="logo">Home</a>

					<p><?php the_field('footer-slogan', 156); ?>
	<a href="mailto:<?php the_field('footer-email', 156); ?>"><?php the_field('footer-email', 156); ?></a> • <?php the_field('footer-phone', 156); ?></p>
					<p><?php the_field('footer-details', 156); ?>
	<br /><a href="/contact-us/" class="contact-us">Contact Us</a> | <a href="<?php the_field('footer-link-1', 156); ?>"><?php the_field('footer-link-text-1', 156); ?></a> | <a href="<?php the_field('footer-link-2', 156); ?>"><?php the_field('footer-link-text-2', 156); ?></a></p>
				</div>
				<div class="col-mid">
					<h4 class="blue">Useful Links</h4>
					<ul>
						<li><h6 class="black"><a href="<?php the_field('useful-link-1', 156); ?>"><?php the_field('useful-link-text-1', 156); ?></a></h6></li>
						<li><h6 class="black"><a href="<?php the_field('useful-link-2', 156); ?>"><?php the_field('useful-link-text-2', 156); ?></a></h6></li>
						<li><h6 class="black"><a href="<?php the_field('useful-link-3', 156); ?>"><?php the_field('useful-link-text-3', 156); ?></a></h6></li>
						<li><h6 class="black"><a href="<?php the_field('useful-link-4', 156); ?>"><?php the_field('useful-link-text-4', 156); ?></a></h6></li>
						<li><h6 class="black"><a href="<?php the_field('useful-link-5', 156); ?>"><?php the_field('useful-link-text-5', 156); ?></a></h6></li>
					</ul>
				</div>
				<div class="col-right">
					<h4 class="blue">Social</h4>
					<a class="fb-btn" href="<?php the_field('social-link-1', 156); ?>">Facebook</a>
					<a class="tw-btn" href="<?php the_field('social-link-2', 156); ?>">Twitter</a>
					<a class="in-btn" href="<?php the_field('social-link-3', 156); ?>">LinkedIn</a>
				</div>
			
			
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
	<div class="modal-container">
		<div class="top">
			<h1 class="white">Schedule</h1>
			<h2 class="white">A Demo</h2>
		</div>
		

		<div>
			<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
				
				<div class="left">
					<input id="first_name" maxlength="40" name="first_name" size="20" type="text" placeholder="First Name">
					<input id="last_name" maxlength="80" name="last_name" size="20" type="text" placeholder="Last Name">
					
					
					<input type=hidden name="oid" value="00D41000000639F">
					<input type=hidden name="retURL" value="http://idealspot.com/thank-you">
					<input type=hidden name="lead_source" value="Website">
				</div>
				<div class="right">
					<input id="phone" maxlength="40" name="phone" size="20" type="text" placeholder="(XXX)-XXX-XXXX">
					<input id="email" maxlength="80" name="email" size="20" type="text" placeholder="name@email.com">
				</div>
				<div class="button-container">
					<input id="send-btn" type="submit" value="Send" name="phone" class="disabled" disabled="disabled">
				</div>
				
			</form>	
		</div>
	
		<div class="bottom">
			<button id="modal-cancel-btn">Cancel</button>

			
		</div>

	

	
				
		
	</div>

	<div class="overlay"></div>
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
