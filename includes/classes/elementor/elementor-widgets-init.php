<?php


class Widget_Loader{

  private static $_instance = null;

  public static function instance()
  {
    if (is_null(self::$_instance)) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }


  private function include_widgets_files(){
    require_once(__DIR__ . '/title.php');
    require_once(__DIR__ . '/banner.php');
    require_once(__DIR__ . '/button.php');
    require_once(__DIR__ . '/card.php');
    require_once(__DIR__ . '/iconbox.php');
    require_once(__DIR__ . '/offer-card.php');
  }

  public function register_widgets(){

    $this->include_widgets_files();

    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Widgets\SectionHeading());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Widgets\SaimonBanner());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Widgets\SaimonButton());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Widgets\SaimonCard());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Widgets\SaimonIconBox());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Widgets\OfferCard());

  }

  public function __construct(){
    add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets'], 99);
  }
}

// Instantiate Plugin Class
Widget_Loader::instance();