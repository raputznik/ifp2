<?php
/**
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */

if (!isset($content_width)) $content_width = 770;

/**
 * upbootwp_setup function.
 * 
 * @access public
 * @return void
 */
function upbootwp_setup() {

	require 'inc/general/class-Upbootwp_Walker_Nav_Menu.php';

	load_theme_textdomain('upbootwp', get_template_directory().'/languages');

	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'Bootstrap WP Primary' ),
		'footer' => __( 'Footer Menu', 'Bootstrap WP Footer' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'upbootwp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	)));
	
	
}

add_action( 'after_setup_theme', 'upbootwp_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function upbootwp_widgets_init() {
	register_sidebar(array(
		'name'          => __('Sidebar','upbootwp'),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
}
add_action( 'widgets_init', 'upbootwp_widgets_init' );

function upbootwp_scripts() {
	//wp_enqueue_style( 'upbootwp-css', get_template_directory_uri().'/css/upbootwp.css', array(), '20130908');
	wp_enqueue_style( 'upbootwp-jQueryUIcss', get_template_directory_uri().'/js/jquery-ui-1.10.3.custom/css/custom-theme/jquery-ui-1.10.3.custom.min.css', array(), '20130908');
	wp_enqueue_script( 'upbootwp-jQuery', get_template_directory_uri().'/js/jquery.js',array(),'2.0.3',true);
	
	wp_enqueue_script( 'upbootwp-custom', get_template_directory_uri().'/js/jqscript.js',array(),'2.0.3',true);
	wp_localize_script( 'upbootwp-custom', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' )) );
	
	wp_enqueue_script( 'upbootwp-basefile', get_template_directory_uri().'/js/bootstrap.min.js',array(),'20130905',true);
	wp_enqueue_script( 'upbootwp-jQueryUI', get_template_directory_uri().'/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js',array(),'20130905',true);
}
add_action( 'wp_enqueue_scripts', 'upbootwp_scripts' );

// add ajax handler for signup
function my_frontend_action_callback() {
	
	$email = filter_var(trim( $_POST['email'] ), FILTER_VALIDATE_EMAIL);
	
	if( false !== $email ) {
	
		$email_body = '<b>Email</b>: '.$email;
		$email_body = '<html><head></head><body>'.$email_body.'</body></html>';
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		$to = 'daniel@creativepace.com';
		//$to = 'info@ifp-canada.com';
		
		$subject = 'IFP Canada Newsletter Signup';
		
		$success = true; //mail($to, $subject, $email_body, $headers);
		
		echo $success ? 1 : 0;
	} else {
		echo 0;
	}
	
	die;
}
// trigger for both logged in and not
add_action( 'wp_ajax_nopriv_ajax_subscribe', 'my_frontend_action_callback' );
add_action( 'wp_ajax_ajax_subscribe', 'my_frontend_action_callback' );

/**
 * upbootwp_less function.
 * Load less for development or even on the running website. If you want to use less just enable this function
 * @access public
 * @return void
 */
function upbootwp_less() {
	printf('<link rel="stylesheet" type="text/less" href="%s" />', get_template_directory_uri().'/less/bootstrap.less?ver=0.1'); // raus machen :) 
	printf('<script type="text/javascript" src="%s"></script>', get_template_directory_uri().'/js/less.js');
}
// Enable this when you want to work with less
add_action('wp_head', 'upbootwp_less');



/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory().'/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory().'/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory().'/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory().'/inc/jetpack.php';

function register_main_menus() {
    register_nav_menus(
        array(
        	// 'top-bar' => __('Primary Menu'),
            'primary-menu' => __( 'Primary Menu' ),
            'footer' => __( 'Footer Navigation')
        )
    );
}

// register_nav_menu('top-bar', __('Primary Menu'));

/**
 * upbootwp_breadcrumbs function.
 * Edit the standart breadcrumbs to fit the bootstrap style without producing more css
 * @access public
 * @return void
 */
function upbootwp_breadcrumbs() {

	$delimiter = '&raquo;';
	$home = 'Home';
	$before = '<li class="active">';
	$after = '</li>';

	if (!is_home() && !is_front_page() || is_paged()) {

		echo '<ol class="breadcrumb">';

		global $post;
		$homeLink = get_bloginfo('url');
		echo '<li><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . '</li> ';

		if (is_category()) {
			global $wp_query;
			$cat_obj = $wp_query->get_queried_object();
			$thisCat = $cat_obj->term_id;
			$thisCat = get_category($thisCat);
			$parentCat = get_category($thisCat->parent);
			if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
			echo $before . single_cat_title('', false) . $after;

		} elseif (is_day()) {
			echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
			echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_time('d') . $after;

		} elseif (is_month()) {
			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_time('F') . $after;

		} elseif (is_year()) {
			echo $before . get_the_time('Y') . $after;

		} elseif (is_single() && !is_attachment()) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
				echo $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
				echo $before . get_the_title() . $after;
			}

		} elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;

		} elseif (is_attachment()) {
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
			echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;

		} elseif ( is_page() && !$post->post_parent ) {
			echo $before . get_the_title() . $after;

		} elseif ( is_page() && $post->post_parent ) {
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;

		} elseif ( is_search() ) {
			echo $before . 'Search results for "' . get_search_query() . '"' . $after;

		} elseif ( is_tag() ) {
			echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

		} elseif ( is_author() ) {
			global $author;
			$userdata = get_userdata($author);
			echo $before . 'Articles posted by ' . $userdata->display_name . $after;

		} elseif ( is_404() ) {
			echo $before . 'Error 404' . $after;
		}

		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo ': ' . __('Page') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}

		echo '</ol>';

	}
}