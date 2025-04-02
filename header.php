<?php
    // Add this to all your php files for added security
    if (!defined('ABSPATH'))
        exit; 
        // Exit if accessed directly. 
        // Ex: Not being called up directly by index.php or some other theme PHP file
    ?>
    
    <!-- ADD HEADER.PHP CODE -->
    <!DOCTYPE html>
        <!-- ADD HTML LANGUAGE ATTRIBUTES -->
        <html <?php language_attributes(); ?>>


    <head>
        <!-- ADD CHARACTER SET -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php // the viewport metatag is what makes a design responsive ?>
        
        <!-- WP_HEAD GET DYNAMIC HEADER CONTENT -->
        <?php wp_head(); ?>

    </head>

    <!-- CUSTOMIZE BODY CLASS & OPEN -->
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>    

  
<header>
<!-- ADD CUSTOM LOGO -->
<?php 
    // Enables Wordpress custom logo
    // See: https://developer.wordpress.org/reference%2Ffunctions%2Fadd_theme_support%2F/#custom-logo
    
        if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
        }
    ?>
   <!-- BRANDING & DESCRIPTION -->

    <div class="branding">
        <a href="<?php echo esc_url(home_url()); ?>">
        <?php bloginfo('name'); ?>
        </a>
    </div>
    
    <div class="description">
            <?php bloginfo('description'); ?>
            <?php // This is the WP site tagline, not the meta description tag ?>
    </div>

        <!-- ADD SEARCH FORM -->
         <?php get_search_form(); ?>

        <nav>
                <!--  ADD THE MENU TO THE PAGE -->
    <?php 
        wp_nav_menu(array(
            'menu_class'	  	=> 'primary-menu',  // adds: class="primary-menu"
            'theme_location' 	=> 'header-menu',   // is controlled as the "header menu" in the backend
            'menu_id'	    	=> 'menu',          // adds: id="menu"
            'container'         => 'div',           // menu is inside a div
        ));
    ?>
        </nav>
    </header>
    <?php  ?>