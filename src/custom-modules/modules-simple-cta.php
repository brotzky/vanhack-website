<?php if('simple_cta' === get_row_layout() ):

$text         = get_sub_field('text');
$cta_text     = get_sub_field('cta_text');
$cta_link     = get_sub_field('cta_link');

?>

<section class="JobsAbroadModule">
  <div class="Container">
    <div class="JobsAbroadContainer">
      <div class="JobsAbroad__text">
        <?php echo $text; ?>
      </div>
      <div class="JobsAbroad__cta">
        <a href="<?php echo $cta_link; ?>" class="Button"><?php echo $cta_text; ?></a>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>
