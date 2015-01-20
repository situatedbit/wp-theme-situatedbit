<!-- begin: footer -->
    </div> <!-- content -->
    <footer id="footer">
      <a id="menu-anchor" name="menu">Menu</a>
      <?php sb_footer_menu(); ?>
    </footer> <!-- #footer -->
  </section> <!-- #main -->
  <script src="<?php echo get_stylesheet_directory_uri() ?>/js/pages/application.js"></script>
  <?php
    global $page_js;

    if(!isset($page_js)) $page_js = array();

    foreach ($page_js as $js) {
?><script src="<?php echo $js; ?>"></script><?php
    }
  ?>
  <div id="hidden-scripts">
    <?php sb_hidden_scripts_sidebar(); ?>
  </div>
</body>
</html>
