<?php get_header(); ?>
<div class="container">
<div class="title_area">
		<div class="title_area2">
		<h1 ><a href="<?php echo get_home_url() ?>"> <?php bloginfo( 'name' );?> </h1>
			<span class="title_description">
				<?php
					bloginfo( 'description' );
				?>
			</span>
			</br>
		</div>
	</div>


	<div class="menu_area">
		<div class="menu_area2">
			<?php 
				wp_nav_menu( array( 
					'theme_location' => 'main-menu', 
				)); 
			?>
		</div>
	</div>
	
	<div class="main_area">
		<div class="main_area2"">
			<div class="main_content_area" >
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
//									$width_and_height = get_thumbnail_width_and_height($post_id, INDEX_THUMNAIL_WIDTH);
									//echo  $width_and_height[0] .  "x" . $width_and_height[1] . "</br>";
//									the_post_thumbnail($width_and_height);
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
			</div>
			<div class="sidebar_area">
				<?php
					get_sidebar();
				?>
			</div>
		</div>
	</div>

</div>
<?php get_footer(); ?>

