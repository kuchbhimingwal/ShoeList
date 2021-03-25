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
	<div>
		<?php 
		$shoelist_args = array(
			'post_type'      => 'shoelist',
			'posts_per_page' => 3,
		);

		$shoelist_query = new WP_Query( $shoelist_args );

		if( $shoelist_query->have_posts() ){
			while( $shoelist_query->have_posts() ){
				$shoelist_query->the_posts();
				?>
				<h2><?php the_title(); ?></h2>
				<?php
			}
		}
		?>
	</div>
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
