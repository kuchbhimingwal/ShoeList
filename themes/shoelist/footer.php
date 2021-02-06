<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShoeList-Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>© 2021 ShoeList, Inc. All Rights Reserved
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'shoelist' ), 'shoelist', '<a href="http://shubhammingi.com/">Shubham Mingwal</a>' );
				?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
