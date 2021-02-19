<?php

class Saimon_Comment_Walker extends Walker_Comment {
	/**
	 * Output a comment in the HTML5 format.
	 *
	 * @access protected
	 * @since 1.0.0
	 *
	 * @see wp_list_comments()
	 *
	 * @param object $comment Comment to display.
	 * @param int    $depth   Depth of comment.
	 * @param array  $args    An array of arguments.
	 */
	protected function html5_comment( $comment, $depth, $args ) {
		$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
?>
		<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $this->has_children ? 'parent saimon-comment' : 'saimon-comment' ); ?>>

			<?php if ( 0 != $args['avatar_size'] ): ?>
			<div class="saimon-comment-left">
				<a href="<?php echo get_comment_author_url(); ?>" class="saimon-comment-thumb">
					<?php echo get_avatar( $comment, $args['avatar_size'] ); ?>
				</a>
			</div>
			<?php endif; ?>

			<div class="saimon-comment-body">

				<?php printf( '<div class="saimon-comment-heading">%s</div>', get_comment_author_link() ); ?>

				<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID, $args ) ); ?>">
					<time datetime="<?php comment_time( 'c' ); ?>">
						<?php printf( _x( '%1$s at %2$s', '1: date, 2: time' ), get_comment_date(), get_comment_time() ); ?>
					</time>
				</a>

				<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation text-warning font-weight-bold label label-info"><?php _e( 'Your comment is awaiting moderation.' ); ?></p>
				<?php endif; ?>

				<div class="comment-content">
					<?php comment_text(); ?>
				</div><!-- .comment-content -->

				<ul class="list-inline mb-4">
					<?php edit_comment_link( __( 'Edit' ), '<li class="edit-link list-inline-item">', '</li>' ); ?>

					<?php
						comment_reply_link( array_merge( $args, array(
							'add_below' => 'div-comment',
							'depth'     => $depth,
							'max_depth' => $args['max_depth'],
							'before'    => '<li class="reply-link list-inline-item">',
							'after'     => '</li>'
						) ) );
					?>

				</ul>

			</div>
<?php
	}
}
