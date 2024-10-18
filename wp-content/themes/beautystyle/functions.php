<?php
/**
 * Theme: BeautyStyle
 *
 * Theme Functions, includes, etc.
 *
 * @package beautystyle
 */

/*
Include Functional File
--------------------- */
function beautystyle_customize_register($beautystyle_wp_customize) {

	require_once( get_template_directory() . '/functions/customizer.php' ); 
}
add_action( 'customize_register', 'beautystyle_customize_register' );


/*  Enqueue css
------------------------------------ */
function beautystyle_styles_scripts(){

    wp_enqueue_style('beautystyle-style', get_template_directory_uri(). '/style.css', NULL, '1.0.0');
	wp_enqueue_style('beautystyle-main-style', get_template_directory_uri(). '/assets/css/main.css', NULL, '1.0.0');
	wp_enqueue_style('beautystyle-posts-style', get_template_directory_uri(). '/assets/css/posts.css', NULL, '1.0.0');

	if (is_page() || is_404()){

		wp_enqueue_style('beautystyle-page-style', get_template_directory_uri(). '/assets/css/page.css', NULL, '1.0.0');
	};

	wp_enqueue_style('beautystyle-editor-style', get_template_directory_uri(). '/assets/css/editor-style.css', NULL, '1.0.0');


/*  Enqueue script
------------------------------------ */
	if( is_front_page()){

		wp_enqueue_script('beautystyle-script-slider', get_template_directory_uri(). '/assets/js/slider/slider-script.js', NULL, '1.0.0', true);
		wp_enqueue_script( 'beautystyle-script-menu', get_template_directory_uri() . '/assets/js/menu/menu.js', array('jquery'), '1.0', true );
	}

	if ( is_singular() && get_option( 'thread_comments' ) )	{ wp_enqueue_script( 'comment-reply' ); }

	wp_enqueue_script('beautystyle-script-menu', get_template_directory_uri() . '/assets/js/menu/menu.js', array('jquery'), '1.0', true );
}
add_action('wp_enqueue_scripts', 'beautystyle_styles_scripts' );


/*  Theme setup
------------------------------------ */
if ( ! function_exists('beautystyle_setup') ) {

	function beautystyle_setup() {

		/* Load theme languages*/
		load_theme_textdomain( 'beautystyle', get_template_directory() . '/languages' );

		/* enable custom backgound */
		$beautystyle_defaults = array( 
			'default-color' => 'C0C8E5', 
			'default-image' => '', 
			'default-repeat' => 'no-repeat', 
			'default-position-x' => 'left', 
			'default-position-y' => 'top', 
			'default-size' => 'auto', 
			'default-attachment' => 'scroll', 
		);
		add_theme_support( 'custom-background' , $beautystyle_defaults );

		/* responsive embeds css classes */
		add_theme_support( 'responsive-embeds' );

		/* enable title in header */
		add_theme_support("title-tag");

		/* enable feature image */
		add_theme_support('post-thumbnails');

		/* Thumbnail sizes */
		add_image_size('beautystyle_thumbox', 270 , 170 , true);
		
		/* automatic feed links */
		add_theme_support('automatic-feed-links');

		/* custom menu areas */
		register_nav_menus( array(
			'header' => esc_html__('Header', 'beautystyle')
		));

		// Enable featured image
		add_theme_support( 'align-wide');

		// add default Gutenberg block styles 
		add_theme_support( 'wp-block-styles' );
	
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		/* html5 */
		add_theme_support( 'html5', array(
			'comment-list', 
			'comment-form',
			'search-form',
			'gallery',
			'caption',
			'style',
			'script'
		));

		// Add support for selective refresh widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		//starter content
		$beautystyle_starter_content = array(

			'widgets' => array(
				'footer-wid' => array(
					'my_text' => array( 'text', array(
						'title' => 'Title here',
						'text'  => 'Text or custom HTML here'
					) ),
				),
			),

			'posts' => array(
				'custom_page_1' => array(
					'post_type' => 'page',
					'post_title' => 'Custom Page 1',
					'post_content' => __( 'Welcome to your site! This is your homepage, which is what most visitors will see when they come to your site for the first time.', 'beautystyle' ),
					'thumbnail' => '{{spabox1}}',
				),

				'custom_page_2' => array(
					'post_type' => 'page',
					'post_title' => 'Custom Page 2',
					'post_content' => __( 'Welcome to your site! This is your homepage, which is what most visitors will see when they come to your site for the first time.', 'beautystyle' ),
					'thumbnail' => '{{spabox2}}',
				),

				'custom_page_3' => array(
					'post_type' => 'page',
					'post_title' => 'Custom Page 3',
					'post_content' => __( 'Welcome to your site! This is your homepage, which is what most visitors will see when they come to your site for the first time.', 'beautystyle' ),
					'thumbnail' => '{{spabox3}}',
				),
			),

			'attachments' => array(
				'spabox1' => array(
					'post_title' => __('Spabox 1', 'beautystyle'),
					'file' => 'assets/img/image_box1.jpg',
				),

				'spabox2' => array(
					'post_title' => __('Spabox 2', 'beautystyle'),
					'file' => 'assets/img/image_box2.jpg',
				),

				'spabox3' => array(
					'post_title' => __('Spabox 3', 'beautystyle'),
					'file' => 'assets/img/image_box3.jpg',
				),
			),

			'theme_mods' => array(
				'beautystyle_slide_image_1' => esc_url(get_template_directory_uri() . '/assets/img/image_slide1.jpg'),
				'beautystyle_slide_content_1' => __('Making Everyone Beautiful','beautystyle'),
				'beautystyle_slide_image_2' => esc_url(get_template_directory_uri() . '/assets/img/image_slide2.jpg'),
				'beautystyle_slide_content_2' => __('Restoring Balance & Natural Health','beautystyle'),
				'beautystyle_slide_image_3' => esc_url(get_template_directory_uri() . '/assets/img/image_slide3.jpg'),
				'beautystyle_slide_content_3' => __('Spa Renewal','beautystyle'),

				'custom_page_1' => '{{custom_page_1}}',
				'custom_page_2' => '{{custom_page_2}}',
				'custom_page_3' => '{{custom_page_3}}',
			),
		);

		$beautystyle_starter_content = apply_filters('beautystyle_starter_content', $beautystyle_starter_content);
		add_theme_support('starter-content', $beautystyle_starter_content);

		/*  Custom logo setup */
		$beautystyle_defaults_logo = array(
			'height'               => 200,
			'width'                => 300,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => array( 'site-title', 'site-description' ),
			'unlink-homepage-logo' => false, 
		);
		add_theme_support( 'custom-logo', $beautystyle_defaults_logo ); 

		/* block style */
		if ( function_exists( 'register_block_style' ) ) {
			register_block_style(
				'core/quote',
					array(
						'name'         => 'blue-quote',
						'label'        => __( 'Blue Quote', 'beautystyle' ),
						'is_default'   => true,
						'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
					)
			);
		}

		/* block pattern */
		require_once( get_template_directory() . '/functions/patterns.php' );

	}

}
add_action( 'after_setup_theme', 'beautystyle_setup' );


/* Set up the content width value based on the theme's design. 
------------------------------------------------------------*/
if ( ! isset( $content_width ) ) { $content_width = 968; }


/* home, archive and blog-post template pagination
----------------------------------------------- */
function beautystyle_custom_posts_per_page( $beautystyle_query ) {
 
    if ( $beautystyle_query->is_home() || $beautystyle_query->is_archive() ) {
        set_query_var('posts_per_page', -1);
    }
}
add_action( 'pre_get_posts', 'beautystyle_custom_posts_per_page' );


/* custom filed comment
-------------------- */
function beautystyle_wpdocs_remove_website_field( $beautystyle_fields ) {
	unset( $beautystyle_fields['url'] );
	unset( $beautystyle_fields['cookies'] );
	return $beautystyle_fields;
}

add_filter( 'comment_form_default_fields', 'beautystyle_wpdocs_remove_website_field' );


/* Register widget area
-------------------- */
function beautystyle_widget_init(){
	register_sidebar( array(
		'name'          => __( 'Footer Widget', 'beautystyle' ),
		'description'   => __( 'Appears on footer of the page', 'beautystyle' ),
		'id'            => 'footer-wid',
		'before_widget' => '<div class="box-ft3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'beautystyle_widget_init' );

/* Register editor stylesheet for the theme.
----------------------------------------- */
function beautystyle_add_editor_style() {

	add_editor_style( 'assets/css/editor-style.css' );
}
add_action('admin_init', 'beautystyle_add_editor_style' );