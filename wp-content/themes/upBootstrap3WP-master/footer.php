<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
?>

	</div><!-- #content -->
	</div> <!-- #wrap -->
	<footer id="footer" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-12 contact-info">
				<p><strong>Contact Us</strong>  P: (403) 234-0342  |  F: (403) 234-8579  |  E: info@ifp-canada.com  |  Suite 810, 744 – 4th Avenue S.W., Calgary, AB, T2P 3T4</p>
			</div>
		</div>

	<!-- My hand-coded footer menu -->
		<div class="row">
			<div class="col-md-12">
				<div class="footer_menu">
				     <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>  
				</div>
			</div>
		</div>
	<!-- My hand-coded footer menu -->

		<div class="row">
			<div class="col-md-12">
					<div class="site-info">
						<?php do_action( 'upbootwp_credits' ); ?>
						&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?>
						<span class="sep"> | </span>
<!-- 						<?php printf(__('Theme: %1$s by %2$s.', 'upbootwp' ), 'upBootWP', '<a href="http://upplex.de" rel="designer">upplex</a>'); ?>
 -->					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>