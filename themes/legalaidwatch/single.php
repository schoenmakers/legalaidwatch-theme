<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="widecolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entry">
				<?php the_content('<p class="serif">De rest van dit bericht lezen &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pagina&#39;s:</strong> ', 'after' => '</p>', 'next_or_number' => 'nummer')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

				<p class="postmetadata alt">
					<small>
						Dit bericht is geplaatst
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
						op <?php the_time('l j F Y') ?> om <?php the_time() ?>
						in de categorie <?php the_category(', ') ?>.
						Je kunt reacties op dit bericht volgen via de <?php post_comments_feed_link('RSS 2.0'); ?>-feed.

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							Je kunt <a href="#respond">een reactie schrijven</a> of een <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> plaatsen vanaf je eigen site.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Reageren is momenteel niet toegestaan, maar je kunt een <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> plaatsen vanaf je eigen site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							Je kunt naar het eind van dit bericht gaan en een reactie schrijven. Pingen is momenteel niet toegestaan.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Zowel reacties schrijven als pingen is momenteel niet mogelijk.

						<?php } edit_post_link('Dit bericht bewerken','','.'); ?>

					</small>
				</p>

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Helaas, geen bericht dat aan je criteria voldoet.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
