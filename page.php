<?php get_header(); ?>
<div class="container">
<?php my_title_and_menu(true) ?>


	
	<div class="main_area">
		<div class="main_area2"">
			<div class="main_content_area" >
<div>
	<p>
		<a href="https://www.udemy.com/course/zynq-in-ultra96/">
	<img src="https://www.update-gadget.com/blog/wp-content/uploads/2021/06/zero.png" alt="udemy"></a></p>
</div>
			<?php $is_short_text = false; my_loop_produce_post($is_short_text) ?>
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

