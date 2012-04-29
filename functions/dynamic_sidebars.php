<?php
  if ( function_exists('register_sidebar') ) {
    register_sidebar( array('name' => 'Hidden Scripts') );
  }

  function sb_hidden_scripts_sidebar() {
    if( !dynamic_sidebar('Hidden Scripts') ) {
      echo '';
    } 
  }
?>
