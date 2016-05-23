<?php

function sb_page_title() {
  wp_title( '|', true, 'right' );
  bloginfo( 'name' );
}

function sb_page_object_title() {
  echo get_the_title();
}

function sb_page_meta_description() {
  if(is_singular()) {
    if(has_excerpt()) {
      echo wp_strip_all_tags(get_the_excerpt());
    }
  }
  else {
    bloginfo('description');
  }
}

?>
