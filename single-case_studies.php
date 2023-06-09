<?php
/**
 * The template for displaying all pages
 *
 *
 * @package WordPress
 * @subpackage Accelerate_THeme
 * @since Accelerate_Theme 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
<?php get_footer(); ?>