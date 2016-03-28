<?php
function my_rest_prepare_post( $data, $post, $request ) {

  // New function represented in 4.4
	$data->data['thumbnail_url'] = get_the_post_thumbnail_url( $post->ID );

	return $data;

}

add_filter( 'rest_prepare_post', 'my_rest_prepare_post', 10, 3 );

add_theme_support('post-thumbnails');