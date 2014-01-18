<?php
/**
 * Template Name: Page - News
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
				<h1 class="entry-title"><?php the_title(); ?></h1>		
			</div>
			<div class="col-md-2" id="arrow1">
				<img src="http://palebluedot.ca/test/ifp/wp-content/uploads/2014/01/img_arr_title.jpg" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="entry-content maincontent blog1">
					<div class="col-md-5" id="docbox">
						<div class="row news_blog">
							<h3>News & Blog</h3>
						</div>
						<div class="row news-links2">
								<p><p><i>January 01, 2014</i></p></p>
								<p>News Article Title Here Lorem Ipsum</p>
							<div class="news-textside">
							</div>				
							<a href="#" title="">View More</a>
								<p><p><i>January 01, 2014</i></p></p>
							<p>News Article Title Here Lorem Ipsum</p>
							<div class="news-textside">
							</div>				
							<a href="#" title="">View More</a>
							<div id="clickhere"><a href="#" title=""><h4>Click here for more articles</h4></a></div>

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
						<div class="row news_blog">
							<h3>Documents & Resources</h3>
						</div>
						<div class="row news-links2">
								<br>

							<a href="#" title=""><p>Document Title Here Lorem Ipsum</p></a><a href="#" title=""><p>Document Title Here Lorem Ipsum</p></a><a href="#" title=""><p>Document Title Here Lorem Ipsum</p></a><a href="#" title=""><p>Document Title Here Lorem Ipsum</p></a>
							<div id="clickhere"><a href="#" title=""><h4>Click here for more documents</h4></a></div>

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
							<div class="book-meeting2"><a class="btn btn-success btn-large btn-big" href="#">Book a meeting</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<!-- spacer -->
						</div>
					<!-- inc/template-tags.php -->
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