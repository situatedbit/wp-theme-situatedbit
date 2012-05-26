<?php

add_action('init', 'sb_register_custom_menus');

function sb_register_custom_menus() {
  register_nav_menu('footer_nav_menu', __('SituatedBit Footer Menu'));
}

function sb_footer_menu() {
  echo wp_nav_menu(array('theme_location' => 'footer_nav_menu'));
}

?>
