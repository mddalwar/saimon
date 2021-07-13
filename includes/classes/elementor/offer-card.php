<?php
namespace Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class OfferCard extends Widget_Base{

  public function get_name(){
    return 'saimon-offer-card';
  }

  public function get_title(){
    return 'Saimon: Offer Card';
  }

  public function get_icon(){
    return 'fas fa-id-card-alt';
  }

  public function get_categories(){
    return ['general'];
  }

  protected function _register_controls(){


    $this->start_controls_section(
      'offer_info',
      [
      'label' 				=> 'Offer Info',
      ]
    );

    $this->add_control(
      'card_title',
      [
        'label' 			=> 'Title',
        'type' 				=> \Elementor\Controls_Manager::TEXT,
        'default' 		=> 'Title goes here',
        'placeholder'	=> __('Title Text', 'saimon'),
      ]
    );

    $this->add_control(
      'description',
      [
        'label' 			=> 'Description',
        'type' 				=> \Elementor\Controls_Manager::TEXTAREA,
        'default' 		=> 'Your descrition goes here.',
        'placeholder'	=> __('Enter Description', 'saimon'),
      ]
    );

    $this->add_control(
			'box_icon',
			[
				'label' => __( 'Select Icon', 'saimon' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default'	=> array(
					'value'		=> 'fab fa-accusoft',
				),
			]
		);

    $this->add_control(
      'bg_image',
      [
        'label' 			=> 'Background Image',
        'type' 				=> \Elementor\Controls_Manager::MEDIA,
        'default' 		=> array(
        	'url'				=> \Elementor\Utils::get_placeholder_image_src(),
        ),
      ]
    );

    $this->add_control(
			'content_position',
			[
				'label' 				=> __( 'Content Position', 'saimon' ),
				'type' 					=> Controls_Manager::SELECT,
				'options' 			=> [
					''						=> 'Default',
					'text-left'		=> 'Left',
					'text-center' => 'Center',
					'text-right' 	=> 'Right',
				],
				'default' 			=> 'text-center',
			]
		);
    $this->end_controls_section();

    $this->start_controls_section(
      'button_option',
      [
      	'label' 		=> 'Button',
      ]
    ); 

    $this->add_control(
      'button_show',
      [
        'label'         => __( 'Show Button', 'saimon' ),
        'type'          => \Elementor\Controls_Manager::SWITCHER,
        'label_on'      => __( 'Yes', 'saimon' ),
        'label_off'     => __( 'No', 'saimon' ),
        'return_value'  => 'yes',
        'default'       => 'yes',
      ]
    );

    $this->add_control(
      'button_text',
      [
        'label' 			=> 'Button Text',
        'type' 				=> \Elementor\Controls_Manager::TEXT,
        'default' 		=> 'Read More',
        'placeholder'	=> __('Button Text', 'saimon'),
      ]
    );

    $this->add_control(
      'button_link',
      [
        'label' 			=> 'Button Link',
        'type' 				=> \Elementor\Controls_Manager::TEXT,
        'default' 		=> '#',
        'placeholder'	=> __('Button Link', 'saimon'),
      ]
    );    

    $this->end_controls_section();

    $this->start_controls_section(
		'saimon_button_style',
		[
			'label' 			=> __( 'Button Styles', 'elementor' ),
			'tab' 				=> Controls_Manager::TAB_STYLE,
		]
	);

	$this->add_control(
		'button_color',
		[
			'label' 			=> __( 'Button Color', 'saimon' ),
			'type' 				=> Controls_Manager::SELECT,
			'options' 		=> [
				'primary' 	=> 'Primary',
				'secondary' => 'Secondary',
				'success' 	=> 'Success',
				'danger' 		=> 'Danger',
				'warning' 	=> 'Warning',
				'info' 			=> 'Info',
				'light' 		=> 'Light',
				'dark' 			=> 'Dark',
			],
			'default' 		=> 'primary',
		]
	);

	$this->add_control(
		'button_type',
		[
			'label' 			=> __( 'Button Type', 'saimon' ),
			'type' 				=> Controls_Manager::SELECT,
			'options' 		=> [
				'' 					=> 'Normal',
				'outline-' 	=> 'Outlined',
			],
			'default' 		=> '',
		]
	);

	$this->add_control(
		'button_shape',
		[
			'label' 					=> __( 'Button Shape', 'saimon' ),
			'type' 						=> Controls_Manager::SELECT,
			'options' 				=> [
				'' 							=> 'Normal',
				'btn-rounded' 	=> 'Rounded',
				'btn-floating' 	=> 'Float',
			],
			'default' 				=> '',
		]
	);

	$this->add_control(
		'button_size',
		[
			'label' 				=> __( 'Button Size', 'saimon' ),
			'type' 					=> Controls_Manager::SELECT,
			'options' 			=> [
				'' 						=> 'Normal',
				'btn-lg' 			=> 'Large',
				'btn-sm' 			=> 'Small',
			],
			'default' 			=> '',
		]
	);

	$this->end_controls_section();

  }

protected function render(){
    $settings = $this->get_settings_for_display();

    $cardTitle 			= isset( $settings['card_title'] ) ? $settings['card_title'] : 'Card Title';
    $description 		= isset( $settings['descrition'] ) ? $settings['descrition'] : 'Description';
    $cardIcon 			= isset( $settings['box_icon']['value'] ) ? $settings['box_icon']['value'] : '';
    $contentPosition = isset( $settings['content_position'] ) ? $settings['content_position'] : '';
    $bgImage 			= isset( $settings['bg_image']['url'] ) ? $settings['bg_image']['url'] : '';

    $buttonShow 	= isset( $settings['button_show'] ) ? $settings['button_show'] : '';
    $buttonText 	= isset( $settings['button_text'] ) ? $settings['button_text'] : 'Read More';
    $buttonLink 	= isset( $settings['button_link'] ) ? $settings['button_link'] : '#';
    $buttonColor 	= isset( $settings['button_color'] ) ? $settings['button_color'] : 'primary';
    $buttonType 	= isset( $settings['button_type'] ) ? $settings['button_type'] : '';
    $buttonShape 	= isset( $settings['button_shape'] ) ? $settings['button_shape'] : '';
    $buttonSize 	= isset( $settings['button_size'] ) ? $settings['button_size'] : '';

  ?>
	<div class="hightlighted-card overlay <?php echo $contentPosition; ?>" style="background-image: url('<?php echo $bgImage; ?>');">
		<div class="card-body">
			<h4 class="title text-white">Summer Sale !</h4>
			<h3 class="highlighted text-warning">50% Off</h3>
			<p class="text-white">All product discount</p>

			<?php if( !empty( $buttonText ) && !empty( $buttonLink ) && $buttonShow == 'yes' ) : ?>
				<div class="saimon-button mt-4">
			  	<a href="<?php echo $buttonLink; ?>" 
			  		class="btn 
			  		btn-<?php echo $buttonType; ?><?php echo $buttonColor; ?> 
			  		<?php echo $buttonShape; ?> 
			  		<?php echo $buttonSize; ?>">
			  		<?php echo $buttonText; ?>
			  	</a>
			  </div>
			<?php endif; ?>

		</div>
	</div>

  <?php
  }
}