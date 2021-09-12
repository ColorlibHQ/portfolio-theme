<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'PORTFOLIO_DIR_URI' ) ) {
	define( 'PORTFOLIO_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'PORTFOLIO_DIR_ASSETS_URI' ) ) {
	define( 'PORTFOLIO_DIR_ASSETS_URI', PORTFOLIO_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'PORTFOLIO_DIR_CSS_URI' ) ) {
	define( 'PORTFOLIO_DIR_CSS_URI', PORTFOLIO_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'PORTFOLIO_DIR_JS_URI' ) ) {
	define( 'PORTFOLIO_DIR_JS_URI', PORTFOLIO_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'PORTFOLIO_DIR_IMGS_URI' ) ) {
	define( 'PORTFOLIO_DIR_IMGS_URI', PORTFOLIO_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'PORTFOLIO_DIR_ICON_IMG_URI' ) ) {
	define( 'PORTFOLIO_DIR_ICON_IMG_URI', PORTFOLIO_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'PORTFOLIO_DIR_PATH' ) ) {
	define( 'PORTFOLIO_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'PORTFOLIO_DIR_PATH_INC' ) ) {
	define( 'PORTFOLIO_DIR_PATH_INC', PORTFOLIO_DIR_PATH . 'inc/' );
}

//Portfolio Libraries Folder Directory
if ( ! defined( 'PORTFOLIO_DIR_PATH_LIBS' ) ) {
	define( 'PORTFOLIO_DIR_PATH_LIBS', PORTFOLIO_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'PORTFOLIO_DIR_PATH_CLASSES' ) ) {
	define( 'PORTFOLIO_DIR_PATH_CLASSES', PORTFOLIO_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'PORTFOLIO_DIR_PATH_HOOKS' ) ) {
	define( 'PORTFOLIO_DIR_PATH_HOOKS', PORTFOLIO_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function portfolio_admin_script(){
    wp_enqueue_style( 'portfolio-admin', get_template_directory_uri().'/assets/css/portfolio-admin.css', false, '1.0.0' );
    // wp_enqueue_script( 'portfolio_admin', get_template_directory_uri().'/assets/js/portfolio-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'portfolio_admin_script' );



/**
 * Include File
 *
 */
require_once( PORTFOLIO_DIR_PATH_INC . 'portfolio-breadcrumbs.php' );
require_once( PORTFOLIO_DIR_PATH_INC . 'portfolio-widgets-reg.php' );
require_once( PORTFOLIO_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( PORTFOLIO_DIR_PATH_INC . 'post-like.php' );
require_once( PORTFOLIO_DIR_PATH_INC . 'portfolio-functions.php' );
require_once( PORTFOLIO_DIR_PATH_INC . 'portfolio-commoncss.php' );
require_once( PORTFOLIO_DIR_PATH_INC . 'support-functions.php' );
require_once( PORTFOLIO_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( PORTFOLIO_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( PORTFOLIO_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( PORTFOLIO_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( PORTFOLIO_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( PORTFOLIO_DIR_PATH_HOOKS . 'hooks.php' );
require_once( PORTFOLIO_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( PORTFOLIO_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( PORTFOLIO_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Portfolio object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Portfolio = new Portfolio();