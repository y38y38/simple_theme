<?php



function get_thumbnail_width($post_id) {
	$post_thumbnail_id = get_post_thumbnail_id( $post_id );
	$attachment = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
	$width=$attachment[1];
	return $witdh;
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



