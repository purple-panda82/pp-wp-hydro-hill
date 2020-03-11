<?php
/* Hydro Hill Theme Function File */

if ( ! function_exists( 'hydro_hill_setup' ) ) :

	function hydro_hill_setup() {

		// Let WordPress handle the Title tags
		add_theme_support( 'title-tag' );

		// Add HTML5 tag support
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', 
			apply_filters( 'hydro_hill_custom_background_args', 
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
		) ) );


		add_theme_support( 'custom-header' );
		function hydrohill_custom_header_setup() {
			$defaults = array(
				// Display the header text along with the image
				'header-text'           => false,
				// Header text color default
				'default-text-color'        => '000',
				'flex-width'    => true,
				'flex-height'   => true,
				// Header image random rotation default
				'random-default'        => false,
				// Enable upload of image file in admin 
				'uploads'       => true,
				// function to be called in theme head section
				'wp-head-callback'      => 'wphead_cb',
				//  function to be called in preview page head section
				'admin-head-callback'       => 'adminhead_cb',
				// function to produce preview markup in the admin screen
				'admin-preview-callback'    => 'adminpreview_cb',
				);
		}
		add_action( 'after_setup_theme', 'hydrohill_custom_header_setup' );

add_action( 'after_setup_theme', 'custom_theme_features' );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add WordPress Theme support for custom logo
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;

// The add_action hook initialise and setups the WordPress website
add_action( 'after_setup_theme', 'hydro_hill_setup' );

// Register Menu in WordPress
function register_hydrohill_menus() {
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( 
		array(
			'Primary' => __( 'Primary' ),
			'Secondary' => __( 'Secondary' ),
			'Social' => __( 'Social' ),
	) );
}
add_action('init', 'register_hydrohill_menus');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hydro_hill_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hydro_hill_content_width', 640 );
}
add_action( 'after_setup_theme', 'hydro_hill_content_width', 0 );

/*Register widget areas.*/
function hydro_hill_widgets_init() {
	// Register the first widget area
	register_sidebar( array(
		'name'          => __( 'Header Social Media Widget', 'hydro-hill' ),
		'id'            => 'header-social-media-widget',
		'description'   => __( 'Widget added here will appear in the header section where the social media icons are.', 'hydro-hill' ),
		'before_widget' => '<div id="menu-socialmedia" class="nav widget social-media">',
		'after_widget'  => '</div>',
	) );
	// Register the first widget area
	register_sidebar( array(
		'name'          => __( 'Footer Top Widget', 'hydro-hill' ),
		'id'            => 'footer-top-widget',
		'description'   => __( 'Widget added here will appear full length at the top of footer section.', 'hydro-hill' ),
		'before_widget' => '<div id="%1$s" class="col-12 widget %2$s">',
		'after_widget'  => '</div>',
	) );
	// Register the second widget area
	register_sidebar( array(
		'name'          => __( 'Footer Bottom Left Widget', 'hydro-hill' ),
		'id'            => 'footer-bottom-widget-left',
		'description'   => __( 'Widget added here will appear at left-hand column at the bottom of footer section.', 'hydro-hill' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="text-yellowgreen footer-title">',
		'after_title'   => '</h3>',
	) );
	// Register the third widget area
	register_sidebar( array(
		'name'          => __( 'Footer Bottom Centre Widget', 'hydro-hill' ),
		'id'            => 'footer-bottom-widget-centre',
		'description'   => __( 'Widget added here will appear at centre column at the bottom of footer section.', 'hydro-hill' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="text-yellowgreen footer-title">',
		'after_title'   => '</h3>',
	) );
	// Register the fourth widget area
	register_sidebar( array(
		'name'          => __( 'Footer Bottom Right Widget', 'hydro-hill' ),
		'id'            => 'footer-bottom-widget-right',
		'description'   => __( 'Widget added here will appear at right-hand column at the bottom of footer section.', 'hydro-hill' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="text-yellowgreen footer-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'hydro_hill_widgets_init' );

// Add Stylesheets - Enqueue All Stylesheets and Scripts
function hydro_hill_scripts() {
	// Hydro Hill Main Stylesheet
	wp_enqueue_style( 'hydro-hill-style', get_stylesheet_uri() );
	// Hydro Hill Font Awesome Stylesheet
	wp_enqueue_style( 'hydro-hill-font-awesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
	// Hydro Hill Google Font - Lato Font Stylesheet
	wp_enqueue_style( 'hydro-hill-google-font', 'https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,900,900i');

	wp_enqueue_script( 'hydro-hill-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'hydro-hill-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hydro_hill_scripts' );

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

