<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    // Removes the parent themes stylesheet from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'understrap-theme', get_stylesheet_directory_uri() . '/css/understrap-child.min.css', array());
     wp_enqueue_script( 'understrap-main', get_stylesheet_directory_uri() . '/js/theme.min.js', array(), '0.1.0', true );
}