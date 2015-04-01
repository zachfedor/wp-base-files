<?php

/************************************************************
 * Change Custom Doctype 
 ************************************************************/
remove_action( 'genesis_doctype', 'genesis_do_doctype' );
add_action( 'genesis_doctype', 'gsep_doctype' );
function gsep_doctype() { ?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" dir="ltr" lang="en-US"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" dir="ltr" lang="en-US"><!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<?php
}


