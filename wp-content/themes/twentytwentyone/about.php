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
<h2><?php echo esc_html( get_field('heading') ); ?></h2>

<?php
get_footer();
