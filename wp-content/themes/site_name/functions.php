<?php

// Start the engine
require_once( get_template_directory() . '/lib/init.php' );

// Layout
require_once(CHILD_DIR.'/lib/layout.php');

// Template
include_once(CHILD_DIR.'/lib/template.php');

// Admin
//include_once(CHILD_DIR.'/lib/admin.php');

//error log
function elog($x){
    ob_start();
    print_r($x);
    $contents = ob_get_contents();
    ob_end_clean();
    error_log($contents);
}


