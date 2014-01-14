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
	</div> <!-- # End wrap -->
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
			<div class="col-md-12" id="footer_section">
					<div class="site-info">
						<p>Copyright 2014. All rights Reserved. IFP Canada <br>
						Design by Pace Creative</p>
 					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>