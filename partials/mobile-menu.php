<div id="mobile-menu" class="mobile-menu">
    <?php
        $defaults = array('theme_location' => 'header','menu_class'=> '','items_wrap' => '<ul id="top-menu">%3$s</ul>');
        wp_nav_menu( $defaults ); 
    ?>
</div>