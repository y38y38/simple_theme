<?php

define("INDEX_THUMNAIL_WIDTH", 500);

/* 横のサイズが決まっている時に、同じ比率の縦のサイズを求める */
function get_thumbnail_width_and_height($post_id, $thumbnail_max_width) {
	$post_thumbnail_id = get_post_thumbnail_id( $post_id );
	$attachment = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
	$array = array(0,0);//width height
	if($attachment[1] > $thumbnail_max_width) {
		$array[0] = $thumbnail_max_width;
		$array[1] = $attachment[2] * $thumbnail_max_width / $attachment[1];
	} else {
		$array[0] = $attachment[1];
		$array[1] = $attachment[2];
	}
	return $array;
}

//functions.php
function register_my_menus() { 
	register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
	//'「メニューの位置」の識別子' => 'メニューの説明の文字列',
	'main-menu' => 'Main Menu',
	'footer-menu'  => 'Footer Menu',
	) );
}
function my_theme_widgets_init() {
	register_sidebar( array(
	  'id' => 'sidebar-1'
	) );
}

add_action( 'widgets_init', 'my_theme_widgets_init' );
add_action( 'after_setup_theme', 'register_my_menus' );

add_theme_support('post-thumbnails');
?>



