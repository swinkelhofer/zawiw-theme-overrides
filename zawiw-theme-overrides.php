<?php
/*
Plugin Name: ZAWiW Theme Override
Plugin URI:
Description: Applies some minor theme css adjustments
Version: 1.0
Author: Simon Volpert
Author URI: http://svolpert.eu
License: GPLv2
*/

// Fixes double display of "Private:" in front Titles on private pages
add_filter( 'genesis_post_title_text', 'child_modify_title' );

// Load Scripts
add_action( 'wp_enqueue_scripts', 'zawiw_theme_override_queue_script' );
add_action( 'wp_enqueue_scripts', 'zawiw_theme_override_queue_stylesheet' );


function child_modify_title($title) {
    $title = array_pop(explode("Privat:", $title));
    return $title;
}

function zawiw_theme_override_queue_script()
{
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'zawiw_theme_override_script', plugins_url( 'helper.js', __FILE__ ) );
}

function zawiw_theme_override_queue_stylesheet() {
    wp_enqueue_style( 'zawiw_theme_override_style', plugins_url( 'style.css', __FILE__ ) );
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
}


?>
