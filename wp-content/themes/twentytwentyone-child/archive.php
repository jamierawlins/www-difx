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


<?php if ( have_posts() ) : ?>


<div class="hero">
<h1 class="page-title">PROJECTS</h1>
	<img src="http://digitalimagingfx.com/wp-content/uploads/2023/11/project-hero-1.jpg" />
</div>



<?php if ( $description ) : ?>
		<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
	<?php endif; ?>
<?php while ( have_posts() ) : ?>
	<article>
	<?php the_post(); ?>
	<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
	<?php twenty_twenty_one_post_thumbnail(); ?>
</article>
<?php endwhile; ?>

<?php twenty_twenty_one_the_posts_navigation(); ?>

<?php else : ?>
<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>