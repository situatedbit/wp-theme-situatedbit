<!-- begin: footer -->
    </div> <!-- content -->
    <footer id="footer">
      <div class="footer-wrapper constrained-layout">
        <?php sb_footer_menu(); ?>
        <div id="footer-bio-wrapper">
          <ul id="footer-bio">
            <?php sb_footer_bio_sidebar(); ?>
          </ul>
          <img id="footer-portrait" src="<?php echo get_template_directory_uri() . '/images/matt-schaefer-portrait.jpg'; ?>">

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
