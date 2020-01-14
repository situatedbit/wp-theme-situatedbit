<?php

function sb_posted_on() {
	printf('<time datetime="%1$s" pubdate>%2$s</time>',
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);
}

function sb_categories($post_id) {
  $categories = get_the_category($post_id);
  $separator = '|';
  $return = '';

  if($categories){
    foreach($categories as $category) {
      $return .= '<a class="post-category" href="'.get_category_link( $category->term_id ).'" title="' .
                 esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) .
                '">'.$category->cat_name.'</a>'.$separator;
    }
  }

  return trim($return, $separator);
}

?>
