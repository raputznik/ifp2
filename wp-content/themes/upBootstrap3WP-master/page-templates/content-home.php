<?php
/**
 * Template Name: Page - Home
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container">
		<div class="row"> <!-- Begin Hero  -->
			<div class="col-md-12">
				<img class="img-responsive" src="wp-content/themes/upBootstrap3WP-master/img/img_ban_02.jpg" alt="Our Expertise">
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 pagination-centered">
				<div class="information">
					<p>What information are you looking for?</p>
				</div>
			</div>
		</div> <!-- End Hero -->
				
		<div class="row row2"> <!-- Begin Information -->
				<div class="col-md-3">
					<div class="row learn-row">
						<div class="col-md-2">
							<div class="question-mark text-center"><img src="wp-content/themes/upBootstrap3WP-master/img/img_que_01.png" alt="question mark">
							</div>
						</div>
						<div class="col-md-10 justify">
							<div class=""><p>How do the technologies increase reserves?</p>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="learn-more"><a class="btn btn-primary btn-large" href="#">Learn more</a></div>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="row learn-row">
						<div class="col-md-2">
							<div class="question-mark text-center"><img src="wp-content/themes/upBootstrap3WP-master/img/img_que_01.png" alt="question mark">
							</div>
						</div>
						<div class="col-md-10 justify">
							<div class=""><p>How are the technologies implemented?</p>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="learn-more"><a class="btn btn-primary btn-large" href="#">Learn more</a></div>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="row learn-row">
						<div class="col-md-2">
							<div class="question-mark text-center"><img src="wp-content/themes/upBootstrap3WP-master/img/img_que_01.png" alt="question mark">
							</div>
						</div>
						<div class="col-md-10 justify">
							<div class=""><p>What is your safety record like?</p>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="learn-more"><a class="btn btn-primary btn-large" href="#">Learn more</a></div>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="row learn-row">
						<div class="col-md-2">
							<div class="question-mark text-center"><img src="wp-content/themes/upBootstrap3WP-master/img/img_que_01.png" alt="question mark">
							</div>
						</div>
						<div class="col-md-10 justify">
							<div class=""><p>How can I measure ROI?</p>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="learn-more"><a class="btn btn-primary btn-large" href="#">Learn more</a></div>
						</div>
					</div>
				</div>
		</div><!-- End Information -->

		<div class="row nextstep"> <!-- Begin Next Step -->
			<div class="col-md-4 proud">
				<p>Proud to be your local representative of the EOR Alliance brain trust.</p>
			</div>

			<div class="col-md-2">
				<div class="eor">
					<img src="wp-content/themes/upBootstrap3WP-master/img/img_eor_2.png" alt="eor alliance">
				</div>
			</div>

			<div class="col-md-6 text-center">
				<div class="row" id="take-the">
					<p>Take the next step:</p>
				</div>
				<div class="row">
					<div class="book-meeting"><a class="btn btn-success btn-large" href="#">Book a meeting</a></div>
				</div>
			</div>

		</div>


		<div class="row">
			<div class="col-md-12">
				<div class="entry-content">
					<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
					<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
							'after'  => '</div>',
						));
					?>
				</div><!-- .entry-content -->
	
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>