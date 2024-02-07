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
<h1 class="page-title">DIFX</h1>
	<img src="http://digitalimagingfx.com/wp-content/uploads/2023/11/project-hero-1.jpg" />
    
</div>
<div class="home-intro-wrapper">
<svg xmlns="http://www.w3.org/2000/svg" class="top-shape" width="339" height="327" viewBox="0 0 339 327" fill="none">
<path d="M0 327C0 327 339 278.75 339 0H0V327Z" fill="black"/>
</svg>
    <?php the_post(); ?>
    <?php the_content(); ?>
    <svg xmlns="http://www.w3.org/2000/svg" class="bottom-shape" width="869" height="839" viewBox="0 0 869 839" fill="none">
    <path d="M869 6.10352e-05C869 6.10352e-05 1.48979e-06 123.798 -6.10352e-05 839L869 839L869 6.10352e-05Z" fill="black"/>
    </svg>
</div>
<div class="projects-wrap">
<?php

    $cat_args = array(
        'orderby'      => 'date',
        'order'        => 'DESC',
        'child_of'     => 0,
        'parent'       => '',
        'type'         => 'post',
        'hide_empty'   => true,
        'taxonomy'     => 'category',
    );

    $categories = get_categories( $cat_args );

    foreach ( $categories as $category ) {

        $query_args = array(
            'post_type'      => 'post',
            'category_name'  => $category->slug,
            'posts_per_page' => 2,
            'orderby'        => 'date',
            'order'          => 'DESC'
        );

        $recent = new WP_Query($query_args);

        while( $recent->have_posts() ) :
            $recent->the_post();
        ?>
        <div class="project">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <div class="description" style="background-color:<?php the_field('colour-one'); ?>">
                <h2 style="color:<?php the_field('text-color'); ?>"><?php the_title(); ?></h2>
                    <svg xmlns="http://www.w3.org/2000/svg" class="project-top-shape" width="339" height="327" viewBox="0 0 339 327" fill="none">
                        <path d="M0 327C0 327 339 278.75 339 0H0V327Z" style="fill:<?php the_field('colour-two'); ?>"/>
                     </svg>  
                 </div>
                 <?php twenty_twenty_one_post_thumbnail(); ?>
            </a>
        </div>
        <?php endwhile;
    }
    wp_reset_postdata();
?>
</div>
<div class="back">
    <a href="/projects">View all Projects</a>
</div
<?php
get_footer();
