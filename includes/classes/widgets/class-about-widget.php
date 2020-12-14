<?php

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}
/**
 * Widget API
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */

/**
 * Sub class extends by using Saimon_Widget_About.
 *
 * @since 1.0.0
 *
 */
class Saimon_Widget_About extends WP_Widget {

	/**
	 * Sets up a new About widget instance.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'widget_about',
			'description'                 => __( 'About widget by Saimon Theme.' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'saimon-about', __( 'Saimon: About' ), $widget_ops );
	}

	/**
	 * Outputs the content for the current About widget instance.
	 *
	 * @since 2.8.0
	 * @since 4.2.0 Creates a unique HTML ID for the `<select>` element
	 *              if more than one instance is displayed on the page.
	 *
	 * @param array $args     Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current About widget instance.
	 */
	public function widget( $args, $instance ) {

		$default_title = __( 'About' );
		$title         = ! empty( $instance['title'] ) ? $instance['title'] : $default_title;


		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$imagelink        	= ! empty( $instance['imagelink'] ) ? $instance['imagelink'] : '';
		$description        = ! empty( $instance['description'] ) ? $instance['description'] : '';
		$facebook        	= ! empty( $instance['facebook'] ) ? $instance['facebook'] : '';
		$twitter        	= ! empty( $instance['twitter'] ) ? $instance['twitter'] : '';
		$linkedin        	= ! empty( $instance['linkedin'] ) ? $instance['linkedin'] : '';
		$dribbble        	= ! empty( $instance['dribbble'] ) ? $instance['dribbble'] : '';
		$youtube        	= ! empty( $instance['youtube'] ) ? $instance['youtube'] : '';
		$hidelogo        	= ! empty( $instance['hidelogo'] ) ? '1' : '0';

		echo $args['before_widget'];

			?>

			<div class="about">
				<?php echo $args['before_title'] . $title . $args['after_title']; ?>

				<?php if($hidelogo != 1 && !empty($imagelink)) : ?>
				<div class="logo">
					<img src="<?php echo $imagelink; ?>" alt="Logo">
				</div>
				<?php endif; ?>

				<div class="description">					
					<p><?php echo $description; ?></p>
				</div>

				<div class="social-links">
					<ul class="list-unstyled list-inline">
						<?php 
							if(!empty($facebook)){
								echo '<li class="list-inline-item"><a href="' . $facebook . '"><i class="fab fa-facebook-f"></i></a></li>';
							}
							if(!empty($twitter)){
								echo '<li class="list-inline-item"><a href="' . $twitter . '"><i class="fab fa-twitter"></i></a></li>';
							}
							if(!empty($linkedin)){
								echo '<li class="list-inline-item"><a href="' . $linkedin . '"><i class="fab fa-linkedin-in"></i></a></li>';
							}
							if(!empty($dribbble)){
								echo '<li class="list-inline-item"><a href="' . $dribbble . '"><i class="fab fa-dribbble"></i></a></li>';
							}
							if(!empty($youtube)){
								echo '<li class="list-inline-item"><a href="' . $youtube . '"><i class="fab fa-youtube"></i></a></li>';
							}
						?>
					</ul>
				</div>
			</div>

			<?php

		echo $args['after_widget'];
	}

	/**
	 * Handles updating settings for the current About widget instance.
	 *
	 * @since 2.8.0
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 * @return array Updated settings to save.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance                 = $old_instance;
		$instance['title']        = sanitize_text_field( $new_instance['title'] );
		$instance['imagelink']     = ! empty( esc_url($new_instance['imagelink']) ) ? esc_url($new_instance['imagelink']) : '';
		$instance['description']  = sanitize_text_field( $new_instance['description'] );
		$instance['facebook']     = ! empty( esc_url($new_instance['facebook']) ) ? esc_url($new_instance['facebook']) : '';
		$instance['twitter']      = ! empty( esc_url($new_instance['twitter']) ) ? esc_url($new_instance['twitter']) : '';
		$instance['linkedin']     = ! empty( esc_url($new_instance['linkedin']) ) ? esc_url($new_instance['linkedin']) : '';
		$instance['dribbble']     = ! empty( esc_url($new_instance['dribbble']) ) ? esc_url($new_instance['dribbble']) : '';
		$instance['youtube']      = ! empty( esc_url($new_instance['youtube']) ) ? esc_url($new_instance['youtube']) : '';
		$instance['hidelogo']     = ! empty( $new_instance['hidelogo'] ) ? 1 : 0;

		return $instance;
	}

	/**
	 * Outputs the settings form for the About widget.
	 *
	 * @since 2.8.0
	 *
	 * @param array $instance Current settings.
	 */
	public function form( $instance ) {
		// Defaults.
		$instance     = wp_parse_args( (array) $instance, array( 'title' => '' ) );
		$imagelink    = isset( $instance['imagelink'] ) ? $instance['imagelink'] : '';
		$description  = isset( $instance['description'] ) ? $instance['description'] : '';
		$facebook     = isset( $instance['facebook'] ) ? $instance['facebook'] : '';
		$twitter      = isset( $instance['twitter'] ) ? $instance['twitter'] : '';
		$linkedin     = isset( $instance['linkedin'] ) ? $instance['linkedin'] : '';
		$dribbble     = isset( $instance['dribbble'] ) ? $instance['dribbble'] : '';
		$youtube      = isset( $instance['youtube'] ) ? $instance['youtube'] : '';
		$hidelogo	  = isset( $instance['hidelogo'] ) ? (bool) $instance['hidelogo'] : false;
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
		</p>
		<div class="media-widget-control">
			<div class="media-widget-preview media_image populated">			
				<img class="attachment-thumb" id="about-logo-link" src="<?php echo $imagelink; ?>">
				<input type="hidden" id="imagelink" name="<?php echo $this->get_field_name( 'imagelink' ); ?>" value="<?php echo $imagelink; ?>">			
			</div>
			<div class="attachment-media-view" style="margin: 1rem 0;">
				<button id="about-logo" class="select-media button-add-media" type="button">Upload Logo</button>
			</div>
		</div>
		<p>
			<label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>"><?php echo esc_attr( $description ); ?></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'Facebook URL:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e( 'Twitter URL:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e( 'Linkedin URL:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" type="text" value="<?php echo esc_attr( $linkedin ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'dribbble' ); ?>"><?php _e( 'Dribbble URL:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'dribbble' ); ?>" name="<?php echo $this->get_field_name( 'dribbble' ); ?>" type="text" value="<?php echo esc_attr( $dribbble ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e( 'Youtube URL:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" type="text" value="<?php echo esc_attr( $youtube ); ?>" />
		</p>

		<p>
			<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id( 'hidelogo' ); ?>" name="<?php echo $this->get_field_name( 'hidelogo' ); ?>"<?php checked( $hidelogo ); ?> />
			<label for="<?php echo $this->get_field_id( 'hidelogo' ); ?>"><?php _e( 'Hide logo image.' ); ?></label>
			<br />
		</p>
		<?php
	}

}
