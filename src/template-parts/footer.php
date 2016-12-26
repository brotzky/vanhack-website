    </div><? // Close .SiteContent ?>

    <footer class="NavigationFooter" role="footer">
      <div class="Container">
          <?php
              if (has_nav_menu('footer')) {
                  wp_nav_menu( array(
                      'theme_location' => 'footer',
                      'container_class' => 'NavigationFooter'
                  ));
              }
          ?>
      </div>
    </footer>
</div> <? // Close #page ?>
<?php
    // Print scripts
    wp_footer();
?>

</body>
</html>
