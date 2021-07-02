<?php 
/**
 * This is the header template.
 *
 * @package Saimon
 * @subpackage Templates
 */

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}
global $saimon;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <!-- Container wrapper -->
	  <div class="container">
	    <!-- Navbar brand -->
	    <a class="navbar-brand me-2" href="<?php echo esc_url(home_url()); ?>">

	    	<?php 
	    		if( !empty( $saimon['imglogo']['url'] ) ){
	    			echo sprintf( '<img src="%s" alt="%s">',  $saimon['imglogo']['url'], get_bloginfo("name") );
	    		}elseif( !empty( $saimon['textlogo'] ) ){
	    			echo $saimon['textlogo'];
	    		}
	    	?>

	    </a>

	    <!-- Toggle button -->
	    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#siteNav" aria-controls="siteNav" aria-expanded="false"aria-label="Toggle navigation">
	      <i class="fas fa-bars"></i>
	    </button>

	    <!-- Collapsible wrapper -->
	    <div class="collapse navbar-collapse" id="siteNav">
	      <!-- Left links -->
			<?php 
				$primary_args = array(
					'theme_location'		=> 'primary',
					'walker'				=> new Saimon_Nav_Walker(),
					'container'				=> '',
					'menu_class'			=> 'navbar-nav me-auto mb-2 mb-lg-0',
					'fallback_cb'			=> 'primary_menu_fallback',
				);
				wp_nav_menu($primary_args);
			?>
	      <!-- Left links -->

			<div class="d-flex align-items-center">
				<a href="" class="btn btn-link px-3 me-2">Login</a>
				<a href="" class="btn btn-primary me-3">Sign up for free</a>
			</div>
	    </div>
	    <!-- Collapsible wrapper -->
	  </div>
	  <!-- Container wrapper -->
	</nav>
	<!-- Navbar -->