<div class="title_area">
	<div class="title_text_area">
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
	<div class="menu_text_area">
		<?php 
			wp_nav_menu( array( 
				'theme_location' => 'main-menu', 
			)); 
		?>
	</div>
</div>
