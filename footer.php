<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer-container">
	<div class="footer-grid">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
	</div>
</footer>
<?php
  // Include HTML/CSS footer
  $footNum = get_field('footer_opt', 'option');
  include_once'inc/footers/footer'.$footNum.'.php';
  include_once'assets/css/footer'.$footNum.'.css';
?>
<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
