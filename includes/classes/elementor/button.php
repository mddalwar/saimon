<?php
namespace Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class SaimonButton extends Widget_Base{

  public function get_name(){
    return 'saimon-button';
  }

  public function get_title(){
    return 'Saimon Button';
  }

  public function get_icon(){
    return 'eicon-button';
  }

  public function get_categories(){
    return ['general'];
  }

  protected function _register_controls(){


    $this->start_controls_section(
      'section_content',
      [
      'label' 		=> 'Button Info',
      ]
    );    

    $this->add_control(
      'button_text',
      [
        'label' 	=> 'Button Text',
        'type' 		=> \Elementor\Controls_Manager::TEXT,
        'default' 	=> 'Learn More'
      ]
    );

    $this->add_control(
      'button_link',
      [
        'label' 	=> 'Button Link',
        'type' 		=> \Elementor\Controls_Manager::TEXT,
        'default' 	=> '#'
      ]
    );

    $this->add_control(
		'button_position',
		[
			'label' 			=> __( 'Button Position', 'saimon' ),
			'type' 				=> Controls_Manager::SELECT,
			'options' 			=> [
				'text-left'		=> 'Left',
				'text-center' 	=> 'Center',
				'text-right' 	=> 'Right',
			],
			'default' 			=> '',
		]
	);

    $this->end_controls_section();

    $this->start_controls_section(
		'saimon_button_style',
		[
			'label' => __( 'Button Styles', 'elementor' ),
			'tab' 	=> Controls_Manager::TAB_STYLE,
		]
	);

	$this->add_control(
		'button_color',
		[
			'label' 		=> __( 'Button Color', 'saimon' ),
			'type' 			=> Controls_Manager::SELECT,
			'options' 		=> [
				'primary' 	=> 'Primary',
				'secondary' => 'Secondary',
				'success' 	=> 'Success',
				'danger' 	=> 'Danger',
				'warning' 	=> 'Warning',
				'info' 		=> 'Info',
				'light' 	=> 'Light',
				'dark' 		=> 'Dark',
			],
			'default' 		=> 'primary',
		]
	);

	$this->add_control(
		'button_type',
		[
			'label' 		=> __( 'Button Type', 'saimon' ),
			'type' 			=> Controls_Manager::SELECT,
			'options' 		=> [
				'' 			=> 'Normal',
				'outline-' 	=> 'Outlined',
			],
			'default' 		=> '',
		]
	);

	$this->add_control(
		'button_shape',
		[
			'label' 		=> __( 'Button Shape', 'saimon' ),
			'type' 			=> Controls_Manager::SELECT,
			'options' 		=> [
				'' 				=> 'Normal',
				'btn-rounded' 	=> 'Rounded',
				'btn-floating' 	=> 'Float',
			],
			'default' 		=> '',
		]
	);

	$this->add_control(
		'button_size',
		[
			'label' 		=> __( 'Button Size', 'saimon' ),
			'type' 			=> Controls_Manager::SELECT,
			'options' 		=> [
				'' 			=> 'Normal',
				'btn-lg' 	=> 'Large',
				'btn-sm' 	=> 'Small',
			],
			'default' 		=> '',
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
  <div class="saimon-button <?php echo $buttonPosition; ?>">

  	<a href="<?php echo $buttonLink; ?>" 
  		class="btn 
  		btn-<?php echo $buttonType; ?><?php echo $buttonColor; ?> 
  		<?php echo $buttonShape; ?> 
  		<?php echo $buttonSize; ?>">
  		<?php echo $buttonText; ?>
  	</a>

  </div>

  <?php
  }
}