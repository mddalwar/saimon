<?php 
	
	// Avoid directly access
	if ( ! defined( 'ABSPATH' ) ) {
		exit( 'Direct access denied.' );
	}
	
	if(!function_exists('primary_menu_fallback')){
		function primary_menu_fallback(){
			$url = admin_url('nav-menus.php');

			echo sprintf('<ul class="navbar-nav me-auto mb-2 mb-lg-0"><li id="menu-item-2" class="menu-item-2 nav-item"><a href="' . $url . '" class="nav-link">%s</a></li></ul>', 'Create a Menu');
		}
	}
	
?>

