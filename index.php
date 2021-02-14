<?php get_header(); ?>


<div class="container">
	<div class="title_area">
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
		工事中
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
					<?php
						the_post_thumbnail('large');
					?>
				</div>
		<?php
				endwhile;
			endif;
		?>
		</br>
		あいうえお</br>
		abcdef</br>
	</div>

</div>
<?php get_footer(); ?>

