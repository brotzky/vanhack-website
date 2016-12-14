<?php if( 'html_module' === get_row_layout() ):

  $markup = get_sub_field('markup');

?>

<div class="html-module">
  <?php echo $markup; ?>
</div>

<!-- END html_module -->
<?php endif; ?>
