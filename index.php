<?php
    // Add this to all your php files for added security

    if (!defined('ABSPATH'))
        exit; 
        // Exit if accessed directly. 
        // Ex: Not being called up directly by index.php or some other theme PHP file
    
   //  START WORDPRESS GET_HEADER 
    ?>
    <?php get_header(); ?>
    <?php ?>

  <!-- START H1 AND WORDPRESS LOOP -->
  <h1><?php the_title(); // AUTOMATICALLY ADDS THE PAGE TITLE ?></h1>
  
 <!-- ADD FLEX CONTAINER -->
<div class="flex-container">
  
  <main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php // NOTE IDs AND CLASSES ARE AUTOMATICALLY ADDED HERE ?>


  <!-- START WORDPRESS LOOP -->

      <?php 
          if ( have_posts() ) : 
          while ( have_posts() ) : the_post();
              the_content();
          endwhile;
      else :
          _e( 'Sorry, no posts matched your criteria.', 'alex-farmer' );
      endif;
      ?>

      <?php wp_link_pages(); ?>

  <!-- END WORDPRESS LOOP -->    
  </main>

 <!-- ADD SIDEBAR -->
 <?php get_sidebar(); ?>

 <!-- END FLEX CONTAINER -->
</div>

<!-- ENABLE FOOTER -->
<?php get_footer(); ?>
        <?php  ?>   


