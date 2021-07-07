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
	<section id="content" class="frontpage pb-50 pt-50">

		<?php 
			if( is_home() ){
				get_template_part( 'templates/blog/layout' );
			}else{				
				get_template_part( 'templates/fullwidth' );
			}
		?>
	</section>
<?php get_footer(); ?>
