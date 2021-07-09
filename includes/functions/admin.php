<?php 
	
	// Avoid directly access
	if ( ! defined( 'ABSPATH' ) ) {
		exit( 'Direct access denied.' );
	}
	
	if( ! function_exists( 'primary_menu_fallback' ) ){
		function primary_menu_fallback(){
			$url = admin_url('nav-menus.php');
			if( current_user_can( 'manage_options' ) ){
				echo sprintf('<ul class="%s"><li id="menu-item-2" class="menu-item-2 nav-item"><a href="' . $url . '" class="nav-link">%s</a></li></ul>', pm_class(), 'Create a Menu');
			}else{
				echo sprintf('<ul class="%s"><li id="menu-item-2" class="menu-item-2 nav-item"></li></ul>', pm_class());
			}
			
		}
	}
	
?>

