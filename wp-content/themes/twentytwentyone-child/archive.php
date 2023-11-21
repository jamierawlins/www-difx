<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>
<div class="hero">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php twenty_twenty_one_post_thumbnail(); ?>
</div>


<?php
the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>
<?php if ( have_posts() ) : ?>


		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twenty_twenty_one_post_thumbnail(); ?>

	


<?php endif; ?>

<?php
get_footer();
