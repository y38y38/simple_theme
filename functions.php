<?php

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



