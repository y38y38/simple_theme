<?php get_header(); ?>
aaa
<?php
//$catに現在のカテゴリのIDが格納されている
$this_cat_children = get_term_children( $cat, 'category' );//子カテゴリを取得する
//var_dump($this_cat_children);

if($this_cat_children):
	//子カテゴリがある＝おそらく親カテゴリ の場合の処理
	foreach($this_cat_children as $children)://子カテゴリのループ開始
		$children_obj = get_category( $children );//子カテゴリの情報を取得
		$name = $children_obj->cat_name;//カテゴリ名を取得
		$category_link = get_category_link( $children );//カテゴリへのリンクを取得
		if ($children_obj->count > 0 ) {
			echo '<h2><a href="' . get_category_link( $children_obj->term_id ) . '">' . $children_obj->name . "</a></h2>";
			echo "<ul>";
		}
		?>

<?php
		$args = array(
    		'posts_per_page' => -1,//記事を表示する件数　全件の場合-1
    		'category' => $children
    		);
		$myposts = get_posts( $args );//子カテゴリの記事を格納
		foreach ( $myposts as $post ) : 
			setup_postdata( $post );//記事のループ開始 
			$title =  get_the_title($id);
			$p_link = get_the_permalink($id);

			echo '<li class="excerpt-item"><a href="' . $p_link . '" title="' . esc_attr( $title ) . '">';
			echo get_the_post_thumbnail( $id, 'thumbnail' );
			echo '</a>';
			echo '<div class="post-box"><h3><a href="' . $p_link . '">' . $title . '</a></h3>';
			echo '<div class="post-info"><a href="' . $category_link . '">' . $children_obj->name . '</a>｜';
			echo get_the_date( 'y,m,d' );
			echo '</div></div>';
			echo '</li>';
		endforeach; //記事のループ終了
		wp_reset_postdata();?>

<?php
		echo "</ul>";

endforeach;//子カテゴリのループ終了
endif;
?>

<?php get_footer(); ?>

