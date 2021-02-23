<?php get_header(); ?>
<div class="container">
<?php my_title_and_menu() ?>

	<div class="main_area">
		<div class="main_area2"">
			<div class="main_content_area" >
				<div class="main_category"><h2>
				<?php 
				single_cat_title();
				?>
				</h2></div>
				<?php $is_short_text = true; my_loop_produce_post($is_short_text) ?>
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





