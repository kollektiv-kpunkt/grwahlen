<?php

function grw_partial($name) {
    if (file_exists(__DIR__ . "/../partials/{$name}/style.css")) {
        wp_enqueue_style( $name, get_template_directory_uri() . "/partials/{$name}/style.css" );
    }
    if (file_exists(__DIR__ . "/../partials/{$name}/script.js")) {
        wp_enqueue_script( $name, get_template_directory_uri() . "/partials/{$name}/script.js", array ( 'jquery' ), 1.1, true);
    }
    get_template_part("partials/{$name}/index");
}