<?php
/**
 * Blog layout template.
 *
 * @author     Md Dalwar
 * @link       https://wpcoderpro.com
 * @package    Saimon
 * @subpackage Core
 * @since      1.0.0
 */

// Avoid direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}

global $post;

?>
<div class="col-md-6">
	<article class="blog-post mt-2 mb-2 post-<?php echo $post->ID; ?>">
		<div class="card">
			<a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
			<div class="card-body">
				<a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
				<p class="card-text"><?php echo wp_trim_words(get_the_content(), 20, ''); ?></p>
				<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
			</div>
		</div>
	</article>
</div>