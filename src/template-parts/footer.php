        </div><? // Close #content ?>
    </div><? // Close #content-wrapper ?>

    <footer role="contentinfo">
      <div class="row">
          <div class="twelve columns footer">
              <?php
                  if (has_nav_menu('footer')) {
                      wp_nav_menu( array(
                          'theme_location' => 'footer',
                          'container_class' => 'footer-menu'
                      ));
                  }
              ?>
          </div>
      </div>
    </footer>
</div> <? // Close #page ?>
<?php
    // Print scripts
    wp_footer();
?>

</body>
</html>
