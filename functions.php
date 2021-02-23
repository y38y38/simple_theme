<?php


define("INDEX_THUMNAIL_WIDTH", 520);


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
	  'id' => 'sidebar-1',
	) );

	register_sidebar( array(
		'id' => 'sidebar-2',
	  ) );
  
}

/*title とメニューを表示用の関数*/
function my_title_and_menu() {
	echo '<div class="title_area">';
	echo '	<div class="title_text_area">';
	echo '<h1 ><a href="' .  get_home_url() . '">' . get_bloginfo( 'name' ) . '</a></h1>';
	echo '		<span class="title_description">';
	echo 				get_bloginfo( 'description' );
	echo '		</span>';
	echo '	</div>';
	echo ' </div>';
	echo '<div class="menu_area">';
	echo '	<div class="menu_text_area">';
	echo 			wp_nav_menu( array( 
					'theme_location' => 'main-menu', 
				)); 
	echo '	</div>';
	echo '</div>';
}


function my_loop_produce_post($is_short_text) {
	if(have_posts()): 
		while(have_posts()):
echo		'<div class="post_produce">'; 
				the_post();
echo			'<div class="date_item">' . get_the_date('Y/m/d') . '</div>';
echo			'<div class="post_title_item">';
echo				'<h2><a href="' . get_the_permalink() . '">' .  get_the_title() . '</a></h2>';
echo			'</div>';
echo			'<div class="post_produce_category">';
					$category=get_the_category();
					foreach($category as $cate) {
echo					'<a href="' . get_category_link( $cate->term_id ) . '">' . $cate->cat_name . '</a>';
echo					'&nbsp;&nbsp;&nbsp;';
					}
echo			'</div>';
echo			'</br>';
echo			'<div class="post_thumbnail">';
					the_post_thumbnail();
echo			'</div>';
				if ($is_short_text == true ) {
echo				'<div class="post_text">';
echo				'<a href="' . get_the_permalink() . '">' . my_post_substr() . '</a>';
echo				'...';
echo				'</div>';
echo				'<div class="post_submit">';
echo					'<a href="' . get_the_permalink() . '"> READ MORE</a>';
echo				'</div>';
				} else {
echo				'<div class="post_content_text">';
						the_content();
echo				'</div>';
				}
echo		'</div>';
		endwhile;
	endif;

}


/* index用のテキスト抜粋用の関数*/
define("POST_TEXT_SIZE", 70);
function my_post_substr() {
	$post_text = get_the_excerpt();
	return mb_substr($post_text ,0, POST_TEXT_SIZE);
}


add_action( 'widgets_init', 'my_theme_widgets_init' );

add_action( 'after_setup_theme', 'register_my_menus' );

add_theme_support('post-thumbnails');
?>



