<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package resilience
 */

//initilize all script and style files and cdn
function wplearning_theme_script()
{
	wp_enqueue_style('style', get_stylesheet_directory_uri());
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('main-css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/bootstrap/css/style.css');
	wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false);
	wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null, false); //false for head true for footer
	wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, false);
	wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/bootstrap/js/custom.js', array(), time(), true);
	wp_enqueue_script('about-script', get_template_directory_uri() . '/assets/bootstrap/js/about.js', array(), time(), true);
	wp_enqueue_style('tajawal-font', 'https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap');

	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.js');

}
add_action('wp_enqueue_scripts', 'wplearning_theme_script');



// settingup theme supports

function resilience_setup()
{
   //enable title for post
	add_theme_support('title-tag');

// enable featured image for post
	add_theme_support('post-thumbnails');

	// Register Nav Menu
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Header Menu', 'resilience'),
			'footer-1' => esc_html__('Footer Menu1', 'resilience'),
			'footer-2' => esc_html__('Footer Menu2', 'resilience'),
			'footer-3' => esc_html__('Footer Menu3', 'resilience'),
		)
	);


	// Set up the WordPress background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'resilience_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

  //enable logo upload from theme dashboard
	add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'resilience_setup');

/**

 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function resilience_content_width()
{
	$GLOBALS['content_width'] = apply_filters('resilience_content_width', 640);
}
add_action('after_setup_theme', 'resilience_content_width', 0);


// include files that is courses and event cpt in inc folder
require get_template_directory() . '/inc/Courses.php';
require get_template_directory() . '/inc/Events.php';


//sidebar widgets initilization
function home_sidebar()
{
	register_sidebar(array(
		'name' => 'Home Sidebar',
		'id' => 'home_sidebar',
		'description' => 'This is the main sidebar for the site.',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'home_sidebar');

function login_sidebar()
{
	register_sidebar(array(
		'name' => 'Login Sidebar',
		'id' => 'logins_sidebar',
		'description' => 'This is the main sidebar for the site.',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'login_sidebar');

function sigun_up()
{
	register_sidebar(array(
		'name' => 'Signup Sidebar',
		'id' => 'signup_sidebar',
		'description' => 'This is the sign sidebar for the site.',
		'before_widget' => '<div class="widget1">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title1">',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'sigun_up');