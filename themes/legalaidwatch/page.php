<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<?php get_sidebar(); ?>

	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content('<p class="serif">De rest van deze pagina lezen &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pagina&#39;s:</strong> ', 'after' => '</p>', 'next_or_number' => 'nummer')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>