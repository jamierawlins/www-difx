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
<div class="hero">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php twenty_twenty_one_post_thumbnail(); ?>
</div>
<?php the_post(); ?>
<?php the_content(); ?>


<div class="awards">
    <h2>Awards</h2>
    <?php the_field('award-intro'); ?>
    <?php if( have_rows('award-repeater') ): ?>
        <ul class="award-repeater">
        <?php while( have_rows('award-repeater') ): the_row(); ?>
            <li>
                <h3><?php the_sub_field('award'); ?></h3>
                <p><?php the_sub_field('award-ceremony'); ?></p>
                <p><?php the_sub_field('award-date'); ?></p>
            </li>
        <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>

<div class="clients">
    <h2>Clients</h2>
    <?php if( have_rows('clients-repeater') ): ?>
        <ul class="clients-repeater">
        <?php while( have_rows('clients-repeater') ): the_row(); 
            $image = get_sub_field('image');
            ?>
            <li>
                
                <p><?php the_sub_field('client'); ?></p>
            </li>
        <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>
<h1>ABOUT</h1>
<?php
get_footer();
