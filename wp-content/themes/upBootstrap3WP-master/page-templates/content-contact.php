<?php
/**
 * Template Name: Page - Contact
 * The template used for displaying page content in page.php
 *
 * @author Jeremy Dahl | http://pacecreative.com/
 * @package upBootWP 0.1
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<div id="wrap">
		
	<div id="main" class="container">
		<div class="row"> <!-- Begin Hero  -->
			<div class="col-md-12">
				<img class="img-responsive" src="http://palebluedot.ca/test/ifp/wp-content/themes/upBootstrap3WP-master/img/img_ban_04.jpg" alt="Extract more value from every step in the recovery process.">
			</div>
		</div> <!-- End Hero -->
		<div class="row">
			<div class="col-md-10" id="title_holder">
				<h1 class="entry-title">Contact Us</h1>		
			</div>
			<div class="col-md-2" id="arrow1">
				<img src="http://palebluedot.ca/test/ifp/wp-content/uploads/2014/01/img_arr_title.jpg" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="entry-content maincontent blog1">
					<div class="col-md-5" id="docbox">
						<div class="row contact_1">
							<h3>Headquarters:</h3>
								IFP Canada<br>
								Suite 810, 744 – 4th Avenue S.W.<br>
								Calgary, AB T2P 3T4

						</div>
			
						<div class="row contact_1">
						<br>
							<h3>Sales &amp; Support:</h3>
							Phone: (403) 234-0342<br>
							Fax: (403) 234-8579 <br>
							Email: <a href="mailto:info@ifp-canada.com">info@ifp-canada.com</a>
						</div>

					</div>
					<div class="col-md-1">
					</div>
					<div class="col-md-5"></div>
					<div class="col-md-1"></div>
				</div><!-- .entry-content -->
	
			</div><!-- .col-md-12 -->

			<div class="col-md-4">
				<div class="row entry-content maincontent blog2">
					<div class="col-md-5" id="docbox">
						<div class="row contact_1">
							<h3>General Contact:</h3>
							Phone: (403) 234-0342<br>
							Fax: (403) 234-8579<br>
							Email: <a href="mailto:info@ifp-canada.com">info@ifp-canada.com</a>

						</div>
						<div class="row contact_1">
							<br>
							<h3>Another Department Here</h3>
								Eric Delamaide<br>
								Phone (403) 234-0342<br>
								Email: <a href="mailto:eric.delamaide@ifp-canada.com">eric@ifp-canada.com</a>

						</div>

					</div>
					<div class="col-md-1">
					</div>
					<div class="col-md-5"></div>
					<div class="col-md-1"></div>

				</div><!-- .entry-content -->
	
			</div><!-- .col-md-12 -->


				<div class="col-md-4 call">
					<div class="row" id="take-the2">
						<div class="col-md-2">
						</div>
						<div class="col-md-10">
							<p>Take the next step:</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<!-- spacer -->
						</div>
						<div class="col-md-10 bookholder">
							<div class="book-meeting2">
								<a class="btn btn-success btn-large btn-big" href="#">Book a meeting</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<!-- spacer -->
						</div>
					<?php upbootwp_subscribe() ?>
					</div>
				</div>
		</div><!-- .row -->

							<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
					<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
							'after'  => '</div>',
						));
					?>

	</div><!-- .container -->
<?php get_footer(); ?>