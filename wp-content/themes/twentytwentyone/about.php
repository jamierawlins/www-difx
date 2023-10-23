<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: About
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<?php the_post(); ?>
<?php the_content(); ?>
<h2><?php echo esc_html( get_field('simple') ); ?></h2>


<?php

// Check rows exists.
if( have_rows('clients-repeater') ):

    // Loop through rows.
    while( have_rows('clients-repeater') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('client');
        // Do something...

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>


<?php
get_footer();
