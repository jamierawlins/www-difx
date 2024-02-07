<?php
/* enqueue scripts and style from parent theme */
   
function twentytwentyone_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_uri(),
	array( 'twenty-twenty-one-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyone_styles');


function add_google_fonts() {
	wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300;400;700&display=swap', false );}
	add_action( 'wp_enqueue_scripts', 'add_google_fonts' );