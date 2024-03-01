
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
            <a href="#" onclick="if (getActiveStyleSheet()=='small') setActiveStyleSheet('big'); else  setActiveStyleSheet('small'); return false;">
            <img src="<?php bloginfo('template_url'); ?>/images/enlarge_text.png" style="float:right;margin-top:15px;" />
            </a>
            <div id="pageTitle">    
                <?php echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );?>
            </div>
    </div>
    <div id="page">
                <?php if(!is_page('thankyou')){?>
                <div id="submenu">
                    <div id="secondary" class="widget-area" role="complementary">
                        <?php if ( is_active_sidebar( 'sidebar-1' ) ) :
                            dynamic_sidebar( 'sidebar-1' ); 
                        endif; ?>	     
                        </div>
                </div>
                <?php }?>

                <?php is_page('thankyou') ? header( "refresh:5;url=https://www.eyesurgeons.com.au/laser-vision-correction/gamechanger/" ) : null; ?>
                
                <div id="content">
                    <?php the_content(); ?>
                </div>
                
    </div>
</div>    

<?php get_footer(); ?>

