<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

	<hr />
	<div id="footer">
	<?php
	$disclaimer_page_id = 52;
	?>
			&copy; <?= date("Y"); ?> <?php bloginfo('name'); ?> | <a href="<?= get_bloginfo("siteurl"); ?>/disclaimer/" title="Disclaimer">Disclaimer</a>
	</div>
</div>

		<?php wp_footer(); ?>
</body>
</html>