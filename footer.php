    <div id="footerContainer">
    
          <footer id="footer">
          
            <div class="left-foottext">
                  <h2 class="footh2">T: <span class="AVANSERnumber-A">(03)6210 6000</span></h2>
                  <h4 class="footh4">HOBART - 182 Argyle Street</h4>
				  <h4 class="footh4">KINGSTON - Shop 93, Channel Court</h4>
                  <h4 class="footh4">ROSNY PARK - Level 1, 11 Bayfield Street</h4>
				<h4 class="footh4">GLENORCHY - 3 / 370, Main Road</h4>
            </div>
            
             <div class="sidebar-footer3">
				<!--  <img src="<?php bloginfo('template_url'); ?>/images/TasmanianCataractClinic-whiteOnBlue.gif" width="121" height="122" /> -->
				  <img src="https://www.eyesurgeons.com.au/wp-content/uploads/2022/06/QIP_ACC.png" width="200"> 
				  <img src="<?php bloginfo('template_url'); ?>/images/HESfooterLogo.gif" width="13" height="121" border="0" />
            </div>
            
            <div class="sidebar-footer1">
				  <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                  <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-2' ); ?>
                  </div>
                  <?php endif; ?>	
            </div>
            
            <div class="sidebar-footer2">
				  <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
                  <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-3' ); ?>
                  </div>
                  <?php endif; ?>	
            </div>
            
           <br clear="all" />
          
          </footer> <!--end footer-->
          
    </div> <!--end footer container-->
    
</div> <!--end main container-->

<?php wp_footer(); ?>

</body>
</html>
