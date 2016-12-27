<?php if('half_text_half_image' === get_row_layout() ): 

  $header      = get_sub_field('header');
  $text        = get_sub_field('text');
  $cta_text    = get_sub_field('cta_text');
  $cta_link    = get_sub_field('cta_link');
  $image       = get_sub_field('image');

?>

<section class="HalfTextHalfImageModule">
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
</section>

<?php endif; ?>
