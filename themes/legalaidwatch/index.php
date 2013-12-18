<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink naar <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('j F Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_content('De rest van dit item lezen &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Geplaatst in <?php the_category(', ') ?> | <?php edit_post_link('Bewerken', '', ' | '); ?>  <?php comments_popup_link('Geen reacties &#187;', '1 reactie &#187;', '% reacties &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; vorige') ?></div>
			<div class="alignright"><?php previous_posts_link('volgende &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Niet gevonden</h2>
		<p class="center">Helaas, je zoekt naar iets dat er niet is.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
