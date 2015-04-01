<?php

/************************************************************
 * Change favicon location and add touch icons
 * Generate all icons needed here: http://iconifier.net/
 ************************************************************/
add_filter( 'genesis_pre_load_favicon', 'favicon_filter' );
function favicon_filter( $favicon ) {
    echo '<link rel="Shortcut Icon" href="'.get_bloginfo('stylesheet_directory').'/assets/images/favicon/favicon.ico?'.date('m/j/y-h:i:s').'" type="image/x-icon" />' . "\n";
    echo '<link rel="apple-touch-icon-precomposed" sizes="152x152" href="'.get_bloginfo('stylesheet_directory').'/assets/images/favicon/apple-touch-icon-152x152.png?'.date('m/j/y-h:i:s').'" />'."\n";
    echo '<link rel="apple-touch-icon-precomposed" sizes="144x144" href="'.get_bloginfo('stylesheet_directory').'/assets/images/favicon/apple-touch-icon-144x144.png?'.date('m/j/y-h:i:s').'" />'."\n";
    echo '<link rel="apple-touch-icon-precomposed" sizes="120x120" href="'.get_bloginfo('stylesheet_directory').'/assets/images/favicon/apple-touch-icon-120x120.png?'.date('m/j/y-h:i:s').'" />'."\n";
    echo '<link rel="apple-touch-icon-precomposed" sizes="114x114" href="'.get_bloginfo('stylesheet_directory').'/assets/images/favicon/apple-touch-icon-114x114.png?'.date('m/j/y-h:i:s').'" />'."\n";
    echo '<link rel="apple-touch-icon-precomposed" sizes="76x76" href="'.get_bloginfo('stylesheet_directory').'/assets/images/favicon/apple-touch-icon-76x76.png?'.date('m/j/y-h:i:s').'" />'."\n";
    echo '<link rel="apple-touch-icon-precomposed" sizes="72x72" href="'.get_bloginfo('stylesheet_directory').'/assets/images/favicon/apple-touch-icon-72x72.png?'.date('m/j/y-h:i:s').'" />'."\n";
    echo '<link rel="apple-touch-icon-precomposed" sizes="57x57" href="'.get_bloginfo('stylesheet_directory').'/assets/images/favicon/apple-touch-icon-57x57.png?'.date('m/j/y-h:i:s').'" />'."\n";
    echo '<link rel="apple-touch-icon-precomposed" href="'.get_bloginfo('stylesheet_directory').'/assets/images/favicon/apple-touch-icon.png?'.date('m/j/y-h:i:s').'" />'."\n";
}
