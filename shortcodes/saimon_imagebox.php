
<?php
// Create Shortcode saimon_imagebox

if(!function_exists('create_saimonimagebox_shortcode')){
	function create_saimonimagebox_shortcode($atts) {

		$atts = extract(shortcode_atts(
			array(
				'showbutton' 	=> 'yes',
				'linkimg' 		=> 'yes',
				'title'			=> '',
				'description'	=> '',
				'imagelink' 	=> '#',
				'imageurl'		=> '',
				'buttontext' 	=> 'Button',
				'buttonlink' 	=> '#',
			),
			$atts,
			'saimon_imagebox'
		));

		$showbutton 		= $atts['showbutton'];
		$linkimg 			= $atts['linkimg'];
		$title 				= $atts['title'];
		$description		= $atts['description'];
		$imagelink 			= $atts['imagelink'];
		$imageurl			= wp_get_attachment_url($atts['imageurl']);
		$buttontext 		= $atts['buttontext'];
		$buttonlink 		= $atts['buttonlink'];

		ob_start();

		?>
		<div class="ht-tm-codeblock">
			<div class="ht-tm-element card">
				<img class="card-img-top" src="<?php echo $imageurl; ?>" alt="<?php echo $title; ?>">
				<div class="card-body">
					<h4 class="card-title"><?php echo $title; ?></h4>
					<p class="card-text"><?php echo $description; ?></p>
					<a href="<?php echo $buttonlink; ?>" class="btn btn-primary"><?php echo $buttontext; ?></a>
				</div>
			</div>
		</div>
		<?php
		return ob_get_clean();

	}
	add_shortcode( 'saimon_imagebox', 'create_saimonimagebox_shortcode' );
}


if(!function_exists('saimonimagebox_integrateWithVC')){
	// Create Image Box element for Visual Composer
	add_action( 'vc_before_init', 'saimonimagebox_integrateWithVC' );
	function saimonimagebox_integrateWithVC() {
		vc_map( array(
			'name' 				=> __( 'Image Box', 'saimon' ),
			'base' 				=> 'saimon_imagebox',
			'category' 			=> __( 'Saimon', 'saimon'),
			'icon'				=> ASSET_URL . 'img/icon.png',
			'params' 			=> array(
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'admin_label' => true,
					'heading' => __( 'Title', 'saimon' ),
					'param_name' => 'title',
				),
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'admin_label' => true,
					'heading' => __( 'Description', 'saimon' ),
					'param_name' => 'description',
				),
				array(
					'type' => 'attach_image',
					'holder' => 'div',
					'class' => '',
					'admin_label' => true,
					'heading' => __( 'Select Image', 'saimon' ),
					'param_name' => 'imageurl',
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'admin_label' => true,
					'heading' => __( 'Buttom Text', 'saimon' ),
					'param_name' => 'buttontext',
				),
				array(
					'type' => 'vc_link',
					'holder' => 'div',
					'class' => '',
					'admin_label' => true,
					'heading' => __( 'Button Link', 'saimon' ),
					'param_name' => 'buttonlink',
				),
				array(
					'type' => 'vc_link',
					'holder' => 'div',
					'class' => '',
					'admin_label' => true,
					'heading' => __( 'Image Link', 'saimon' ),
					'param_name' => 'imagelink',
				),
				array(
					'type' => 'checkbox',
					'holder' => 'div',
					'class' => '',
					'admin_label' => true,
					'heading' => __( 'Show Button', 'saimon' ),
					'param_name' => 'showbutton',
					'value' => 'yes',
				),
				array(
					'type' => 'checkbox',
					'holder' => 'div',
					'class' => '',
					'admin_label' => true,
					'heading' => __( 'Link Image', 'saimon' ),
					'param_name' => 'linkimg',
					'value' => 'yes',
				),
			)
		) );
	}
}


