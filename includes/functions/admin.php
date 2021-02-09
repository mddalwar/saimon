<?php 
	if(!function_exists('primary_menu_fallback')){
		function primary_menu_fallback(){
			$url = admin_url('nav-menus.php');

			echo sprintf('<ul class="navbar-nav mr-auto"><li id="menu-item-2" class="menu-item-2 nav-item"><a href="' . $url . '" class="nav-link">%s</a></li></ul>', 'Create a Menu');
		}
	}
	
?>

