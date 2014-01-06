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
	<div id="wrap">
		
	<div id="main" class="container">
		<div class="row"> <!-- Begin Hero  -->
			<div class="col-md-12">
				<img class="img-responsive" src="http://localhost:8888/ifp2/wp-content/themes/upBootstrap3WP-master/img/img_ban_02.jpg" alt="Our Expertise">
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 pagination-centered">
				<div class="information">
					<p>What information are you looking for?</p>
					<div class="line1"></div>
				</div>

<!-- 				<div class="divider">
				</div> -->
			</div>
		</div> <!-- End Hero -->
				
		<div class="row row2"> <!-- Begin Information -->
				<div class="col-md-3">
					<div class="row learn-row">
						<div class="col-md-2">
							<div class="question-mark text-center"><img src="http://localhost:8888/ifp2/wp-content/themes/upBootstrap3WP-master/img/img_que_01.png" alt="question mark">
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
							<div class="question-mark text-center"><img src="http://localhost:8888/ifp2/wp-content/themes/upBootstrap3WP-master/img/img_que_01.png" alt="question mark">
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
							<div class="question-mark text-center"><img src="http://localhost:8888/ifp2/wp-content/themes/upBootstrap3WP-master/img/img_que_01.png" alt="question mark">
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
							<div class="question-mark text-center"><img src="http://localhost:8888/ifp2/wp-content/themes/upBootstrap3WP-master/img/img_que_01.png" alt="question mark">
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
			<div class="col-md-2 alliance">
				<div class="eor">
					<img src="http://localhost:8888/ifp2/wp-content/themes/upBootstrap3WP-master/img/img_eor_2.png" alt="eor alliance">
				</div>
				<div class="line2"></div>
			</div>

			<div class="col-md-6 text-center">
				<div class="row" id="take-the">
					<p>Take the next step:</p>
				</div>
				<div class="row">
					<div class="book-meeting"><a class="btn btn-success btn-large btn-big" href="#">Book a meeting</a></div>
				</div>
			</div>

		</div> <!-- End Next Step -->

		<div class="row row3"> <!-- Begin Success/News (Large Holder Row) -->
			<div class="col-md-8 success-main">
				<div class="row success-1">
					<h3>Success Stories</h3>
				</div>
				<div class="row success-holder">
					<div class="col-md-2 ">	
							<div class="greybox">
							</div>
					</div>
					<div class="col-md-4 succ-content1">
						<p><i>Pellentesque sollicitudin volutpat risus in venenatis. Praesent et vulputate nisi. Nullam in euismod purus. Praesent egestas nulla...</i></p>
						<p><strong>Wettability Alteration</strong></p>
						<a href="#" title="">View More</a>
					</div>
					<div class="col-md-2 ">
							<div class="greybox">
								</div>
					</div>
					<div class="col-md-4 succ-content1">
						<p><i>Pellentesque sollicitudin volutpat risus in venenatis. Praesent et vulputate nisi. Nullam in euismod purus. Praesent egestas nulla...</i></p>
						<p><strong>Wettability Alteration</strong></p>
						<a href="#" title="">View More</a>
					</div>
				</div>				
				<div class="row newsholder">
					<div class="col-md-6 newsbox">
						<div class="keep-1">
							<h3>Keep in Touch</h3>
						</div>
						<div class="blurb">
							<p>Sign up for our monthly newsletter for industry insights and updates from our team.</p>
							<div class="form-group">
	    						<input type="text" class="form-control" placeholder="">
	  						</div>
							<div class=""><a class="btn btn-primary btn-large" href="#">Subscribe Now</a></div>
						</div>
					</div>	
					<div class="col-md-6 newsbox2">
						<div class="row keep-1 upcoming-1">
							<h3>Upcoming Events</h3>
						</div>
						<div class="row blurb2">
							<p><i>January 01, 2014</i><br>
							Event Name Here Lorem Ipsum <br>
							<a href="#" title="">View More</a></p>
						</div>
						<div class="row blurb2">
							<p><i>January 01, 2014</i><br>
							Event Name Here Lorem Ipsum <br>
							<a href="#" title="">View More</a></p>
						</div>


					</div>
				</div>				
			</div>
					<div class="col-md-4 news-1">
						<div class="row news-side">
							<h3>Latest News</h3>
						</div>
						<div class="row news-links"><p><p><i>January 01, 2014</i></p></p>
							<p>News Article Title Here Lorem Ipsum</p>
							<div class="news-textside">
								<p>Pellentesque sollicitudin volutpat risus in venenatis. Praesent et vulputate nisi. Nullam in euismod purus. Praesent egestas nulla...</p>
							</div>				
							<a href="#" title="">View More</a>
						
						<p><p><i>January 01, 2014</i></p></p>
							<p>News Article Title Here Lorem Ipsum</p>
							<div class="news-textside">
							<p>Pellentesque sollicitudin volutpat risus in venenatis. Praesent et vulputate nisi. Nullam in euismod purus. Praesent egestas nulla...</p>
							</div>
							<a href="#" title="">View More</a>
						<p><p><i>January 01, 2014</i></p></p>
							<p>News Article Title Here Lorem Ipsum</p>
							<div class="news-textside">
							<p>Pellentesque sollicitudin volutpat risus in venenatis. Praesent et vulputate nisi. Nullam in euismod purus. Praesent egestas nulla...</p>
							</div>
							<a href="#" title="">View More</a>
						</div>
					</div>
		</div> <!-- END Success/News (Large Holder Row) -->
	<!-- 	<div class="col-md-12">
			
		</div> -->

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