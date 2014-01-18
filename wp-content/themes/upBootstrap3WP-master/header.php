<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- <script src="js/css3-mediaqueries.js"></script> -->
   <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<div class="row topbar">
		<div class="container">
			<div class="col-md-6">
				<div class="eor-title"><p>Proud partner of the EOR Alliance</p></div>
			</div>
			<div class="col-md-6 topmenu">
				<ul id="eor-nav">
					<li><a href="#">Challenges</a><span class="menu_slash">|</span></li>
					<li><a href="#">Solutions  </a><span class="menu_slash">|</li>
					<li><a href="#">Services  </a> <span class="menu_slash">|</li>
					<li><a href="#">Knowledge Library</a></li>
				</ul>
			</div>
		</div>
	</div>
	<header id="masthead" class="site-header container" role="banner">
		<nav id="navitron" class="navbar navbar-default navbar-static-top" role="navigation">
		
			<div class="container">
				<div class="row">
					<div class="col-md-12">
				        <div class="navbar-header">
				            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
							</button>
				            
				            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"  class="navbar-brand"><img src="http://palebluedot.ca/test/ifp/wp-content/themes/upBootstrap3WP-master/img/logo.png" alt="logo"></a>
				            
				        </div>
						
						<?php 
						$args = array('theme_location' => 'primary', 
									  'container_class' => 'navbar-collapse collapse', 
									  'menu_class' => 'nav navbar-nav pull-right',
									  'fallback_cb' => '',
			                          'menu_id' => 'main-menu',
			                          'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
			                          'walker' => new Upbootwp_Walker_Nav_Menu()); 
						wp_nav_menu($args);
						?>
					</div><!-- .col-md-12 -->
				</div><!-- row -->
			</div><!-- container -->
		</nav>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
