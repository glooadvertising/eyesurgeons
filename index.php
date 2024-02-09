
<?php get_header(); ?>

<div id="feature">
	<?php 
    	echo '<img src="'. get_option("home") .'/wp-content/themes/eyesurgeons/images/default-featured-image.jpg">';
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
            
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                 
						<?php the_content(); ?>
                     
                 <?php endwhile; else: ?>
                     
                        <h2>Woops...</h2>
                        <p>Sorry, no posts we're found.</p>
                         
                 <?php endif; ?>
                 
            </div>
            
  </div>
          
</div>    

<?php get_footer(); ?>

