<?php if( 'full_width_module' === get_row_layout() ):
  $background_type                 = get_sub_field('$background_type');         // background url test
  $background_image                = get_sub_field('background_image');         // background url test
  $solid_color                     = get_sub_field('solid_color');        // background solid color
  $background_height               = get_sub_field('background_height');  // background height
  $padding                         = get_sub_field('padding');
  $margin_bottom                   = get_sub_field('margin_bottom');
  $horizontal_rule                 = get_sub_field('horizontal_rule');
  $content_width                   = get_sub_field('content_width');
  $add_title                       = get_sub_field('add_title');
  $title                           = get_sub_field('title');
  $title_html_tag                  = get_sub_field('title_html_tag');
  $title_font_size                 = get_sub_field('title_font_size');
  $subtitle                        = get_sub_field('subtitle');
  $sub_title                       = get_sub_field('sub_title');
  $sub_title_html_tag              = get_sub_field('sub_title_html_tag');
  $sub_title_font_size             = get_sub_field('sub_title_font_size');
  $text_position                   = get_sub_field('text_position');
  $text_color                      = get_sub_field('text_color');
  $call_to_action                  = get_sub_field('call_to_action');
  $call_to_action_text             = get_sub_field('call_to_action_text');
  $call_to_action_url              = get_sub_field('call_to_action_url');
  $call_to_action_type             = get_sub_field('call_to_action_type');
  $call_to_action_2                = get_sub_field('call_to_action_2');
  $call_to_action_2_text           = get_sub_field('call_to_action_2_text');
  $call_to_action_2_url            = get_sub_field('call_to_action_2_url');
  $call_to_action_2_type           = get_sub_field('call_to_action_2_type');

?>
  <?php if( 'color' === $background_type ): ?>

    <div class="FullWidth <?php echo $background_height . ' '. $solid_color . ' ' . $padding . ' ' . $margin_bottom; ?>">
      <div class="Container">
          <div class="FullWidth__wrapper <?php echo $text_position . ' ' . $content_width; ?>">
          <?php if("yes" === $horizontal_rule): ?>
            <hr>
          <?php endif; ?>
          <?php if ($add_title) : ?>
            <<?php echo $title_html_tag; ?> class="<?php echo $text_color . ' ' . $title_font_size; ?>"><?php echo $title; ?></<?php echo $title_html_tag; ?>>
          <?php endif; ?>

            <?php if($subtitle):?>
              <<?php echo $title_html_tag;?> class="<?php echo $text_color . ' ' . $title_font_size; ?>">
              <?php echo $sub_title; ?>
              </<?php echo  $title_html_tag;?>>
            <?php endif; ?>

            <?php if($call_to_action): ?>
              <a class="Button <?php echo $call_to_action_type; ?>" href="<?php echo $call_to_action_url; ?>"><?php echo $call_to_action_text; ?></a>
            <?php endif; ?>
          </div>

          <?php if ($content_width === 'six' && $text_position === 'right' && $foreground['url']): ?>
            <div class="full-width-foreground six">
              <img src="<?php echo $foreground['url'] ?>" alt="<?php echo $foreground['alt'] ?>">
            </div>
          <?php endif ?>
      </div>
    </div>

  <?php else:?>
    <div class="FullWidth <?php echo $background_height . ' ' . $solid_color . ' ' . $padding . ' ' . $margin_bottom; ?>" style="background-image:url('<?php echo $background_image; ?>')">
      <div class="Container">
          <div class="FullWidth__wrapper <?php echo $text_position . ' ' . $content_width; ?>">
            <div class="FullWidth__content">
            <?php if("yes" === $horizontal_rule): ?>
              <hr class="TextRule<?php if ($text_position === 'FlexCenter') echo "--center"; ?><?php if($text_position === "FlexRight") echo "--right"; ?>" />
            <?php endif; ?>

            <?php if ($add_title) : ?>
              <<?php echo $title_html_tag; ?> class="<?php echo $text_color . ' ' . $title_font_size; ?>"><?php echo $title; ?></<?php echo $title_html_tag; ?>>
            <?php endif; ?>

            <?php if($sub_title):?>
              <<?php echo $sub_title_html_tag;?> class="<?php echo $text_color . ' ' . $sub_title_font_size; ?>">
              <?php echo $sub_title; ?>
              </<?php echo  $sub_title_html_tag;?>>
            <?php endif; ?>

            <div class="FullWidth__cta">
              <?php if($call_to_action): ?>
                  <a class="Button<?php echo $call_to_action_type; ?>" href="<?php echo $call_to_action_url; ?>"><?php echo $call_to_action_text; ?></a>
              <?php endif; ?>

              <?php if($call_to_action_2): ?>
                  <a class="Button<?php echo $call_to_action_2_type; ?>" href="<?php echo $call_to_action_2_url; ?>"><?php echo $call_to_action_2_text; ?></a>
              <?php endif; ?>
            </div>

            </div>
          </div>

          <?php if ($content_width === 'six' && $text_position === 'left' && $foreground['url']): ?>
            <div class="full-width-foreground six">
              <img src="<?php echo $foreground['url'] ?>" alt="<?php echo $foreground['alt'] ?>">
            </div>
          <?php endif ?>
      </div>
    </div>
  <?php endif;?>
<?php endif;?>