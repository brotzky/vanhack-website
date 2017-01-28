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

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="BlogPost-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="BlogPost__content">
        <div class="BlogPost__media-wrapper"><?php the_post_thumbnail();?></div>
        <div class="BlogPost__body">
          <h1 class="BlogPost__title"><?php the_title(); ?></h1>
          <div class="BlogPost__date"><?php the_time('F j, Y'); ?></div>
          <div class="BlogPost__text"><?php the_content(); ?></div>
        </div>
      </div>
    </article>

    <div class="BlogPost__nav">

      <?php if(strlen(get_previous_post()->post_title) > 0): ?>
        <div class="BlogPost__nav-link">
          <?php previous_post_link('<div class="BlogPost__nav-href">%link</div>', ''); ?>
          <div class="BlogPost__nav-previous">Previous</div>
          <?php previous_post_link('%link'); ?>
        </div>
      <?php endif; ?>

      <?php if(strlen(get_next_post()->post_title) > 0): ?>
        <div class="BlogPost__nav-link">
          <?php next_post_link('<div class="BlogPost__nav-href">%link</div>', ''); ?>
          <div class="BlogPost__nav-next">Next</div>
          <?php next_post_link('%link'); ?>
        </div>
      <?php endif; ?>

    </div>
        
    <div class="BlogPost__home-container">
      <span class="ButtonSecondary"><a href="/blog"> Blog Home</a></span>
    </div>

  <?php endwhile; ?>

  <?php else: ?>

    <article>
      <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
    </article>

  <?php endif; ?>

  </section>


<?php wp_reset_postdata(); // reset the query ?>

 <?php /* Include the footer */
 include(TEMPLATEPATH.'/template-parts/footer.php'); ?>
