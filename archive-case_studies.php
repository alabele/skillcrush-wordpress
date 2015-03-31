
<?php
/**
 * The template for displaying archives of case studies
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main" class="clearfix">
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');
				$image1 = get_field('image_1');
				add_image_size( 'custom-size', 500, 448 ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode;
			?>
			<aside class="archive-sidebar">
				<h2><?php the_title(); ?></h2>
				<h5><?php echo $services; ?>  </h5>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>">View Project &#10095;</a>
			</aside>

		<div class="archive-images ">	
			<?php if($image1) { ?>
				<?php echo wp_get_attachment_image( $image1, 'custom-size' ); ?>
			<?php } ?>
			
		</div>
	
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>
	

