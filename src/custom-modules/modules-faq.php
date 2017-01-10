<?php if( 'faq_module' === get_row_layout()):

  if( have_rows('faq_repeater') ): ?>

  <section class="FaqModule">
    <div class="Container">
      <?php while( have_rows('faq_repeater') ): the_row();

        // Repeater Variables
        $faq_question = get_sub_field('faq_question');
        $faq_answer   = get_sub_field('faq_answer');

      ?>
      <div class="FaqRow">

        <?php if( $faq_question ): ?>
        <h3 class="Faq__header"><?php echo $faq_question; ?></h3>
        <?php endif; ?>

        <?php if( $faq_answer ): ?>
        <p class="Faq__text"><?php echo $faq_answer; ?> </p>
        <?php endif; ?>

      </div>
      <?php endwhile; ?>
    </div>
  </section>

  <?php endif; ?>

<?php endif; ?>
