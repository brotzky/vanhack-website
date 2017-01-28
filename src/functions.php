<?php // ==== FUNCTIONS ==== //

// Load the configuration file for this installation; all options are set here
if ( is_readable( trailingslashit( get_stylesheet_directory() ) . 'functions-config.php' ) )
  require_once( trailingslashit( get_stylesheet_directory() ) . 'functions-config.php' );

// Load configuration defaults for this theme; anything not set in the custom configuration (above) will be set here
require_once( trailingslashit( get_stylesheet_directory() ) . 'functions-config-defaults.php' );

// An example of how to manage loading front-end assets (scripts, styles, and fonts)
require_once( trailingslashit( get_stylesheet_directory() ) . 'inc/assets.php' );

// Required to demonstrate WP AJAX Page Loader (as WordPress doesn't ship with even simple post navigation functions)
require_once( trailingslashit( get_stylesheet_directory() ) . 'inc/navigation.php' );

// Only the bare minimum to get the theme up and running
function vanhack_setup() {

  // HTML5 support; mainly here to get rid of some nasty default styling that WordPress used to inject
  add_theme_support( 'html5', array( 'search-form', 'gallery' ) );

  // Automatic feed links
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

  // $content_width limits the size of the largest image size available via the media uploader
  // It should be set once and left alone apart from that; don't do anything fancy with it; it is part of WordPress core
  global $content_width;
  $content_width = 960;

  // Register header and footer menus
  register_nav_menu( 'header', __( 'Header menu', 'vanhack' ) );
  register_nav_menu( 'footer', __( 'Footer menu', 'vanhack' ) );

}
add_action( 'after_setup_theme', 'vanhack_setup', 11 );

// Sidebar declaration
function vanhack_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Main sidebar', 'vanhack' ),
    'id'            => 'sidebar-main',
    'description'   => __( 'Appears to the right side of most posts and pages.', 'vanhack' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ) );
}
add_action( 'widgets_init', 'vanhack_widgets_init' );

/**
 * vanchack functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package vanchack
 */

 /**
  * Importing MetaBox Settings
  * @link https://wordpress.org/plugins/meta-box/
  */
 // require_once(TEMPLATEPATH.'/lib/meta-box.php');

 // Contains all the AJAX calls to the DB
 // require_once(TEMPLATEPATH.'/lib/ajax.php');
 // Contains all the Custom Post Types
 // require_once(TEMPLATEPATH.'/custom-functions/custom-post-types.php');
 // Contains all the overrides of default WP behaviour
 require_once(TEMPLATEPATH.'/custom-functions/custom-overrides.php');
 // Contains all the Custom Widgets
 // require_once(TEMPLATEPATH.'/custom-functions/custom-widgets.php');
 // Contains all the various functions that do not belong in the ones above
 // require_once(TEMPLATEPATH.'/custom-functions/custom-functions.php');



if ( ! function_exists( 'vanhack_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vanhack_setup() {
  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on vanchack, use a find and replace
   * to change 'vanchack' to the name of your theme in all the template files
   */
  load_theme_textdomain( 'vanchack', get_template_directory() . '/languages' );

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
  register_nav_menus( array(
      'primary' => esc_html__( 'Primary Menu', 'vanchack' ),
      'mobile' => esc_html__( 'Mobile Menu', 'vanchack'),
      'footer_copyright' => esc_html__( 'Footer Copyright', 'vanchack')
  ));

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
  add_theme_support( 'custom-background', apply_filters( 'vanhack_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );
}
endif; // vanhack_setup
add_action( 'after_setup_theme', 'vanhack_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vanchack_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'vanchack' ),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'vanchack_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vanchack_scripts() {

  include(TEMPLATEPATH . '/custom-functions/custom-styles.php');

  include(TEMPLATEPATH . '/custom-functions/custom-scripts.php');

}
add_action( 'wp_enqueue_scripts', 'vanchack_scripts' );

/**
 * Add event categories column to events index page in admin
 */
add_action( 'manage_posts_custom_column', 'price_column_display', 10, 2);
// Allow editing of authors in custom post type
function allowAuthorEditing() {
  add_post_type_support( 'vanchack', 'author' );
}
add_action('init','allowAuthorEditing');

/**
 * END of WP default functions code
 */
