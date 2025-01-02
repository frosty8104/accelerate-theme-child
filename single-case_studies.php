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
			<?php while ( have_posts() ) : the_post(); $services = get_field('services'); $client = get_field('client'); 
			$link = get_field('site_link') ?>
			<article class="case-study">
				<aside class="case-study-sidebar">
					<?php if($image_1) { ?><img src="<?php  echo $image_1; ?>" />
					<h2><?php the_title(); ?></h2>
					<h4><?php echo $services; ?><h4>
					<h4><?php echo $client; ?></h4>
					<?php the_content(); ?>
					<p class="read-more-link"><a href="<?php echo $link; ?>">Visit Live Site</a></p>
				</aside>
			</article>
			<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
<?php get_footer(); ?>