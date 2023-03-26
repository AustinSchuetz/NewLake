<?php
/**
 * StarterTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package StarterTheme
 */

if ( ! function_exists( 'startertheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function startertheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on StarterTheme, use a find and replace
		 * to change 'startertheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'startertheme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'startertheme' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'startertheme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'startertheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function startertheme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'startertheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'startertheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function startertheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'startertheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'startertheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'startertheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function startertheme_scripts() {

    wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);

	wp_enqueue_script( 'startertheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'startertheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'startertheme_scripts' );

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

/* CUSTOM POST TYPES -------------------------------------------------------------------------------------*/

// Resources

// add_action('init', 'resources_post_type');

// function resources_post_type() {
//     $labels = [
//         'name' => _x('Resources', 'post type general name'),
//         'singular_name' => _x('Resources', 'post type singular name'),
//         'add_new' => _x('Add New', 'Resources'),
//         'add_new_item' => __('Add New Resources'),
//         'edit_item' => __('Edit Resources'),
//         'new_item' => __('New Resources'),
//         'view_item' => __('View Resources'),
//         'search_items' => __('Search Resources'),
//         'not_found' => __('No Resources found'),
//         'not_found_in_trash' => __('No Resources found in Trash'),
//         'parent_item_colon' => ''
//     ];

//     $args = [
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'query_var' => true,
//         'rewrite' => [
//             'slug' => 'resources',
//             'with_front' => false,
//             'hierarchical' => true
//         ],
//         'capability_type' => 'post',
//         'menu_icon' => 'dashicons-universal-access',
//         'hierarchical' => true,
//         'menu_position' => null,
//         'supports' => ['title','editor','comments','revisions','trackbacks','author','excerpt','thumbnail','custom-fields'],
//     ];

//     register_post_type('resources', $args);

//     register_taxonomy(
//         'resources-category',
//         'resources',
//         [
//             'label' => __( 'Resources Category' ),
//             'rewrite' => array( 'slug' => 'resources-category', 'with_front' => false ),
//             'show_admin_column' => true,
//             'hierarchical' => true
//         ]
//     );
//     register_taxonomy(
//         'resources-tags',
//         'resources',
//         [
//             'label' => __( 'Resources Tags' ),
//             'rewrite' => array( 'slug' => 'resources-tags', 'with_front' => false ),
//             'show_admin_column' => true,
//             'hierarchical' => true
//         ]
//     );
// }

// add_action('init', 'news_post_type');

// function news_post_type() {
//     $labels = [
//         'name' => _x('News', 'post type general name'),
//         'singular_name' => _x('News', 'post type singular name'),
//         'add_new' => _x('Add New', 'News'),
//         'add_new_item' => __('Add New News'),
//         'edit_item' => __('Edit News'),
//         'new_item' => __('New News'),
//         'view_item' => __('View News'),
//         'search_items' => __('Search News'),
//         'not_found' => __('No News found'),
//         'not_found_in_trash' => __('No News found in Trash'),
//         'parent_item_colon' => ''
//     ];

//     $args = [
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'query_var' => true,
//         'rewrite' => [
//             'slug' => 'news',
//             'with_front' => false,
//             'hierarchical' => true
//         ],
//         'capability_type' => 'post',
//         'menu_icon' => 'dashicons-text',
//         'hierarchical' => true,
//         'menu_position' => null,
//         'supports' => ['title','editor','comments','revisions','trackbacks','author','excerpt','thumbnail','custom-fields'],
//     ];

//     register_post_type('news', $args);

//     register_taxonomy(
//         'news-category',
//         'news',
//         [
//             'label' => __( 'News Category' ),
//             'rewrite' => array( 'slug' => 'news-category', 'with_front' => false ),
//             'show_admin_column' => true,
//             'hierarchical' => true
//         ]
//     );
//     register_taxonomy(
//         'news-tags',
//         'news',
//         [
//             'label' => __( 'News Tags' ),
//             'rewrite' => array( 'slug' => 'news-tags', 'with_front' => false ),
//             'show_admin_column' => true,
//             'hierarchical' => true
//         ]
//     );
// }


add_action('init', 'team_post_type');

function team_post_type() {
    $labels = [
        'name' => _x('Team', 'post type general name'),
        'singular_name' => _x('Team', 'post type singular name'),
        'add_new' => _x('Add New', 'Team Member'),
        'add_new_item' => __('Add New Team Member'),
        'edit_item' => __('Edit Team Member'),
        'new_item' => __('New Team Member'),
        'view_item' => __('View Team Member'),
        'search_items' => __('Search Team'),
        'not_found' => __('No Team Member found'),
        'not_found_in_trash' => __('No Team Member found in Trash'),
        'parent_item_colon' => ''
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => [
            'slug' => 'team',
            'with_front' => false,
            'hierarchical' => true
        ],
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-universal-access',
        'hierarchical' => true,
        'menu_position' => null,
        'supports' => ['title','editor','comments','revisions','trackbacks','author','excerpt','thumbnail','custom-fields'],
    ];

    register_post_type('team', $args);

    register_taxonomy(
        'team-category',
        'team',
        [
            'label' => __( 'Team Member Category' ),
            'rewrite' => array( 'slug' => 'team-category', 'with_front' => false ),
            'show_admin_column' => true,
            'hierarchical' => true
        ]
    );
    register_taxonomy(
        'team-tags',
        'team',
        [
            'label' => __( 'Team Member Tags' ),
            'rewrite' => array( 'slug' => 'team-tags', 'with_front' => false ),
            'show_admin_column' => true,
            'hierarchical' => true
        ]
    );
}


/** Common sense function for automating image retrieval */
function am_get_attachment( $attachment_id, $size = '' ) {

    $attachment = get_post( $attachment_id );

    if ( ! $attachment )
        return;

    $src = ( $size != '' ) ? wp_get_attachment_image_src( $attachment_id, $size )[0] : $attachment->guid;
    $srcset = wp_get_attachment_image_srcset( $attachment_id );

    return array(
        'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
        'href' => get_permalink( $attachment->ID ),
        'src' => $src,
        'srcset' => $srcset,
    );
}
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
