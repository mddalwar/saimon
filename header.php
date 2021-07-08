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
	    <div class="<?php echo pm_con_class(); ?>" id="siteNav">
	      <!-- Left links -->
			<?php 

				$primary_args = array(
					'theme_location'		=> 'primary',
					'walker'				=> new Saimon_Nav_Walker(),
					'container'				=> '',
					'menu_class'			=> pm_class(),
					'fallback_cb'			=> 'primary_menu_fallback',
				);
				wp_nav_menu($primary_args);
			?>
	      <!-- Left links -->

			<div class="d-flex align-items-center">
				<?php 
					if( $saimon['header_cart_position'] == 1 ){
						do_action( 'header_cart' );
					}
				?>

				<?php do_action( 'header_button' ); ?>

				<?php 
					if( $saimon['header_cart_position'] == 2 ){
						do_action( 'header_cart' );
					}
				?>
			</div>
	    </div>
	    <!-- Collapsible wrapper -->
	  </div>
	  <!-- Container wrapper -->
	</nav>
	<!-- Navbar -->