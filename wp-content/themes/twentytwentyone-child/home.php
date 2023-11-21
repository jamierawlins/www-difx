<?php
/**
 * The template for displaying the homepage
 *
 * Template Name: Home
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="hero">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php twenty_twenty_one_post_thumbnail(); ?>
</div>
<?php the_post(); ?>
<?php the_content(); ?>


<?php
get_footer();
