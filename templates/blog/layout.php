<?php
/**
 * Blog-layout template.
 *
 * @author     Md Dalwar
 * @link       https://wpcoderpro.com
 * @package    Saimon
 * @subpackage Core
 * @since      1.0.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}

if(have_posts()) : ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<?php while (have_posts()) : the_post(); ?>			
						<?php get_template_part( 'templates/blog/post', get_post_format() ); ?>

						<?php  ?>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="col-md-4">
				<?php get_template_part( 'templates/sidebars/sidebar', 'right' ); ?>
			</div>
		</div>
	</div>		
<?php endif; 
