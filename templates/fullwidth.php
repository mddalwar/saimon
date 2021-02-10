<?php 
	// Avoid directly access
	if ( ! defined( 'ABSPATH' ) ) {
		exit( 'Direct access denied.' );
	}

	while (have_posts()) {
		the_post();

		the_content();
	}
?>