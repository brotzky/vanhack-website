<?php
/**
 * This file containes the Blog Index
 */

/* Include the header meta */
include(TEMPLATEPATH.'/template-parts/header-meta.php');

/* Include the header main */
include(TEMPLATEPATH.'/template-parts/header-main.php');
?>

<div class="blog-content-container">
  <?php
    // The Loop
    if(have_posts()) :
      // Execute while have posts. Do the posts
      while (have_posts()) : the_post(); ?>
    <article>
      <div class="blog-content" onclick="location.href='<?php the_permalink();?>';">
        <div class="blog-wrapper">
          <h2><a href='<?php the_permalink(); ?>'><?php the_title();?></a></h2>
          <div class="post-date"><?php the_time('F j, Y'); ?></div>
        </div>
      </div>
    </article>
    <?php endwhile; else : endif; ?>
</div>


<?php wp_reset_postdata(); // reset the query ?>

 <?php /* Include the footer */
 include(TEMPLATEPATH.'/template-parts/footer.php'); ?>
