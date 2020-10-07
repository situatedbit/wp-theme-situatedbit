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

  if($categories) {
    foreach($categories as $category) {
      $return .= '<a class="post-category" href="'.get_category_link( $category->term_id ).'" title="' .
                 esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) .
                 '">'.$category->cat_name.'</a>'.$separator;
    }
	}

	return trim($return, $separator);
}

function sb_post_footer_nav_item($options) {
  $default_options = [
    'link_prefix' => '',
    'link_suffix' => '',
    'rel' => '',
    'title_prefix' => ''
  ];
  $params = array_merge($default_options, $options);

  $post = $params['post'];
  $link_prefix = $params['link_prefix'];
  $link_suffix = $params['link_suffix'];
  $rel = $params['rel'];
  $title = $params['title'];

  $item = '';

  if (is_a($post, 'WP_Post')) {
    $item .= '<a href="' . get_permalink($post->ID) . '" title="' . $title . '" rel="' . $rel . '">' .
               $link_prefix . get_the_title($post->ID) . $link_suffix .
             '</a>';
  }

  return $item;
}

?>
