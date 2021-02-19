<?php

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}

function saimon_comment_form_fields($fields){

	$commenter     = wp_get_current_commenter();
	$user          = wp_get_current_user();
	$user_identity = $user->exists() ? $user->display_name : '';

	$args = wp_parse_args( $args );
	if ( ! isset( $args['format'] ) ) {
		$args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';
	}

	$req      = get_option( 'require_name_email' );
	$html_req = ( $req ? " required='required'" : '' );
	$html5    = 'html5' === $args['format'];

	$fields = array(
		'author' => sprintf(
			'<div class="row mb-5"><div class="comment-form-author col-md-6"><div class="form-group">%s %s</div></div>',
			sprintf(
				'<label for="author">%s%s</label>',
				__( 'Your Name' ),
				( $req ? ' <span class="required text-danger">*</span>' : '' )
			),
			sprintf(
				'<input id="author" required="required" name="author" placeholder="Your Name" class="form-control" type="text" value="%s" size="30" maxlength="245"%s />',
				esc_attr( $commenter['comment_author'] ),
				$html_req
			)
		),
		'email'  => sprintf(
			'<div class="comment-form-email col-md-6"><div class="form-group">%s %s</div></div>',
			sprintf(
				'<label for="email">%s%s</label>',
				__( 'Email' ),
				( $req ? ' <span class="required text-danger">*</span>' : '' )
			),
			sprintf(
				'<input id="email" required="required" class="form-control" name="email" placeholder="Your Email" %s value="%s" size="30" maxlength="100" aria-describedby="email-notes"%s />',
				( $html5 ? 'type="email"' : 'type="text"' ),
				esc_attr( $commenter['comment_author_email'] ),
				$html_req
			)
		),
		'url'    => sprintf(
			'<div class="comment-form-url col-md-12"><div class="form-group">%s %s</div></div>',
			sprintf(
				'<label for="url">%s</label>',
				__( 'Website' )
			),
			sprintf(
				'<input id="url" required="required" class="form-control" name="url" placeholder="Your Website" %s value="%s" size="30" maxlength="200" />',
				( $html5 ? 'type="url"' : 'type="text"' ),
				esc_attr( $commenter['comment_author_url'] )
			)
		),
	);

	return $fields;
}

add_filter('comment_form_default_fields', 'saimon_comment_form_fields');


function saimon_comment_form_defaults($defaults){

	if(is_user_logged_in()){
		$submit_pre = '<div class="row"><div class="form-submit mb-5 col-md-12">';
		$submit_post = '</div></div>';
	}else{
		$submit_pre = '<div class="form-submit col-md-12">';
		$submit_post = '</div>';
	}

	$defaults = array(
		'comment_field'        => sprintf(
			'<div class="row"><div class="comment-form-comment col-md-12"><div class="form-group">%s %s</div></div></div>',
			sprintf(
				'<label for="comment">%s</label>',
				_x( 'Your Comment', 'saimon' )
			),
			'<textarea id="comment" class="form-control" placeholder="Your Comment" name="comment" cols="45" required="required" rows="8" maxlength="65525" required="required"></textarea>'
		),
		'must_log_in'          => sprintf(
			'<p class="must-log-in">%s</p>',
			sprintf(
				/* translators: %s: Login URL. */
				__( 'You must be <a href="%s">logged in</a> to post a comment.' ),
				/** This filter is documented in wp-includes/link-template.php */
				wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
			)
		),
		'logged_in_as'         => sprintf(
			'<p class="logged-in-as">%s</p>',
			sprintf(
				/* translators: 1: Edit user link, 2: Accessibility text, 3: User name, 4: Logout URL. */
				__( '<a href="%1$s" aria-label="%2$s">Logged in as %3$s</a>. <a href="%4$s">Log out?</a>' ),
				get_edit_user_link(),
				/* translators: %s: User name. */
				esc_attr( sprintf( __( 'Logged in as %s. Edit your profile.' ), $user_identity ) ),
				$user_identity,
				/** This filter is documented in wp-includes/link-template.php */
				wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
			)
		),
		'comment_notes_before' => sprintf(
			'<p class="comment-notes">%s%s</p>',
			sprintf(
				'<span id="email-notes">%s</span>',
				__( 'Your email address will not be published.' )
			),
			( $req ? $required_text : '' )
		),
		'comment_notes_after'  => '',
		'id_form'              => 'commentform',
		'id_submit'            => 'submit',
		'class_container'      => 'comment-respond',
		'class_form'           => 'comment-form',
		'class_submit'         => 'submit',
		'name_submit'          => 'submit',
		'title_reply'          => __( 'Leave a Reply' ),
		/* translators: %s: Author of the comment being replied to. */
		'title_reply_to'       => __( 'Leave a Reply to %s' ),
		'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
		'title_reply_after'    => '</h3>',
		'cancel_reply_before'  => ' <small>',
		'cancel_reply_after'   => '</small>',
		'cancel_reply_link'    => __( 'Cancel reply' ),
		'label_submit'         => __( 'Post Comment' ),
		'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s btn btn-primary" value="%4$s" />',
		'submit_field'         => $submit_pre . '%1$s %2$s</div>' . $submit_post,
		'format'               => 'html5',
	);
	return $defaults;
}

add_filter('comment_form_defaults', 'saimon_comment_form_defaults');