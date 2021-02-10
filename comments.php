<?php 
	// Avoid directly access
	if ( ! defined( 'ABSPATH' ) ) {
		exit( 'Direct access denied.' );
	}
?>
<div class="container">
	<h4><?php comments_number(); ?></h4>
	<?php
		wp_list_comments(
			array(
				'avatar_size' => 60,
				'style'       => 'div',
				'walker'		=> new Saimon_Comment_Walker()
			)
		);
	?>
	<div class="comment-form">
		<?php
			comment_form(
				array(
					'logged_in_as'       => null,
					'title_reply'        => esc_html__( 'Leave a comment', 'saimon' ),
					'title_reply_before' => '<h4 id="reply-title" class="comment-reply-title">',
					'title_reply_after'  => '</h4>',
				)
			);
		?>
	</div>
</div>