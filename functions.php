<?php

function child_enqueue_css() { 
	// queue the styles
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
	wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' );
}
function child_enqueue_js() { 
	wp_register_script( 'global-js', get_stylesheet_directory_uri() . '/js/global.js', array('jquery'), null, null );
	
	// queue the scripts
	wp_enqueue_script( 'global-js' );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_css' );
add_action( 'wp_enqueue_scripts', 'child_enqueue_js' );


// if a Divi child theme...
//include('editor/footer-editor.php');
// include('editor/login-editor.php');


/********************************************************************

	Custom Functions

*********************************************************************/