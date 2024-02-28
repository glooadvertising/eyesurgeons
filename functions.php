<?php

function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'big', get_template_directory_uri() . '/big.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'tailwind-styles', get_template_directory_uri() . '/tailwind-styles.css', array(), '1.1', 'all' );

	wp_enqueue_script( 'styleswitcher', get_template_directory_uri() . '/scripts/styleswitcher.js', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'new', get_template_directory_uri() . '/scripts/new.js', array('jquery'), null, true );

	if(is_page('gamechanger')) {
		wp_enqueue_script( 'form', get_template_directory_uri() . '/scripts/form.js', array('jquery'), null, true );
	} else {
		null;
	}
	
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// This adds just one menu location
add_action( 'init', 'paukai_register_menu' );
function paukai_register_menu() {
    if ( function_exists( 'register_nav_menu' ) ) {
        register_nav_menu( 'header-nav', 'Header Navigation' );
    }
} // end paukai_register_menu()

register_nav_menus( array( 
        'header' => 'Header menu', 
        'footer' => 'Footer menu' 
	) );

function wpb_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'wpb' ),
		'id' => 'sidebar-1',
		'description' => __( 'The main sidebar appears on each page assigned to the default template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' =>__( 'Footer1', 'wpb'),
		'id' => 'sidebar-2',
		'description' => __( 'Appears on all pages', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' =>__( 'Footer2', 'wpb'),
		'id' => 'sidebar-3',
		'description' => __( 'Appears on all pages', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' =>__( 'About', 'wpb'),
		'id' => 'sidebar-4',
		'description' => __( 'Appears on the About template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' =>__( 'Services', 'wpb'),
		'id' => 'sidebar-5',
		'description' => __( 'Appears on the Services template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name' =>__( 'Laser Vision Correction', 'wpb'),
		'id' => 'sidebar-6',
		'description' => __( 'Appears on the Laser Vision Correction template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	}

add_action( 'widgets_init', 'wpb_widgets_init' );
add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
return '<a class="more-link" href="' . get_permalink() . '">Read More...</a>';
}

add_theme_support( 'post-thumbnails' );


add_filter( 'the_content', 'wpse412742_class_up_the_paragraphs' );
/**
 * Adds classes to all the <p> tags in the content.
 *
 * @param  string $content The post content.
 * @return string          The post content with the classes added to the <p> tags.
 */
function wpse412742_class_up_the_paragraphs( $content ) {
    $content = str_replace(
        '<p>',
        '<p class="mb-4">',
        $content
    );
    return $content;
}
?>