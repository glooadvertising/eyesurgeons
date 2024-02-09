<!DOCTYPE html>
<html <?php language_attributes() ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php get_template_part( 'partials/mobile-menu' ); ?>
		<header id="header">
			<a href="<?php echo site_url(); ?>" id="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/HES_logo.svg" />
			</a>
			<div id="menu">
				<?php 
					$defaults = array('theme_location' => 'header','menu_class'=> '','items_wrap' => '<ul id="top-menu">%3$s</ul>');
					wp_nav_menu( $defaults ); 
				?>
				<div id="menu-trigger" class="burger">
					<div class="patty"></div>
					<div class="patty"></div>
					<div class="patty"></div>
				</div>
			</div>
		</header> 