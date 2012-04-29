<!-- begin: footer -->
    </div> <!-- main --> 
    <nav id="footer">
    </nav> <!-- #footer -->
  </div> <!-- #content -->
  <script src="<?php echo get_stylesheet_directory_uri() ?>/js/pages/application.js"></script>
  <?php
    global $page_js;
    
    if(!isset($page_js)) $page_js = array();

    foreach ($page_js as $js) {
?><script src="<?php echo $js; ?>"></script><?php
    }
  ?>
  <div id="hidden-scripts">
    <ul>
        <?php sb_hidden_scripts_sidebar(); ?>
    </ul>
  </div>
</body>
</html>
