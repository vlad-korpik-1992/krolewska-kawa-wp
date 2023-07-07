<?php
/**
 * Krolewska kawa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Krolewska_kawa
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function krolewska_kawa_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Krolewska kawa, use a find and replace
		* to change 'krolewska-kawa' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'krolewska-kawa', get_template_directory() . '/languages' );

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
	/*register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'krolewska-kawa' ),
		)
	);*/

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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'krolewska_kawa_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
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
}
add_action( 'after_setup_theme', 'krolewska_kawa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function krolewska_kawa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'krolewska_kawa_content_width', 640 );
}
add_action( 'after_setup_theme', 'krolewska_kawa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function krolewska_kawa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'krolewska-kawa' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'krolewska-kawa' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'krolewska_kawa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

add_action( 'wp_enqueue_scripts', 'krolewska_kawa_scripts' );
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

add_theme_support( 'post-thumbnails', array( 'post' ) );

function krolewska_kawa_scripts() {
	wp_enqueue_style( 'krolewska-kawa-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	wp_deregister_script( 'jquery' );

	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.0.min.js', array(), null, true );

	wp_enqueue_script( 'jquery' );

	if ( is_page_template('page-story.php') || is_page_template('page-home.php')) {
		wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/css/slick.css', array());
		wp_register_script( 'slick-script', get_template_directory_uri() . '/assets/js/slick.min.js', array(), null, true );

    	wp_enqueue_script( 'slick-script' );

		wp_register_script( 'main-slick-script', get_template_directory_uri() . '/assets/js/main-slick.js', array(), null, true );

    	wp_enqueue_script( 'main-slick-script' );
	}

	else{
		wp_register_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );

    	wp_enqueue_script( 'main-script' );
	}

	if ( is_page_template('page-home.php')) {
		wp_register_script( 'skrollr-script', get_template_directory_uri() . '/assets/js/skrollr.js', array(), null, true );

    	wp_enqueue_script( 'skrollr-script' );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

function redirect_login_page() {  
    $login_page  = home_url( '/wejscie-dla-klienta/' );  
    $page_viewed = basename($_SERVER['REQUEST_URI']);  
  
    if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {  
        wp_redirect($login_page);  
        exit;  
    }  
}  

add_action('init','redirect_login_page');

function login_failed() {  
    $login_page  = home_url( '/wejscie-dla-klienta/' );  
    wp_redirect( $login_page . '?login=failed' );  
    exit;  
}  
add_action( 'wp_login_failed', 'login_failed' );  
  
function verify_username_password( $user, $username, $password ) {  
    $login_page  = home_url( '/wejscie-dla-klienta/' );  
    if( $username == "" || $password == "" ) {  
        wp_redirect( $login_page . "?login=empty" );  
        exit;  
    }  
}  
add_filter( 'authenticate', 'verify_username_password', 1, 3);

add_filter( 'login_errors', function($errors){
	global $errors;
	$error_codes = $errors->get_error_codes();
	if( in_array('incorrect_password', $error_codes) || (in_array('invalid_username', $error_codes)) ){
		$error = '<strong>Ошибка:</strong> Неправильное имя пользователя или пароль';
	}
	return $error;
});

add_action( 'init', 'block_users' );

function block_users() {
     if ( 
           is_admin() && 
           ! current_user_can( 'administrator' ) &&
           ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) 
     ) {
           wp_redirect( home_url() );
           exit;
     }
}

add_action( 'wp', 'registration' );
function registration() {
    $nonce = filter_input( INPUT_POST, 'registration_nonce', FILTER_SANITIZE_STRING );
    if ( ! wp_verify_nonce( $nonce, 'registration' ) ) {
        return;
    }
    $username = filter_input( INPUT_POST, 'username', FILTER_SANITIZE_STRING );
    $password = filter_input( INPUT_POST, 'password', FILTER_SANITIZE_STRING );
    $email    = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );
    // Validate fields...
    $user = wp_create_user( $username, $password, $email );
    if ( ! is_wp_error( $user ) ) {
        wp_set_auth_cookie( $user, true ); // Авторизируем пользователя
        $uri = get_page_link(161);
        wp_safe_redirect( $uri, 302 ); // Редирект после входа на страницу
    }
}

add_action( 'wp', 'updateuser' );
function updateuser() {
    $nonce = filter_input( INPUT_POST, 'updateuser_nonce', FILTER_SANITIZE_STRING );
    if ( ! wp_verify_nonce( $nonce, 'updateuser' ) ) {
        return;
    }
	$surname = filter_input( INPUT_POST, 'surname', FILTER_SANITIZE_STRING );
    $username = filter_input( INPUT_POST, 'username', FILTER_SANITIZE_STRING );
	$phone    = filter_input( INPUT_POST, 'phone', FILTER_SANITIZE_STRING );
	$user_id =  filter_input( INPUT_POST, 'userid', FILTER_SANITIZE_STRING );
    $email    = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );
	$address    = filter_input( INPUT_POST, 'address', FILTER_SANITIZE_STRING );
    // Validate fields...
	wp_update_user( array( 'ID' => $user_id, 'first_name' => $username, 'last_name' => $surname ) );
	update_user_meta($user_id, 'phone_user', $phone);
	update_user_meta($user_id, 'address_user', $address);
	$uri = get_page_link(161);
    wp_safe_redirect( $uri, 302 );
}

add_filter( 'show_admin_bar', function( $show) {
    if (current_user_can( 'subscriber') ) {
        return false;
    }
    return $show;
} );

add_action( 'wp_enqueue_scripts', 'krolewska_kawa_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

