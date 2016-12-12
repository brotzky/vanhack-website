<?php
/**
 * General Wordpress Cleanup
 */
  // hide admin bar for admin users
  add_filter('show_admin_bar', '__return_false');

  // removing unnecessary meta tags from WordPress header
  remove_action( 'wp_head', 'wp_generator' );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'rsd_link' );

  // remove extra <p>
  // remove_filter( 'the_content', 'wpautop' );
  // remove_filter( 'the_excerpt', 'wpautop' );

  // disable HTML in WordPress comments
  add_filter( 'pre_comment_content', 'esc_html' );

  // limit the post revision feature to 3 posts
  // define( 'WP_POST_REVISIONS', 3);

  // stop WordPress from guessing URLs
  add_filter('redirect_canonical', 'stop_guessing');
  function stop_guessing($url) {
   if (is_404()) {
     return false;
   }
   return $url;
  }

  // disable file editing inside WordPress
  // define( 'DISALLOW_FILE_EDIT', true );

  // remove the WordPress emojis
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );


  // Removes Wordpress fixed width and height insertion for images
  /**
   * This is a modification of image_downsize() function in wp-includes/media.php
   * we will remove all the width and height references, therefore the img tag
   * will not add width and height attributes to the image sent to the editor.
   *
   * @param bool false No height and width references.
   * @param int $id Attachment ID for image.
   * @param array|string $size Optional, default is 'medium'. Size of image, either array or string.
   * @return bool|array False on failure, array on success.
   */
  function myprefix_image_downsize( $value = false, $id, $size ) {
      if ( !wp_attachment_is_image($id) )
          return false;

      $img_url = wp_get_attachment_url($id);
      $is_intermediate = false;
      $img_url_basename = wp_basename($img_url);

      // try for a new style intermediate size
      if ( $intermediate = image_get_intermediate_size($id, $size) ) {
          $img_url = str_replace($img_url_basename, $intermediate['file'], $img_url);
          $is_intermediate = true;
      }
      elseif ( $size == 'thumbnail' ) {
          // Fall back to the old thumbnail
          if ( ($thumb_file = wp_get_attachment_thumb_file($id)) && $info = getimagesize($thumb_file) ) {
              $img_url = str_replace($img_url_basename, wp_basename($thumb_file), $img_url);
              $is_intermediate = true;
          }
      }

      // We have the actual image size, but might need to further constrain it if content_width is narrower
      if ( $img_url) {
          return array( $img_url, 0, 0, $is_intermediate );
      }
      return false;
  }

  /* Remove the height and width refernces from the image_downsize function.
   * We have added a new param, so the priority is 1, as always, and the new
   * params are 3.
   */
  add_filter( 'image_downsize', 'myprefix_image_downsize', 1, 3 );


  // Removes Wordpress jQuery Migrate script that comes with Wordpress be default
  add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

  function dequeue_jquery_migrate( &$scripts){
    if(!is_admin()){
      $scripts->remove( 'jquery');
      $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
    }
  }

?>
