<?php

// Adding a wrap to full-width structural elements
    add_theme_support('genesis-structural-wraps', array('header'));

//* Add HTML5 markup structure
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list'));

//* Add viewport meta tag for mobile browsers
    add_theme_support('genesis-responsive-viewport');

//add_action( 'genesis_setup', 'gsep_genesis_setup', 15 );
//function gsep_genesis_setup()
{
// Removing unwanted genesis layouts
//    genesis_unregister_layout('sidebar-content');
//    genesis_unregister_layout('content-sidebar');
//    genesis_unregister_layout('content-sidebar-sidebar');
//    genesis_unregister_layout('sidebar-sidebar-content');
//    genesis_unregister_layout('sidebar-content-sidebar');

//* Remove the header right widget area
//    unregister_sidebar('header-right');
//    unregister_sidebar('sidebar');
//    unregister_sidebar('sidebar-alt');
}
