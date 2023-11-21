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
        <div class="element-item transition <?php echo $category->slug;?>" data-category="<?php echo $category->slug;?>">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <div class="descrip">
                    <h2><?php the_title(); ?></h2>
                    <?php twenty_twenty_one_post_thumbnail(); ?>
                 </div>
            </a>
        </div>
        <?php endwhile;
    }
    wp_reset_postdata();
?>



<?php
get_footer();
