<?php
/**
 * The template for displaying the header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package neuigkeiten
 */

// Menus
$top_menu_args = array(
	'theme_location'  => 'header_menu_location',
	'container'       => 'nav',
	'container_class' => 'header__top-navigation top-navigation',
	'menu_class'      => 'top-navigation__menu top-menu',
);
$mob_menu_args = array(
	'theme_location'  => 'mobile_menu_location',
	'container'       => 'nav',
	'container_class' => 'header__mob-navigation mob-navigation',
	'menu_class'      => 'mob-navigation__menu mob-menu',
);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="header">
		<div class="header__logo-wrapper">

			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php endif ?>

		</div>
		<!-- /.header__logo-wrapper -->

		<?php wp_nav_menu( $top_menu_args ); ?>

		<button class="mob-navigation__burger nav-toggle">
			<span class="nav-toggle__bar-top"></span>
			<span class="nav-toggle__bar-mid"></span>
			<span class="nav-toggle__bar-bot"></span>
		</button>
		<!-- /.mob-navigation__burger nav-toggle -->

		<?php wp_nav_menu( $mob_menu_args ); ?>
	</header>
	<!-- /.header -->

	<main class="site-main">
