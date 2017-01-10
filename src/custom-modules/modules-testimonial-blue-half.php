<?php if('testimonial_blue_half' === get_row_layout()):
  
  $quote             = get_sub_field('quote');
  $their_name        = get_sub_field('their_name');
  $their_role        = get_sub_field('their_role');
  $picture_of_them   = get_sub_field('picture_of_them');

?>

  <section class="TestimonialBlueModule">
    <div class="Container--large">
      <div class="TestimonialBlue__split">
        <div class="TestimonialBlue__testimonial">
          <div class="TestimonialBlue__quote">
            <svg class="TestimonialBlue__quote-symbol" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 388.37"><path d="M200.58,0V28.49Q140.11,50.59,105.81,98t-34.3,98.55q0,11.06,3.49,16.28,2.32,3.49,5.23,3.49c1.93,0,4.84-1.35,8.72-4.07q18.59-13.36,47.09-13.37,33.14,0,58.72,27t25.58,64.24q0,39-29.36,68.61t-71.22,29.65q-48.84,0-84.3-40.12T0,240.7Q0,162.21,48.26,100T200.58,0ZM480.23,0V28.49Q419.76,50.59,385.46,98t-34.3,98.55q0,11.06,3.49,16.28,2.32,3.49,5.23,3.49c1.93,0,4.84-1.35,8.72-4.07q18.59-13.36,47.09-13.37,33.14,0,58.72,27T500,290.11q0,39-29.36,68.61t-71.22,29.65q-48.84,0-84.3-40.12T279.65,240.7q0-78.49,48.25-140.7T480.23,0Z" fill="#fff"/></svg>
            <p class="TestimonialBlue__text"><?php echo $quote ?></p>
            <div class="TestimonialBlue__name"><?php echo $their_name ?></div>
            <div class="TestimonialBlue__role"><?php echo $their_role ?></div>
          </div>
        </div>
        <div class="TestimonialBlue__image">
          <img src="<?php echo $picture_of_them['url'] ?>" alt="<?php echo $picture_of_them['alt']; ?>">
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
