<?php 

function pm_class(){
	global $saimon;
	$menu_class = array( 'navbar-nav', 'mb-2', 'mb-lg-0' );

	if( $saimon['header_nav_position'] == 1 ){
		$menu_class[] = 'me-auto';
	}

	return implode( " ", $menu_class );
}

function pm_con_class(){
	global $saimon;
	$menu_con_class = array( 'collapse', 'navbar-collapse' );

	if( $saimon['header_nav_position'] == 2 ){
		$menu_con_class[] = 'justify-content-right';
	}
	
	return implode( " ", $menu_con_class );
}
