<?php

add_filter('img_caption_shortcode', 'sb_img_caption_shortcode', 10, 3);

/* 
  Mostly lifted from https://codex.wordpress.org/Plugin_API/Filter_Reference/img_caption_shortcode

  Wordpress includes an inline width property around the caption.
  This makes no sense to me. I'm getting rid of it.
*/
function sb_img_caption_shortcode($empty, $attr, $content) {
	$attr = shortcode_atts(array(
		'id'      => '',
		'align'   => 'alignnone',
		'width'   => '',
		'caption' => ''
	), $attr);

	if (1 > (int) $attr['width'] || empty( $attr['caption'] )) {
		return '';
	}

	if ( $attr['id'] ) {
		$attr['id'] = 'id="' . esc_attr( $attr['id'] ) . '" ';
	}

	return '<div ' . $attr['id']
	  . 'class="wp-caption ' . esc_attr( $attr['align'] ) . '"> '
	  . do_shortcode( $content )
	  . '<p class="wp-caption-text">' . $attr['caption'] . '</p>'
	  . '</div>';
}
?>
