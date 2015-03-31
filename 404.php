<?php
/**
 * The template for displaying the 404 page
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main" class="contact-page-content">
			<?php while ( have_posts() ) : the_post(); ?>
				 <h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			<section class="error-main">
				<h1>Whoops!</h1> 
				<h2>Not the page you are looking for?</h2>
				<figure class="droids">
				</figure>	
			</section>	

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>