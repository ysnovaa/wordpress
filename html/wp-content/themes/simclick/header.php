<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package SimClick
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>
	
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'simclick'  ); ?></a>

		<header id="masthead" class="site-header">
			<div class="wrapper">
				<div class="site-header-main">
					<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

					<?php get_template_part( 'template-parts/header/site', 'navigation' ); ?>


				</div> <!-- .site-header-main -->

				<!-- <div id="header-navigation-area">
					<?php //get_template_part( 'template-parts/header/header', 'navigation' ); ?>
				</div> --> <!-- #header-navigation-area -->

			</div> <!-- .wrapper -->
		</header><!-- #masthead -->

		<div class="below-site-header">

			<div class="site-overlay"><span class="screen-reader-text"><?php esc_html_e( 'Site Overlay', 'simclick'  ); ?></span></div>

			<?php simclick_sections(); ?>

			<div id="content" class="site-content">
				<div class="wrapper">
