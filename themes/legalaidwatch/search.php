<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Zoekresultaten</h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; vorige') ?></div>
			<div class="alignright"><?php previous_posts_link('volgende &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink naar <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l j F Y') ?></small>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Geplaatst in <?php the_category(', ') ?> | <?php edit_post_link('Bewerken', '', ' | '); ?>  <?php comments_popup_link('Geen reacties &#187;', '1 reactie &#187;', '% reacties &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; vorige') ?></div>
			<div class="alignright"><?php previous_posts_link('volgende &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Geen berichten gevonden. Een andere zoekopdracht proberen?</h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>