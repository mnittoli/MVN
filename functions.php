<?php
/**
 * MVN functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MVN
 */

if ( ! function_exists( 'mvn_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mvn_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on MVN, use a find and replace
	 * to change 'mvn' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mvn', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'mvn' ),
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
	add_theme_support( 'custom-background', apply_filters( 'mvn_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'mvn_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mvn_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mvn_content_width', 640 );
}
add_action( 'after_setup_theme', 'mvn_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mvn_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mvn' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mvn' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mvn_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mvn_scripts() {
	wp_enqueue_style( 'mvn-style', get_stylesheet_uri() );

	wp_enqueue_script( 'mvn-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mvn-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mvn_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Bootstrap 4 CDN Links
 */
function reg_script() {
	wp_enqueue_script( 'jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js' );
	wp_enqueue_script( 'tether' , 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.js' );
	wp_enqueue_style( 'bootstrapstyle' , 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.css' );
	wp_enqueue_style('fontawesomestyle' , 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' );
	wp_enqueue_script( 'bootstrapscript' , 'https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js' );
}

add_action('wp_enqueue_scripts','reg_script');



//Custom Theme Settings
add_action('admin_menu', 'add_gcf_interface');

function add_gcf_interface() {
    add_options_page('Global Custom Fields', 'Global Custom Fields', '8', 'functions', 'editglobalcustomfields');
}

function editglobalcustomfields() {
    ?>
    <div class='wrap'>
    <h1>Web Designer / Front-End Developer</h1>
    <form method="post" action="options.php">
    <?php wp_nonce_field('update-options') ?>

    <p><strong>The call of action text</strong><br />
    <input type="text" name="maintext" size="45" value="<?php echo get_option('maintext'); ?>" /></p>

    <p><strong>The call of action text</strong><br />
    <input type="text" name="maindescription" size="45" value="<?php echo get_option('maindescription'); ?>" /></p>

    <p><strong>Button Text 1</strong><br />
    <input type="button" name="button1" size="45" value="<?php echo get_option('button1'); ?>" /></p>

 	<p><strong>Button Text 2</strong><br />
    <input type="button" name="button2" size="45" value="<?php echo get_option('button2'); ?>" /></p>

    <p><input type="submit" name="Submit" value="Update Options" /></p>

    <input type="hidden" name="action" value="update" />
    <input type="hidden" name="page_options" value="maintext,maindescription,button1,button2" />

    </form>
    </div>
    <?php
}

?>