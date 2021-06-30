<?php


function fetch_code_one_files() {
    wp_enqueue_style('code_one_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'fetch_code_one_files');