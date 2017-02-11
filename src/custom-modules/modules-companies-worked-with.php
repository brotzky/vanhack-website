<?php if('companies_worked_with' === get_row_layout() ):

  $title   = get_sub_field('title');

?>

<section class="CompaniesModule">
  <div class="Container">
    <div class="SectionHeader SectionHeader--center">
      <hr class="TextRule">
      <h3><?php echo $title; ?></h3>
    </div>
    <div class="Companies__content">
      <img src="/wp-content/themes/vanhack/img/modules/companies-worked-with/companies-worked-with.jpg" alt="Companies VanHack has worekd with">
    </div>
  </div>
</section>

<?php endif; ?>
