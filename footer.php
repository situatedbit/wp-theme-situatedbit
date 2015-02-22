<!-- begin: footer -->
    </div> <!-- content -->
    <footer id="footer">
      <div class="footer-wrapper constrained-layout">
        <?php sb_footer_menu(); ?>
        <div id="footer-bio-wrapper">
          <p id="footer-bio">
            <?php sb_footer_bio_sidebar(); ?>
          </p>
          <img id="footer-portrait" src="<?php echo get_template_directory_uri() . '/images/matt-schaefer-portrait.jpg'; ?>" alt="Matt Schaefer portrait at the Gamble House, Pasadena, Calif.">

        </div>
        <p class="copyright">&copy; Matt Schaefer</p>
      </div>
    </footer> <!-- #footer -->
  </section> <!-- #main -->
  <div id="hidden-scripts">
    <?php sb_hidden_scripts_sidebar(); ?>
  </div>
</body>
</html>
