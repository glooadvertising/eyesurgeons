<div id="mobile-menu" class="bg-blue-dark flex flex-col xl:hidden fixed w-75 sm:w-auto h-full z-50 px-8 py-16 -translate-x-full transition-all">
    <?php
        $defaults = array('theme_location' => 'header','menu_class'=> 'mobile-menu','items_wrap' => '<ul id="top-menu">%3$s</ul>');
        wp_nav_menu( $defaults ); 
    ?>
</div>