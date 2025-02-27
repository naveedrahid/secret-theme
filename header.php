<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package secret_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'secret-theme' ); ?></a>

	<?php 
		$saved_header = get_option('header_settings');
		// var_dump($saved_header);

		if ($saved_header['header_style'] == 'header1') {
			include get_template_directory() . '/header/header1.php';
		}elseif($saved_header['header_style'] == 'header2'){
			include get_template_directory() . '/header/header2.php';
		}elseif($saved_header['header_style'] == 'header3'){
			include get_template_directory() . '/header/header3.php';
		}else{
			?>
			<?php
				$colors_settings = get_option('colors_settings');
				$primary_color = isset($colors_settings['color_schema']) ? $colors_settings['color_schema'] : '#ffffff';
			?>
			<h1 style="background:<?php echo esc_attr($primary_color); ?>">dsdad</h1>
				<header id="masthead" class="site-header">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$secret_theme_description = get_bloginfo( 'description', 'display' );
						if ( $secret_theme_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $secret_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
			
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'secret-theme' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</header>
			<?php
		}
	?>

