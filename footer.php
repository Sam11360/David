<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info">

				<?php _e('All rights reserved', 'seos-video'); ?>  &copy; <?php bloginfo('name'); ?>

				<a href="#" title="<?php esc_attr_e('seos-video' ); ?>"><?php printf( __( 'Powered by %s', 'seos-video' ), '' ); ?></a>

				<a title="<?php _e('Wordpress theme', 'seos-video'); ?>" href="<?php echo esc_url(__('seos-video')); ?>" target="_blank"><?php _e('Marlène Mas', 'seos-video'); ?></a>

		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
