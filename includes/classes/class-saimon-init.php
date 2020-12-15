<?php

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}
class Saimon_Init {
	public static $instance = null;

	public function __construct(){
		add_action( 'after_setup_theme', [ $this, 'saimon_theme_supports' ], 10 );
		add_action( 'after_setup_theme', [ $this, 'saimon_theme_navigations' ], 10 );
		add_action( 'admin_menu', [ $this, 'saimon_admin_menu_register' ], 10 );
		add_action( 'widgets_init', [ $this, 'saimon_sidebars'] );
		add_action( 'widgets_init', [ $this, 'saimon_widgets_register'] );
		add_action( 'wp_enqueue_scripts', [ $this, 'saimon_theme_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'saimon_inline_styles' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'saimon_admin_styles' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'saimon_admin_scripts' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'saimon_theme_scripts' ] );
	}
	public function saimon_theme_supports(){
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support('custom-header');
		add_theme_support('woocommerce');
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
		load_theme_textdomain('saimon', THEME_URL . '/lang');
	}

	public function saimon_theme_navigations(){
		$locations = array(
            'primary' => __( 'Primary Menu', 'saimon' ),
            'footer'  => __( 'Footer Menu', 'saimon' ),
        );
		register_nav_menus( $locations );
	}

	public function saimon_theme_styles(){
		wp_enqueue_style('bootstrap', ASSET_URL . '/css/bootstrap.min.css', array(), null, 'all');
		wp_enqueue_style('fontawesome', ASSET_URL . '/css/fontawesome.min.css', array('bootstrap'), null, 'all');
		wp_enqueue_style('default', ASSET_URL . '/css/default.css', array('fontawesome'), null, 'all');
		wp_enqueue_style('theme', ASSET_URL . '/css/theme.css', array('default'), null, 'all');
		wp_enqueue_style('custom', get_stylesheet_uri(), array('theme'), null, 'all');
	}

	public function saimon_theme_scripts(){
		wp_enqueue_script('bootstrap', ASSET_URL . '/js/bootstrap.min.js', array('jquery'), null, true);
		wp_enqueue_script('custom', ASSET_URL . '/js/custom.js', array('bootstrap'), null, true);
	}

	public function saimon_admin_styles(){
		wp_enqueue_style('saimon-admin', ASSET_URL . '/css/saimon-admin.css', array(), null, 'all');
	}
	public function saimon_admin_scripts(){
		wp_enqueue_script('saimon-admin', ASSET_URL . '/js/admin.js', array('jquery', 'jquery-migrate'), null, true);
	}
	public function saimon_inline_styles() {
		$banner_bg = get_header_image();
        $inline_css = ".banner-bg{ background: ('" . $banner_bg . "') !important;}";
        
        wp_add_inline_style( 'default', $inline_css );
	}

	// Register Sidebars
	public function saimon_sidebars(){

		$args = array(
			'id'            => 'right-sidebar',
			'name'          => __( 'Right Sidebar', 'saimon' ),
			'description'   => __( 'This widgets will be shown on the right side.', 'saimon' ),
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
		);
		register_sidebar( $args );

		$args = array(
			'id'            => 'left-sidebar',
			'name'          => __( 'Left Sidebar', 'saimon' ),
			'description'   => __( 'This widgets will be shown on the left side.', 'saimon' ),
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
		);
		register_sidebar( $args );

		$args = array(
			'id'            => 'footer',
			'name'          => __( 'Footer', 'saimon' ),
			'description'   => __( 'This is widgets will be shown on the footer', 'saimon' ),
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="col-md-3"><div class="widget footer-widget">',
			'after_widget'  => '</div></div>',
		);
		register_sidebar( $args );
	}

	public function saimon_widgets_register(){
		register_widget('Saimon_Widget_About');
	}

	public function saimon_admin_menu_register() {
	    add_menu_page(
	        __( 'Saimon Options', 'saimon' ),
	        __( 'Saimon', 'saimon' ),
	        'manage_options',
	        'saimon',
	        [ $this, 'saimon_admin_menu_elements'],
	        'dashicons-podio',
	        2
	    );
	}

	public function saimon_admin_menu_elements(){
		get_template_part( 'admin/admin' );
	}

}
$saiman_init = new Saimon_Init();