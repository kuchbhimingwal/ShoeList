<?php
/**
 * ShoeList-Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ShoeList-Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'shoelist_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shoelist_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ShoeList-Theme, use a find and replace
		 * to change 'shoelist' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shoelist', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-primary' => esc_html__( 'Primary', 'shoelist' ),
			)
		);


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);


		/**
		 * Add theme support for default block style
		 */
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );
	}
endif;
add_action( 'after_setup_theme', 'shoelist_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shoelist_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shoelist_content_width', 640 );
}
add_action( 'after_setup_theme', 'shoelist_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shoelist_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'shoelist' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'shoelist' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'shoelist_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shoelist_scripts() {
	wp_enqueue_style( 'shoelist-style', get_stylesheet_uri(), array(), _S_VERSION );

	// Foundation
	wp_enqueue_style( 'foundation-style', get_template_directory_uri() . '/assets/css/vendor/foundation.css');
	wp_enqueue_script( 'foundation-script', get_template_directory_uri() . '/assets/js/vendor/foundation.js', array(), false, true );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/wooStyle.css');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shoelist_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * woocommerce.php additions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * post-type.php additions.
 */
require get_template_directory() . '/inc/post-types.php';

/**
 * Enqueueing block editor assets
 */

function shoelist_enqueue_block_editor_assets(){
	wp_enqueue_script(
		'editor-script',
		get_template_directory_uri() . '/assets/js/editor.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' )
	);
}
add_action( 'enqueue_block_editor_assets', 'shoelist_enqueue_block_editor_assets' );

/**
 * Enququeing block assets
 */
function shoelist_enqueue_block_assets() {
    wp_enqueue_style( 
		'blocks-style', 
		get_template_directory_uri() . '/assets/css/block.css'
	);
}
add_action( 'enqueue_block_assets', 'shoelist_enqueue_block_assets' );

