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
<?php
 
 // The Loop
 while ( have_posts() ) : the_post(); ?>
 <article id="post-<?php the_ID(); ?>">	
					 <div>
						 
						 <div class="thumbnail-wrap">
							 <?php
							 if ( has_post_thumbnail() ) :
								 the_post_thumbnail('medium');
							 endif;
							 ?>
						 </div>
						 <div class="article-container">
						 
							 <header class="entry-header">
								 <a href="<?php the_permalink(); ?>">
									 <h2><?php the_title(); ?></h2>
								 </a>
 
								 <?php
 
									 $the_cat = get_the_category();
									 $category_name = $the_cat[0]->cat_name;
									 $category_link = get_category_link( $the_cat[0]->cat_ID );
 
									 ?>
								 
									 <a class="category-link" href=<?php echo $category_link ?> title=”<?php echo $category_name ?>”  >
									 <?php echo $category_name ?>
									 </a>
 
								 
								 
							 </header>
							 <div class="entry-content">
							 
								 <div class="entry-content">
								 <?php echo  the_excerpt();?>
								 </div>
								  
							 <a class="button" href="<?php the_permalink(); ?>">
									 More information
								 </a>
							 </div>
						 </div>
						 
					 </div>
				 </article>   
 <?php endwhile; 
  
 else: ?>
 <p>Sorry, no posts matched your criteria.</p>
  
  
 <?php endif; ?>

<?php
get_footer();
