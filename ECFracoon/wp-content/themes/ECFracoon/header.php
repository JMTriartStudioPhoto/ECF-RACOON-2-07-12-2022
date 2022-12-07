<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ECFracoon
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ecf' ); ?></a>

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
			$ecf_description = get_bloginfo( 'description', 'display' );
			if ( $ecf_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $ecf_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ecf' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<header>
        <nav>
            <ul>
                <li><a href="#" title="Redirection ...">Accueil</a></li>
                <li><a href="#" title="Redirection ..." class="active">Articles</a></li>
                <li><a href="#" title="Redirection ...">A propos</a></li>
                <li><a href="#" title="Redirection ...">Contact</a></li>
            </ul>
            <ul>
                <li>
                    <a href="#" title="Redirection vers Facebook" target="_blank">
                        <img src="./src/img/facebook.png" alt="Logo de Facebook">
                    </a>
                </li>
                <li>
                    <a href="#" title="Redirection vers Twitter" target="_blank">
                        <img src="./src/img/twitter.png" alt="Logo de Twitter">
                    </a>
                </li>
            </ul>
        </nav>
        <img src="http://ecfracoon.test/wp-content/uploads/2022/12/joggeuse.png" alt="Illustration joggeuse" class="decoration">
    </header>
