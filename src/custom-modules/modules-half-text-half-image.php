<?php if('half_text_half_image' === get_row_layout() ): 

  $bg_color    = get_sub_field('bg_color');
  $header      = get_sub_field('header');
  $text        = get_sub_field('text');
  $cta_text    = get_sub_field('cta_text');
  $cta_link    = get_sub_field('cta_link');
  $image       = get_sub_field('image');
  $image_side  = get_sub_field('image_side');
?>

    <section class="HalfTextHalfImageModule <?php if($bg_color === 'light_blue') : echo 'vanhack-bg'; endif; ?>">
    <?php if($image_side === 'left' ): ?>
      <div class="Container">
        <div class="HalfTextHalfImage">
          <div class="HalfTextHalfImage__image">
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>">
          </div>
          <div class="HalfTextHalfImage__content">
            <hr class="TextRule">
            <div class="HalfTextHalfImage__header"><h3><?php echo $header; ?></h3></div>
            <div class="HalfTextHalfImage__text"><p><?php echo $text; ?></p></div>
            <div class="HalfTextHalfImage__cta">
              <a class="ButtonSecondary" href="<?php echo $cta_link ?>"><?php echo $cta_text ?></a>
            </div>
          </div>
        </div>
      </div>
  <?php endif; ?>

  <?php if($image_side === 'right' ): ?>
    <div class="Container">
      <div class="HalfTextHalfImage">
        <div class="HalfTextHalfImage__content">
          <hr class="TextRule">
          <div class="HalfTextHalfImage__header"><h3><?php echo $header; ?></h3></div>
          <div class="HalfTextHalfImage__text"><p><?php echo $text; ?></p></div>
          <div class="HalfTextHalfImage__cta">
            <a class="ButtonSecondary" href="<?php echo $cta_link ?>"><?php echo $cta_text ?></a>
          </div>
        </div>
        <div class="HalfTextHalfImage__image">
          <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>">
        </div>
      </div>
    </div>
  <?php endif; ?>
  </section>

<?php endif; ?>
