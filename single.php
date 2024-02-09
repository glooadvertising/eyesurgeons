
<?php get_header(); ?>

<?php the_post(); ?>

<div id="feature">
	<?php 
    if ( has_post_thumbnail() ) {
        the_post_thumbnail('full');
    } else {
        echo '<img src="'. get_option("home") .'/wp-content/themes/eyesurgeons/images/default-featured-image.jpg">';
    }
    ?>
</div>

<div id="pageContainer">

  <div id="toolbar">
        <img src="<?php bloginfo('template_url'); ?>/images/enlarge_text.png" style="margin-top:20px;float:right;" />
  </div>

  
  <div id="page">
          
            <div id="submenu">
                  <div id="secondary" class="widget-area" role="complementary">
                    <?php if ( is_active_sidebar( 'sidebar-1' ) ) :
                        dynamic_sidebar( 'sidebar-1' ); 
                    endif; ?>	     
                    </div>
              </div>
              
            <div id="content">
				  <?php the_content(); ?>
            </div>
            
  </div>
          
</div>    

<?php get_footer(); ?>

