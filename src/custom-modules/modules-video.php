<?php if('video_module' === get_row_layout() ):

$video_link         = get_sub_field('video_link');
$video_screenshot   = get_sub_field('video_screenshot');

?>

<section class="VideoModule">
  <div class="Container">
  <div class="VideoPlayButton"></div>
    <div class="VideoContainer">
      <iframe
        class="VideoVimeo"
        src="<?php echo $video_link; ?>?byline=0&portrait=0"
        width="100%"
        height="100%"
        frameborder="0"
        webkitallowfullscreen
        mozallowfullscreen
        allowfullscreen
      >
      </iframe>
    </div>
  </div>
</section>

<?php endif; ?>
