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
    'thumbnail_size' => 'thumbnail',
    'link_prefix' => '',
    'link_suffix' => '',
    'rel' => '',
    'title_prefix' => ''
  ];
  $params = array_merge($default_options, $options);

  $post = $params['post'];
  $thumbnail_size = $params['thumbnail_size'];
  $link_prefix = $params['link_prefix'];
  $link_suffix = $params['link_suffix'];
  $rel = $params['rel'];
  $title = $params['title'];

  $item = '';

  if (is_a($post, 'WP_Post')) {
    $post_thumbnail = has_post_thumbnail($post) ? get_the_post_thumbnail($post, $thumbnail_size) : '';

    $item .= '<a href="' . get_permalink($post->ID) . '" title="' . $title . '" rel="' . $rel . '">' .
               $post_thumbnail .
               '<span class="prefix">' . $link_prefix . '</span>' .
               '<span class="title">' . get_the_title($post->ID) . '</span>' .
               '<span class="suffix">' . $link_suffix . '</span>' .
             '</a>';
  }

  return $item;
}

?>
