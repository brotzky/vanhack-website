<?php if('html_module' === get_row_layout() ):

  $markup = get_sub_field('markup');

?>

<section class="HtmlModule">
  <div class="Container">
    <?php echo $markup; ?>
  </div>
</section>

<?php endif; ?>
