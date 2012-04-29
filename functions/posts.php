<?php

function sb_posted_on() {
	printf('<a href="%1$s" rel="bookmark"><time datetime="%2$s" pubdate>%3$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);
}

?>
