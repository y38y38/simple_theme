<?php get_header(); ?>

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
	
<?php 
	wp_nav_menu( array( 
		'theme_location' => 'main-menu' 
	)); 
?>

<?php 
if(have_posts()): 
	while(have_posts()): 
		the_post(); 
    	the_post_thumbnail('thumbnail');
	endwhile;
endif;
?>

<?php get_footer(); ?>

