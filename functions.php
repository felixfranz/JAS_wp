<?php

/// ADD MENUS
 add_theme_support( 'menus' );

    add_action( 'init', 'register_my_menus' );

    function register_my_menus() {
        register_nav_menus(
            array(
                'primary-menu' => __( 'Primary Menu' ),
                'secondary-menu' => __( 'Secondary Menu' ),
                'overlay-menu' => __( 'Overlay Menu' )
            )
        );
    }

/*********************
SCRIPTS & ENQUEUEING
*********************/


function wpdocs_theme_name_scripts() {

	wp_register_style( 'fontawesome-stylesheet', get_stylesheet_directory_uri() . '/fonts/fontawesome/css/all.min.css', array(), '', 'all' );
    
    wp_register_script( 'jas-js', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ), '', true );

    // enqueue styles   
    wp_enqueue_style( 'fontawesome-stylesheet' );
    // enqueue scripts
    wp_enqueue_script( 'jas-js' );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


    

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

////////////////
// options page ACF Pro
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

// HIDE ADMIN BAR
add_filter('show_admin_bar', '__return_false');


?>