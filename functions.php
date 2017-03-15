<?php
/**
 * dubline functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dubline
 */

if ( ! function_exists( 'dubline_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dubline_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Barry Livingston Music, use a find and replace
	 * to change 'barry_livingstone_music' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'dubline', get_template_directory() . '/languages' );
	
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'dubline' ),
		'projects' => esc_html__( 'Projects', 'dubline' ),
		'sound' => esc_html__( 'Sound', 'dubline' ),
		'contact' => esc_html__( 'Contact', 'dubline' ),
		'test' => esc_html__( 'Test', 'dubline' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'dubline_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'dubline_setup' );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dubline_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dubline' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dubline' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'dubline_widgets_init' );

function wps_parent_post(){
  global $post;
  if ($post->post_parent){
        $ancestors=get_post_ancestors($post->ID);
        //$root=count($ancestors)-1;
        //$parent = $ancestors[$root];
        $parent = $ancestors[0];
  } else {
        $parent = $post->ID;
  }
  if($post->ID != $parent){
      echo '<a href="'.get_permalink($parent).'" class="parent-post"><strong>BACK</strong></a>';

  }
}

add_filter( 'body_class', 'my_neat_body_class');
function my_neat_body_class( $classes ) {
     if ( is_page(7) || is_category(5) || is_tag('neat') )
          $classes[] = 'neat-stuff';
     return $classes;
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page('Fonts and Colors');
	
}





