<?php
namespace Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class SaimonCard extends Widget_Base{

  public function get_name(){
    return 'saimon-card';
  }

  public function get_title(){
    return 'Saimon: Card';
  }

  public function get_icon(){
    return 'fas fa-id-card-alt';
  }

  public function get_categories(){
    return ['general'];
  }

  protected function _register_controls(){


    $this->start_controls_section(
      'section_content',
      [
      'label' 		=> 'Card Info',
      ]
    );    

    $this->add_control(
      'card_header',
      [
        'label' 			=> 'Card Header Text',
        'type' 				=> \Elementor\Controls_Manager::TEXT,
        'default' 		=> 'Header Text',
        'placeholder'	=> __('Header Text', 'saimon'),
      ]
    );

    $this->add_control(
      'card_title',
      [
        'label' 		=> 'Title',
        'type' 			=> \Elementor\Controls_Manager::TEXT,
        'default' 	=> 'Title goes here',
        'placeholder'	=> __('Title Text', 'saimon'),
      ]
    );

    $this->add_control(
      'description',
      [
        'label' 			=> 'Description',
        'type' 				=> \Elementor\Controls_Manager::TEXT,
        'default' 		=> 'Your descrition goes here.',
        'placeholder'	=> __('Enter Description', 'saimon'),
      ]
    );

    $this->add_control(
      'card_image',
      [
        'label' 			=> 'Card Image',
        'type' 				=> \Elementor\Controls_Manager::MEDIA,
        'default' 		=> array(
        	'url'				=> \Elementor\Utils::get_placeholder_image_src(),
        ),
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
      'show_button',
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

    $this->add_control(
		'button_position',
		[
			'label' 				=> __( 'Button Position', 'saimon' ),
			'type' 					=> Controls_Manager::SELECT,
			'options' 			=> [
				''						=> 'Default',
				'text-left'		=> 'Left',
				'text-center' => 'Center',
				'text-right' 	=> 'Right',
			],
			'default' 			=> '',
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

  }

protected function render(){
    $settings = $this->get_settings_for_display();

    $buttonText 	= isset( $settings['button_text'] ) ? $settings['button_text'] : 'Read More';
    $buttonLink 	= isset( $settings['button_link'] ) ? $settings['button_link'] : '#';
    $buttonColor 	= isset( $settings['button_color'] ) ? $settings['button_color'] : 'primary';
    $buttonType 	= isset( $settings['button_type'] ) ? $settings['button_type'] : '';
    $buttonShape 	= isset( $settings['button_shape'] ) ? $settings['button_shape'] : '';
    $buttonSize 	= isset( $settings['button_size'] ) ? $settings['button_size'] : '';
    $buttonPosition = isset( $settings['button_position'] ) ? $settings['button_position'] : '';

  ?>
	<div class="card text-center">
		<div class="card-header">Featured</div>
		<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
	    <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
	    <a href="#!">
	      <div class="mask"></div>
	    </a>
	  </div>
		<div class="card-body">
			<h5 class="card-title">Special title treatment</h5>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="#" class="btn btn-primary">Button</a>
		</div>
		<div class="card-footer text-muted">2 days ago</div>
	</div>

  <?php
  }
}