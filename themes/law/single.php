<?php
/**
 * The Template for displaying all single posts.
 *
 * @package web2feel
 * @since web2feel 1.0
 */

get_header(); ?>
<?php get_sidebar(); ?>
		<div id="primary" class="content-area">
		<div class="incover">
			<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>


				<?php get_template_part( 'content', 'single' ); ?>

				

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div>	
		</div><!-- #primary .content-area -->


<?php get_footer(); ?>