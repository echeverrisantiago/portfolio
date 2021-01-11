<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EcheverriWebService
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		<h2>Contacto</h2>
		<?php echo do_shortcode(' [ninja_form id=1] '); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
