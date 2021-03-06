<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package web2feel
 * @since web2feel 1.0
 */

get_header(); ?>
<?php get_sidebar(); ?>

		<section id="primary" class="content-area">
			<div class="incover">
			<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'web2feel' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

								<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				<div class="paginate ">
					<?php kriesi_pagination(); ?>
				</div>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'search' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
			</div>
		</section><!-- #primary .content-area -->


<?php get_footer(); ?>