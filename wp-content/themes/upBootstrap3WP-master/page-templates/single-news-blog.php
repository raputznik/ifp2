<?php
/**
* Template Name: NewsBlog
 * The Template for displaying all single posts.
 *
 * @author Pace Creative | http://pacecreative.com
 * @package upBootWP 0.1
 */
get_header(); ?>
	<div class="container">
		<div class="row mainpost">
			<div class="col-md-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main newsblog" role="main">
			
			<?php 
				
					$args = array(
						'post_type' => 'post',
						'orderby' => 'date', 'posts_per_page' => '2'
					);
					$query = new WP_Query( $args );
				
					while($query->have_posts()): $query->the_post();
						echo "<ul>";
						echo "<li>";
						echo the_title();
						echo "</li>";
						echo "</ul>";
						echo the_excerpt();
						
					

					
					endwhile;
				
				 ?>

			
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .col-md-8 -->
			
			<div class="col-md-4">
				<?php get_sidebar(); ?>
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
						<!-- inc/template-tags.php -->
						<?php upbootwp_subscribe() ?>
					</div>	

					</div>


			</div><!-- .col-md-4 -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>