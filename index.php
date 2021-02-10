<?php
/**
 * The theme's index.php file.
 *
 * @package Saimon
 * @subpackage Templates
 */

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}
?>
<?php get_header(); ?>
	<?php get_template_part( 'templates/banner' ); ?>
	<section id="content" class="pt-5 pb-5">
		<?php get_template_part( 'templates/blog/layout' ); ?>
	</section>
<?php get_footer(); ?>
