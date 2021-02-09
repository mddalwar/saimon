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

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">Saimon</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#siteNav" aria-controls="siteNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="siteNav">
				<?php 
					$primary_args = array(
						'theme_location'		=> 'primary',
						'walker'				=> new Saimon_Nav_Walker(),
						'container'				=> '',
						'menu_class'			=> 'navbar-nav mr-auto',
						'fallback_cb'			=> 'primary_menu_fallback',
					);
					wp_nav_menu($primary_args);
				?>
				<form action="<?php echo esc_url(home_url('/')) ?>" class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" name="s" type="text" placeholder="Search">
					<button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>
