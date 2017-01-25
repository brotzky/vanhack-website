<?php if('testimonial_card' === get_row_layout()):

  $testimonial_header  = get_sub_field('testimonial_header');

?>

  <section class="TestimonialCardModule">
    <div class="Container">
      <div class="SectionHeader SectionHeader--center">
        <hr class="TextRule">
        <div class="Cities__header"><h3><?php echo $testimonial_header; ?></h3></div>
      </div>
      <div class="TestimonialCard__row">
      
      <?php if( have_rows('testimonial_card_repeater') ): ?>

        <?php while( have_rows('testimonial_card_repeater') ): the_row();

          // Repeater Variables
          $testimonial_image  = get_sub_field('testimonial_image');
          $testimonial_quote  = get_sub_field('testimonial_quote');
          $testimonial_name   = get_sub_field('testimonial_name');
          $testimonial_job    = get_sub_field('testimonial_job');

        ?>

        <div class="TestimonialCard__card">
          <div class="TestimonialCard__media-wrap">

          <?php if( $testimonial_image ): ?>
            <img class="TestimonialCard__image" src="<?php echo $testimonial_image['url'] ?>" alt="<?php echo $testimonial_image['alt']; ?>">
          <?php endif; ?>

          </div>
          <div class="TestimonialCard__content">

            <?php if( $testimonial_quote ): ?>
            <p class="TestimonialCard__testimonial"><?php echo $testimonial_quote; ?></p>
            <?php endif; ?>

            <?php if( $testimonial_name ): ?>
            <div class="TestimonialCard__person"><?php echo $testimonial_name; ?></div>
            <?php endif; ?>

            <?php if( $testimonial_job ): ?>
            <div class="TestimonialCard__job"><?php echo $testimonial_job; ?></div>
            <?php endif; ?>

          </div>
        </div>

        <?php endwhile; ?>
      
      <?php endif; ?>

      </div>
    </div>
  </section>

<?php endif; ?>
