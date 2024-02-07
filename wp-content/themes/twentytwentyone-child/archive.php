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

<div class="projects-wrap">
	<?php while ( have_posts() ) : ?>
		<article class="project">
		
			<?php the_post(); ?>
			<div class="description" style="background-color:<?php the_field('colour-one'); ?>">
				<h2><?php the_title(); ?></h2>
				<svg xmlns="http://www.w3.org/2000/svg" class="project-top-shape" width="339" height="327" viewBox="0 0 339 327" fill="none">
					<path d="M0 327C0 327 339 278.75 339 0H0V327Z" style="fill:<?php the_field('colour-two'); ?>"/>
					</svg>  
			</div>
			
			<?php twenty_twenty_one_post_thumbnail(); ?>
	
		</article>
	<?php endwhile; ?>
</div>
<style type="text/css">
	.left-project-details {
		background-color: <?php the_field('colour-one'); ?>;
	}
	.description h2{
		color: <?php the_field('text-color'); ?>;
	}
	.back .bottom-shape path, .back .top-shape path, .bottom-shape path{
		fill: <?php the_field('colour-one'); ?>;
	}
	
</style>
<?php twenty_twenty_one_the_posts_navigation(); ?>

<?php else : ?>
<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>