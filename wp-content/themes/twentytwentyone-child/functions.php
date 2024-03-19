<?php
/* enqueue scripts and style from parent theme */
   
function twentytwentyone_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_uri(),
	array( 'twenty-twenty-one-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyone_styles');


function wpb_add_google_fonts() {
  
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap', false ); 
	}
	  
	add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


function wpb_add_google_fonts_bebas() {

	wp_enqueue_style( 'wpb-google-fonts_bebas', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap', false ); 
	}
	
	add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts_bebas' );
	
	function register_scripts_and_styles() {
		// Enqueue AOS styles
		wp_enqueue_style(' AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);
	
		// Enqueue AOS script library in footer
		wp_eqneue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', false, null, true);
	
		// For the JavaScript that initializes AOS, it's best if you manage that in a separate
		// JS file and enqueue it as a dependency of AOS script library. That way, it ensures the
		// order of your scripts.
		wp_('theme-js', 'path/to/theme.js', ['AOS'], null, true);
	}