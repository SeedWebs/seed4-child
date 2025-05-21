<?php

function seed4_child_scripts()
{
    $ver = wp_get_theme()->get('Version');
    $url = get_stylesheet_directory_uri() . '/assets/';
    wp_enqueue_style('seed4-child', $url . 'css/style.css', [], $ver);
    wp_enqueue_script('seed4-child', $url . 'js/main.js', [], $ver, true);
}
add_action('wp_enqueue_scripts', 'seed4_child_scripts', 20);