<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// ---------------------------------------------------
// Adopt the style of Jamanto
// ---------------------------------------------------
function jamanto_parent_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 
}

add_action( 'wp_enqueue_scripts', 'jamanto_parent_styles' );

// ---------------------------------------------------
// Change file upload size
// ---------------------------------------------------
/*
@ini_set( 'upload_max_size' , '15M' );
@ini_set( 'post_max_size', '15M');
@ini_set( 'max_execution_time', '300' );
*/