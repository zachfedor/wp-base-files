<?php

/************************************************************
 * Enque Custom Scripts
 ************************************************************/
add_action( 'wp_enqueue_scripts', 'gsep_enqueue_scripts', 99);
function gsep_enqueue_scripts(){
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-css', get_bloginfo('stylesheet_directory') . '/assets/css/theme.min.css');

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('theme-js', get_bloginfo('stylesheet_directory') . '/assets/js/theme.js', array('jquery'), '1', true);
}
