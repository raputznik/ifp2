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
		<div class="row">
			<div class="col-md-12">
				<img src="wp-content/themes/upBootstrap3WP-master/img/img_ban_01.jpg" alt="Our Expertise">
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 pagination-centered">
				<div class="information">
					<p>What information are you looking for?</p>
				</div>
			</div>
		</div>

		<div class="row row2">

				<div class="col-md-3">
					<div class="row learn-row">
						<div class="col-md-2">
							<div class="question-mark text-center"><img src="wp-content/themes/upBootstrap3WP-master/img/img_que_01.png" alt="question mark">
							</div>
						</div>
						<div class="col-md-10">
							<div class="text-center"><p>How do the technologies increase reserves?</p>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="learn-more"><a class="btn btn-primary btn-large" href="#">Learn more »</a></div>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="row learn-row">
						<div><p>How are the technologies implemented?</p>
						</div>
					</div>
					<div class="row">
						<div class="learn-more"><a class="btn btn-primary btn-large" href="#">Learn more »</a></div>
					</div>
				</div>

				<div class="col-md-3 .col-centered">
					<div class="row learn-row">
						<div><p>What is your safety record like?</p>
						</div>
					</div>
					<div class="row">
						<div class="learn-more"><a class="btn btn-primary btn-large" href="#">Learn more »</a></div>
					</div>
				</div>

				<div class="col-md-3 ">
					<div class="row learn-row">
						<div><p>How can I measure ROI?</p>
						</div>
					</div>
					<div class="row">
						<div class="learn-more"><a class="btn btn-primary btn-large" href="#">Learn more »</a></div>
					</div>
				</div>

		</div>

		<div class="row">
			<div class="col-md-6">

			</div>

			<div class="col-md-6">

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