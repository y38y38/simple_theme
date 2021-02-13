<?php get_header(); ?>


<div class="container">
	<div class="title_item">
	<span class="blog_title">
		<?php
		bloginfo( 'name' );
		?>
		</span>
		&nbsp;
		&nbsp;

		<?php
		bloginfo( 'description' );
		?></p>
		</br>
	</div>
	<div class="menu_item">
	<div class="menu_title">
	<?php 
		wp_nav_menu( array( 
			'theme_location' => 'main-menu', 
		)); 
		?>
	</div>
	</div>
	
	<div class="main_item">

	<?php 
		if(have_posts()): 
			while(have_posts()): 
				the_post(); 
    			the_post_thumbnail('thumbnail');
			endwhile;
		endif;
	?>
	</br>
	あいうえお</br>
	abcdef</br>
	</div>

</div>
<?php get_footer(); ?>

