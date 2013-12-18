<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="widecolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
			<div class="entry">
				<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
				<div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>

				<?php the_content('<p class="serif">De rest van dit item lezen &raquo;</p>'); ?>

				<div class="navigation">
					<div class="alignleft"><?php previous_image_link() ?></div>
					<div class="alignright"><?php next_image_link() ?></div>
				</div>
				<br class="clear" />

				<p class="postmetadata alt">
					<small>
						Dit bericht is geplaatst op <?php the_time('l j F Y') ?> om <?php the_time() ?>
						in de categorie <?php the_category(', ') ?>.
						<?php the_taxonomies(); ?>
						Je kunt reacties op dit bericht volgen via de <?php post_comments_feed_link('RSS 2.0'); ?>-feed.

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							Je kunt een <a href="#respond">reactie schrijven</a> of een <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> plaatsen vanaf je eigen site.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Reageren is momenteel niet mogelijk, maar je kunt een <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> plaatsen vanaf je eigen site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							Je kunt naar het eind van dit bericht gaan en een reactie achterlaten. Pingen is momenteel niet toegestaan.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Zowel reageren als pingen is momenteel niet mogelijk.

						<?php } edit_post_link('Dit item bewerken.','',''); ?>

					</small>
				</p>

			</div>

		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Helaas, geen bijlagen die aan je criteria voldoen.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
