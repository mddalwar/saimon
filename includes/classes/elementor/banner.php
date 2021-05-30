<?php
namespace Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class SaimonBanner extends Widget_Base {

  public function get_name(){
    return 'saimon-banner';
  }

  public function get_title(){
    return 'Saimon: Banner';
  }

  public function get_icon(){
    return 'eicon-t-letter';
  }

  public function get_categories(){
    return ['general'];
  }

  protected function _register_controls(){


    $this->start_controls_section(
      'section_content',
      [
        'label' => 'Banner Info',
      ]
    );    

    $this->add_control(
      'title',
      [
        'label'     => 'Title',
        'type'      => \Elementor\Controls_Manager::TEXT,
        'default'   => 'Title goes here'
      ]
    );

    $this->add_control(
      'subtitle',
      [
        'label'     => 'Subtitle',
        'type'      => \Elementor\Controls_Manager::TEXT,
        'default'   => 'Subtitle goes here'
      ]
    );

    $this->add_control(
      'descrition',
      [
        'label'     => 'Description',
        'type'      => \Elementor\Controls_Manager::TEXTAREA,
        'default'   => 'Nemo doloribus, tenetur quod illum pariatur sed. Aperiam sapiente porro voluptatum non, temporibus nihil.'
      ]
    );

    $this->add_control(
      'show_button',
      [
        'label'         => __( 'Button Center', 'saimon' ),
        'type'          => \Elementor\Controls_Manager::SWITCHER,
        'label_on'      => __( 'Yes', 'saimon' ),
        'label_off'     => __( 'No', 'saimon' ),
        'return_value'  => 'yes',
        'default'       => 'yes',
      ]
    );

    $this->add_control(
      'button1_text',
      [
        'label'         => 'Button 1 Text',
        'type'          => \Elementor\Controls_Manager::TEXT,
        'default'       => 'Button 1'
      ]
    );

    $this->add_control(
      'button1_url',
      [
        'label'         => 'Button 1 URL',
        'type'          => \Elementor\Controls_Manager::TEXT,
        'default'       => '#'
      ]
    );

    $this->add_control(
      'button2_text',
      [
        'label'         => 'Button 2 Text',
        'type'          => \Elementor\Controls_Manager::TEXT,
        'default'       => 'Button 2'
      ]
    );

    $this->add_control(
      'button2_url',
      [
        'label'         => 'Button 2 URL',
        'type'          => \Elementor\Controls_Manager::TEXT,
        'default'       => '#'
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'style_section',
      [
        'label'         => __( 'Styles', 'saimon' ),
        'tab'           => \Elementor\Controls_Manager::TAB_STYLE,
      ]
    );


    $this->add_control(
      'title_color',
      [
        'label'         => __( 'Title Color', 'saimon' ),
        'type'          => \Elementor\Controls_Manager::COLOR,
        'scheme'        => [
          'type'        => \Elementor\Scheme_Color::get_type(),
          'value'       => \Elementor\Scheme_Color::COLOR_1,
        ],
        'selectors'     => [
          '{{WRAPPER}} .title' => 'color: {{VALUE}}',
        ],
      ]
    );


  }

protected function render(){
    $settings = $this->get_settings_for_display();

    $this->add_inline_editing_attributes('descrition', 'basic');
    $this->add_render_attribute(
      'descrition',
      [
        'class' => ['advertisement__label-heading'],
      ]
    );

    $default_img = plugins_url(). '/elementor/assets/images/placeholder.png';

  ?>
  <div class="banner-wrapper">
    <div class="container">
      <?php if($settings['title']){ ?>
        <h2 class="text-uppercase text-center"><?php echo $settings['title']; ?></h2>
      <?php } ?>

      <?php if($settings['descrition']){ ?>
        <p class="text-dark mt-3"><?php echo $settings['descrition']; ?></p>
      <?php } ?>

      <?php if($settings['seperator_img']['url'] != $default_img){ ?>
        <img src="<?php echo $settings['seperator_img']['url'];?>" alt="<?php esc_attr__('heading-image','taqwa'); ?>">
      <?php } ?>
    </div>
  </div>

  <?php
  }
}