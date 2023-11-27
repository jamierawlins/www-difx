<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			$credentials = get_field('credentials');
			if( $credentials ): ?>



				<div class="left-project-details">
					<div class="project-detail">
						<h3>Channel / Service</h3>
						
						<?php echo $credentials['channel-service']; ?>
					</div>
					<div class="project-detail">
						<h3>Client</h3>		
						
						<?php echo $credentials['client-name']; ?>
					</div>
					<div class="project-detail">
						<h3>Date</h3>
						<?php echo esc_html( $credentials['date'] ); ?>
					</div>
					<div class="project-detail">
						<h3><a href="<?php echo esc_url( $credentials['imdb'] ); ?>">IMDB</a></h3>
					</div>
					<svg xmlns="http://www.w3.org/2000/svg" width="572" height="465" viewBox="0 0 572 465" fill="none">
<path d="M572 465C572 465 487.599 1.337e-06 -2.03258e-05 2.26506e-05L0 465L572 465Z" fill="white"/>
</svg> 	
						
				</div>




				
			<?php endif; ?>


			<div class="right-project-details">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
						'after'    => '</nav>',
						/* translators: %: Page number. */
						'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
					)
				);
				?>
				<svg xmlns="http://www.w3.org/2000/svg" class="bottom-shape" width="869" height="839" viewBox="0 0 869 839" fill="none">
    <path d="M869 6.10352e-05C869 6.10352e-05 1.48979e-06 123.798 -6.10352e-05 839L869 839L869 6.10352e-05Z" fill="black"/>
    </svg>
			</div>
	</div><!-- .entry-content -->

	<div class="back">
	<svg xmlns="http://www.w3.org/2000/svg" class="top-shape" width="339" height="327" viewBox="0 0 339 327" fill="none">
<path d="M0 327C0 327 339 278.75 339 0H0V327Z" fill="black"/>
</svg>
		<a href="/projects">Back to all projects</a>
		<svg xmlns="http://www.w3.org/2000/svg" class="bottom-shape" width="869" height="839" viewBox="0 0 869 839" fill="none">
    <path d="M869 6.10352e-05C869 6.10352e-05 1.48979e-06 123.798 -6.10352e-05 839L869 839L869 6.10352e-05Z" fill="black"/>
    </svg>
	</div>

	<style type="text/css">
	.left-project-details {
		background-color: <?php the_field('colour-one'); ?>;
	}
	.back .bottom-shape path, .back .top-shape path{
		fill: <?php the_field('colour-one'); ?>;
	}
	
</style>

</article><!-- #post-<?php the_ID(); ?> -->
