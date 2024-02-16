<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?> | <?php the_title();?></title>
    <?php wp_head();?>
</head>
<body <?php body_class( 'flex flex-col' )?>>
    <header class="bg-white px-12 py-8 flex justify-between items-center z-50">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/HES_logo.svg" alt="HES logo" class="w-56">
        </a>
        <nav class="hidden xl:flex items-center gap-4">
            <ul class="flex">
                <li class="flex uppercase hover:bg-gray-200 transition-all">
                    <a href="/" class="p-4 gap-4 !text-inherit !no-underline">Home</a></li>
                <li class="flex uppercase hover:bg-gray-200 transition-all">
                    <a href="/about-u" class="p-4 !text-inherit !no-underline gap-4">About us</a>
                </li>
                <li class="flex uppercase hover:bg-gray-200 transition-all">
                    <a href="/surgeons" class="p-4 !text-inherit !no-underline gap-4">Surgeons</a>
                </li>
                <li class="flex uppercase hover:bg-gray-200 transition-all">
                    <a href="/services" class="p-4 !text-inherit !no-underline gap-4">Services</a>
                </li>
                <li class="flex uppercase hover:bg-gray-200 transition-all">
                    <a href="/feedback" class="p-4 !text-inherit !no-underline gap-4">Feedback</a>
                </li>
            </ul>
            <a href="/contact-us" class="btn">Contact us</a>
        </nav>
    </header>
