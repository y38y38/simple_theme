<?php 
	if(have_posts()): 
		while(have_posts()):
?>
		<div class="post_produce"> 
			<?php
				the_post();
				the_date('Y/m/d', '<div class="date_item">', '</div>');
			?>
				<div class="post_title_item">
					<h2><a href="<?php the_permalink() ?>"> <?php the_title() ?></a></h2>
				</div>
				<div class="post_produce_category">
				<?php
					$category=get_the_category();
					foreach($category as $cate) {
						echo '<a href="' . get_category_link( $cate->term_id ) . '">' . $cate->cat_name . '</a>';
						echo '&nbsp;&nbsp;&nbsp;';
					}
				?>
				</div>
			</br>
			
			<div class="post_thumbnail">
				<?php
					the_post_thumbnail();
				?>
			</div>
			<div class="post_text">
				<?php  //echo get_the_excerpt();?> 
				<?php  echo my_post_substr();?> ...
			</div>
			<div class="post_submit">
				<a href="<?php the_permalink() ?>"> READ MORE</a>
			</div>
		</div>
<?php
		endwhile;
	endif;
?>
