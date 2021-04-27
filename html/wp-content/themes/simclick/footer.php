<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SimClick
 */

?>
			</div><!-- .wrapper -->
		</div><!-- #content -->

		<footer id="colophon" class="site-footer">
			<?php get_template_part( 'template-parts/footer/footer', 'widget' ); ?>

			<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
		</footer><!-- #colophon -->
	</div> <!-- below-site-header -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
