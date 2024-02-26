<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?> | <?php the_title();?></title>
    <?php wp_head();?>
</head>
<body <?php body_class( 'flex flex-col' )?>>
    <?php get_template_part( 'partials/mobile-menu' ); ?>
    <header class="bg-white p-8 flex justify-between items-center z-40">
        <a href="<?php echo site_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/HES_logo.svg" alt="HES logo" class="w-36 lg:56">
        </a>
        <nav class="hidden xl:flex items-center gap-4">
            <?php wp_nav_menu(array(
                'menu' => 'Header Menu',
                'container' => null

            )); ?>
        </nav>
        <div id="mobile-menu-trigger" class="flex xl:hidden z-50 cursor-pointer">
            <span id="show" class="flex text-blue-dark uppercase">Menu</span>
            <span id="hide" class="hidden text-blue-dark uppercase">Close</span>
        </div>
    </header>
