<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
     wp_enqueue_style( 'understrap-theme', get_template_directory_uri() . '/css/theme.min.css', array());
    wp_enqueue_style( 'understrap-child',
        get_stylesheet_directory_uri() . '/css/understrap-child.css',
        array('understrap-theme')
    );
}