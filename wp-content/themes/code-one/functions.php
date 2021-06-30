<?php


function code_one_files() {
    wp_enqueue_style('code_one_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'code_one_files');