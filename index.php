<?php get_header(); ?>


<div class="container">
	<div class="title_area">
		<div class="title_area2">
		<h1 style="display:inline">
			<?php
				bloginfo( 'name' );
			?>
			</h1>
			&nbsp;
			&nbsp;
	
			<?php
				bloginfo( 'description' );
			?>
			</br>
		</div>
	</div>


	<div class="menu_area">
		<div class="menu_title">
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
								<h2><a href="<?php the_permalink() ?>"> <?php the_title() ?></a></h2>
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
							<?php
								$size = get_option( 'thumbnail_size_w' );
								echo $size;
								the_post_thumbnail('large');
							?>
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

