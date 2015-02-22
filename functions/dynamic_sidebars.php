<?php
  if ( function_exists('register_sidebar') ) {
    register_sidebar( array('name' => 'Hidden Scripts') );
    register_sidebar( array('name' => 'Footer Bio') );
  }

  function sb_hidden_scripts_sidebar() {
    if( !dynamic_sidebar('Hidden Scripts') ) {
      echo '';
    } 
  }

  function sb_footer_bio_sidebar() {
    if( !dynamic_sidebar('Footer Bio') ) {
      echo '';
    } 
  }
?>
