<?php
namespace Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class SectionHeading extends Widget_Base{

  public function get_name(){
    return 'saimon-title';
  }

  public function get_title(){
    return 'Saimon Title';
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
      'label' => 'Heading Info',
      ]
    );    

    $this->add_control(
      'section_title',
      [
        'label' => 'Title',
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'Our Services'
      ]
    );

    $this->add_control(
      'descrition',
      [
        'label' => 'Description',
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => 'What We Offer'
      ]
    );

    $this->add_control(
      'show_separator',
      [
        'label' => __( 'Show Separator', 'dfolio' ),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __( 'Show', 'dfolio' ),
        'label_off' => __( 'Hide', 'dfolio' ),
        'return_value' => 'yes',
        'default' => 'yes',
      ]
    );

    $this->end_controls_section();
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
  <div class="site-head text-center">
    <?php if($settings['section_title']){ ?>
      <h2 class="text-uppercase"><?php echo $settings['section_title']; ?></h2>
    <?php } ?>

    <?php if('yes' === $settings['show_separator']){ ?>
      <div class="separator bg-primary m-auto"></div>
    <?php } ?>

    <?php if($settings['descrition']){ ?>
      <p class="text-dark mt-3"><?php echo $settings['descrition']; ?></p>
    <?php } ?>

    <?php if($settings['seperator_img']['url'] != $default_img){ ?>
      <img src="<?php echo $settings['seperator_img']['url'];?>" alt="<?php esc_attr__('heading-image','taqwa'); ?>">
    <?php } ?>
  </div>

  <?php
  }
}