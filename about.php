<?php
/*
Template Name: About Page

 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate 1.1
 */

get_header(); ?>
<section class="about-page">
	<div class="site-content">
	<!--<div id="primary" class="site-content">
		<div id="content" role="main" class="aboutpage-content">-->
			<?php while ( have_posts() ) : the_post(); ?>
				 <div class='aboutpage-hero'>
					<?php the_content(); ?>
				</div>
			<?php endwhile; // end of the loop. ?>
	</div>			
</section>
<section class"about-page-services">
	<ul class="about-page-services-list">
		<?php query_posts('posts_per_page=4&post_type=about_content'); ?>
					<?php while ( have_posts() ) : the_post(); 
						$icon = get_field("icon");
						$size ="medium";
					?>
					<li class="about-content-individual">
						<figure>
							<?php echo wp_get_attachment_image( $icon, $size ); ?>
						</figure>	
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
					</li>
					<?php endwhile; // end of the loop. ?>
					<?php wp_reset_query(); // resets the altered query back to the original ?>	
	</ul>					
</section>

		<!--</div><!-- #content -->
	<!--</div><!-- #primary -->
<?php get_footer(); ?>