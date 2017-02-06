<?php
/**
 * This file containes the Blog Index
 */

/* Include the header meta */
include(TEMPLATEPATH.'/template-parts/header-meta.php');

/* Include the header main */
include(TEMPLATEPATH.'/template-parts/header-main.php');
?>

<section class="Blog">
  <div class="Blog__posts Container">
  <?php
    // The Loop
    if(have_posts()) :
      // Execute while have posts. Do the posts
      while (have_posts()) : the_post(); ?>
    <article class="Blog__post">
      <div class="Blog__content" onclick="location.href='<?php the_permalink();?>';">
        <div class="Blog__media-wrapper">
          <?php echo the_post_thumbnail('medium_large'); ?>
        </div>
        <div class="Blog__body">
          <h2 class="Blog__header"><?php the_title();?></h2>
          <div class="Blog__date"><?php the_time('F j, Y'); ?></div>
        </div>
      </div>
    </article>
    <?php endwhile; else : endif; ?>
  </div>
  <div class="Container">
    <?php numeric_posts_nav(); ?>
  </div>
</section>


<?php wp_reset_postdata(); // reset the query ?>

 <?php /* Include the footer */
 include(TEMPLATEPATH.'/template-parts/footer.php'); ?>
