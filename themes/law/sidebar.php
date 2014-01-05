<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package web2feel
 * @since web2feel 1.0
 */
?>
		<div id="secondary" class="widget-area" role="complementary">
		<div class="incover">
		
		<header id="masthead" class="site-header" role="banner">
			<hgroup>
				<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/uil_trans4.png" alt=""/>		
			<nav role="navigation" class="site-navigation main-navigation">
				<?php wp_nav_menu( array( 'container_id' => 'nav-main','theme_location' => 'primary' ) ); ?>
			</nav><!-- .site-navigation .main-navigation -->
	   </header><!-- #masthead .site-header -->
	   	<h2 class="sidetoggle "> Sidebar </h2>
	   	<div id="sidebar">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
		<?php endif; // end sidebar widget area ?>
		<?php get_template_part( 'sponsors' ); ?>
		</div>
		</div>
		</div><!-- #secondary .widget-area -->
