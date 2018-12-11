<?php
/*
 * Template Name: Contact Us
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section id="sub-masthead">
			<h1 class="dark-blue"><?php the_field('contact-header-lg'); ?></h1>
			<p><?php the_field('contact-header-desc'); ?></p>
		</section>

		<section id="contact-form">
			<div class="grid-1">
				<div class="form-container">
					
					

					

					
					<!--<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
					<form class="" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

						<input type=hidden name="oid" value="00D41000000639F">
						<input type=hidden name="retURL" value="http://idealspot.com/thank-you-contact-us">
						

						<div class="col-left">
							<label class="first-name-container" for="first_name">First Name (required)<br>
								<input  id="first_name" maxlength="40" name="first_name" size="20" type="text" />
								
							</label>

							<label class="last-name-container" for="last_name">Last Name (required) <br>
								<input  id="last_name" maxlength="80" name="last_name" size="20" type="text" />
							</label>
							<label for="phone">Phone (required) <br>
								<input  id="phone" maxlength="40" name="phone" size="20" type="text" />
								
							</label>

							<label for="email">Email (required) <br>
								<input  id="email" maxlength="80" name="email" size="20" type="text" />
							</label>

						</div>
						
						<div class="col-right">
							<label class="reason-container">Reason (required) <br>
								<span>
									<select  id="00N4100000Fh7sT" name="00N4100000Fh7sT" title="Reason">
										<option value="Schedule a Meeting">Schedule a Meeting</option>
										<option value="Sales Inquiry">Sales Inquiry</option>
										<option value="General Inquiry">General Inquiry</option>
										<option value="Support Inquiry">Support Inquiry</option>
									</select>
								</span>
							</label>

							<label class="message-container">
								Your Message (required) <br>
								<span>
									<textarea name="description" cols="40" rows="10"></textarea>
								</span>
							</label>
						</div>
						
						<div class="button-container">
							<input type="submit" name="submit">
						</div>


					</form>
					-->

					<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
<!--  If necessary, please modify the charset parameter to specify the        -->
<!--  character set of your HTML page.                                        -->
<!--  ----------------------------------------------------------------------  -->

<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <FORM> element to your page.             -->
<!--  ----------------------------------------------------------------------  -->

<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

<input type=hidden name="oid" value="00D41000000639F">
<input type=hidden name="retURL" value="http://idealspot.com/thank-you-contact-us">
<input type=hidden name="lead_source" value="Website">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
<!--  these lines if you wish to test in debug mode.                          -->
<!--  <input type="hidden" name="debug" value=1>                              -->
<!--  <input type="hidden" name="debugEmail" value="par@idealspot.com">       -->
<!--  ----------------------------------------------------------------------  -->

<label for="first_name">First Name</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" /><br>

<label for="last_name">Last Name</label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" /><br>

<label for="phone">Phone</label><input  id="phone" maxlength="40" name="phone" size="20" type="text" /><br>

<label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="text" /><br>

Reason:<select  id="00N4100000Fh7sT" name="00N4100000Fh7sT" title="Reason"><option value="">--None--</option><option value="Schedule a Meeting">Schedule a Meeting</option>
<option value="Sales Inquiry">Sales Inquiry</option>
<option value="General Inquiry">General Inquiry</option>
<option value="Support Inquiry">Support Inquiry</option>
</select><br>

<label for="description">Description</label><textarea name="description"></textarea><br>

<input type="submit" name="submit">

</form>

					


				</div>
				
			</div>
			
		</section>

		<section id="more-contact">
			<div class="grid-1">
				<div class="col-left">
					<h4 class="blue"><?php the_field('phone-header'); ?></h4>
					<p><?php the_field('phone-number'); ?></p>

					<h4 class="blue"><?php the_field('address-header'); ?></h4>
					<p><?php the_field('address-info'); ?></p>
				</div>
				<div class="col-right">
					<?php the_field('google-map'); ?>
				</div>
			</div>
		</section>
	
		
		<?php include 'schedule-demo.php'; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
