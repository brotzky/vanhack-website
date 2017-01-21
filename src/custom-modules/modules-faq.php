<?php if( 'faq_module' === get_row_layout()):

  $i = 0;

  if( have_rows('faq_repeater') ): ?>

  <section class="FaqModule">
    <div class="Container">
    <div class="SectionHeader SectionHeader--center">
      <hr class="TextRule">
      <div class="HalfTextHalfImage__header"><h3>Frequently Asked Questions</h3></div>
    </div>
      <div class="Faq__content">
        
      <?php while( have_rows('faq_repeater') ): the_row();

        // Repeater Variables
        $faq_question = get_sub_field('faq_question');
        $faq_answer   = get_sub_field('faq_answer');

      ?>

      <?php if( $i % 2 == 0 or $i == 0 ): ?>
        <div class="Faq__row">
      <?php  endif; ?>

      <div class="Faq__answer">

        <?php if( $faq_question ): ?>
        <h3 class="Faq__header"><?php echo $faq_question; ?></h3>
        <?php endif; ?>

        <?php if( $faq_answer ): ?>
        <p class="Faq__text"><?php echo $faq_answer; ?> </p>
        <?php endif; ?>

      </div>

      <?php if( $i % 2 == 1): ?>
        </div>
      <?php endif; ?>

      <?php
        $i++;
        endwhile; ?>
      </div>
      
    </div>
  </section>

  <?php endif; ?>

<?php endif; ?>

