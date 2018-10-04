<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel_Blog
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<div id="footer-sidebar" class="secondary">
		<div id="footer-sidebar1">
			<?php
			if(is_active_sidebar('footer-sidebar-1')){
			dynamic_sidebar('footer-sidebar-1');
			}
			?>
		</div>
		<div id="footer-sidebar2">
				<?php
				if(is_active_sidebar('footer-sidebar-2')){
				dynamic_sidebar('footer-sidebar-2');
				}
				?>
		</div>
		<div id="footer-sidebar3">
			<?php
			if(is_active_sidebar('footer-sidebar-3')){
			dynamic_sidebar('footer-sidebar-3');
			}
			?>
			</div>
		</div>
		<div class="site-info foot-text-color">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Travel' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'Travel' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'Travel' ), 'Travel', '<a href="http://zeroanalog.ca">Sean Wieler</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
