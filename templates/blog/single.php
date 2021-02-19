<?php 
	// Avoid directly access
	if ( ! defined( 'ABSPATH' ) ) {
		exit( 'Direct access denied.' );
	}
?>
<div class="container">
	<article class="blog-post single-blog mt-2 mb-2 post-<?php echo $post->ID; ?>">	
		<div class="blog-thumb">			
			<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
		</div>			
		<div class="blog-body">
			<h4 class="blog-title"><?php the_title(); ?></h4>
			<?php the_content(); ?>
		</div>
	</article>
</div>