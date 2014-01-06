<?php
/**
 * Template Name: Page - ContentMod
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
				<img class="img-responsive" src="http://localhost:8888/ifp2/wp-content/themes/upBootstrap3WP-master/img/img_exp_hero.jpg" alt="Our Expertise">
			</div>
		</div> <!-- End Hero -->



		<div class="row">
			<div class="col-md-8">
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
						<div class="col-md-4 call offset1">
							<div class="row" id="take-the2">
								<p>Take the next step:</p>
							</div>
							<div class="row">
								<div class="book-meeting2"><a class="btn btn-success btn-large btn-big" href="#">Book a meeting</a></div>
							</div>
						</div>
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>