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
	<section id="content" class="page page-space page-<?php echo get_the_id(); ?>">

		<?php  if( class_exists( 'woocommerce' ) && is_checkout() ) : ?>
			<div class="container">
				<?php get_template_part( 'templates/fullwidth' );  ?>				
			</div>
		<?php else : ?>
			<?php get_template_part( 'templates/fullwidth' );  ?>
		<?php endif; ?>
	</section>
<?php get_footer(); ?>
