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



		<div class="right-project-details">
			<div class="project-detail">
				<h3>Channel / Service</h3>
				<?php the_sub_field('Client'); ?>
			</div>
			<div class="project-detail">
				<h3>Client</h3>
			</div>
			<div class="project-detail">
				<h3>Date</h3>
			</div>
			<div class="project-detail">
				<h3>IMDB</h3>
			</div>
		</div>


		<?php
			$credentials = get_field('credentials');
			if( $credentials ): ?>
				<div id="credentials">
					<img src="<?php echo esc_url( $credentials['image']['url'] ); ?>" alt="<?php echo esc_attr( $credentials['image']['alt'] ); ?>" />
					<div class="content">
						
						<?php echo esc_html( $credentials['Client'] ); ?>
					</div>
					<div class="content">
						<?php echo $credentials['caption']; ?>
						<a href="<?php echo esc_url( $credentials['link']['url'] ); ?>"><?php echo esc_html( $credentials['link']['title'] ); ?></a>
					</div>
				</div>
				<style type="text/css">
					#credentials {
						background-color: <?php echo esc_attr( $credentials['color'] ); ?>;
					}
				</style>
			<?php endif; ?>



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
		
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
