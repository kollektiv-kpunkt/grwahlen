<?php
function add_grw_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . "/style/style.css" );
    wp_enqueue_style( 'nimbus', get_template_directory_uri() . "/style/typography/fonts/nimbus-sans.css" );
    wp_enqueue_style( 'typo', get_template_directory_uri() . "/style/typography/typo.css" );
    wp_enqueue_style( 'containers', get_template_directory_uri() . "/style/elements/containers.css" );
    wp_enqueue_style( 'grwbuttons', get_template_directory_uri() . "/style/elements/buttons.css" );
    

    // Scripts
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_grw_scripts' );