<?php
/**
 * Template Name: Master Page
 */
/* Include the header meta */
include(TEMPLATEPATH.'/template-parts/header-meta.php');

/* Include the header main */
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
// Loading landing page header for all free trial pages
include(TEMPLATEPATH.'/template-parts/header-main.php');

  // check if the flexible content field has rows of data
  if( have_rows('custom_modules_master') ):

    // loop through the rows of data
    while ( have_rows('custom_modules_master') ) : the_row();

      include(TEMPLATEPATH.'/custom-modules/modules-master.php');

    endwhile;

    else :

      // no layouts found

    endif;

    wp_reset_postdata();

/* Include the footer */
include(TEMPLATEPATH.'/template-parts/footer.php');
