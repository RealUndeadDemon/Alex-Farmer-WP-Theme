<?php 
    // BUILD FOOTER
    // Add this to all your php files for added security

        if (!defined('ABSPATH'))
          exit; 
             // Exit if accessed directly. 
             // Ex: Not being called up directly by index.php or some other theme PHP file
         ?>

      <footer>
         <!-- ADD FOOTER MENUS -->
 <nav>
     <?php wp_nav_menu( array( 
         'theme_location' => 'footer-menu', 
         'container_class' => 'footer-nav' 
         ) ); ?>
 </nav>

 <nav>
     <?php wp_nav_menu( array( 
         'theme_location' => 'social-menu', 
         'container_class' => 'footer-social' 
         ) ); ?>
 </nav>


 <p class="copyright">&copy; <?php echo bloginfo('name') ?>, <?php echo date("Y"); ?></p>
 <!-- END ADD FOOTER MENUS -->
    
      </footer>


      <!-- WP_FOOTER CONTENT -->
    <?php wp_footer(); ?>
    <?php  ?>   


    </body>
    </html><?php ?>