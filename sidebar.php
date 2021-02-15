<?php 
if ( is_active_sidebar( 'sidebar-1' ) ) :
	dynamic_sidebar( 'sidebar-1' );
else:
	echo '<p>ウィジェットが設定されていません。</p>';
endif; 
?>
