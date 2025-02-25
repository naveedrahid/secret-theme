<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package secret_Theme
 */

//  $saved_footer = get_option('footer_settings');

//  if ($saved_footer['footer_style'] == 'footer1') {
// 	 include get_template_directory() . '/footer/footer1.php';
//  }elseif($saved_footer['footer_style'] == 'footer2'){
// 	 include get_template_directory() . '/footer/footer2.php';
//  }elseif($saved_footer['footer_style'] == 'footer3'){
// 	 include get_template_directory() . '/footer/footer3.php';
//  }elseif($saved_footer['footer_style'] == 'null'){
?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'secret-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'secret-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'secret-theme' ), 'secret-theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php 
//  }
wp_footer();
?>

</body>
</html>
