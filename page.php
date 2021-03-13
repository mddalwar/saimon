<?php
/**
 * The theme's front page file.
 *
 * @package Saimon
 * @subpackage Frontpage
 */

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}
?>
<?php get_header(); ?>
	<section id="content" class="page page-<?php echo get_the_id(); ?>">
		<?php get_template_part( 'templates/fullwidth' ); ?>
	</section>
<?php get_footer(); ?>
