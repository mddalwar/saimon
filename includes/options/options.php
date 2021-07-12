<?php
/**
 * This file will be introduce saimon theme options
 */

if ( ! class_exists( 'Redux' ) ) {
    return;
}

// Theme option data is stored in this name.
$opt_name = "saimon";

// This will set option variable name
$opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

/**
 * ---> Set Core Arguments
 * */

$theme = wp_get_theme();

$args = array(    
    'opt_name'             => $opt_name,
    'display_name'         => $theme->get( 'Name' ),
    'display_version'      => $theme->get( 'Version' ),
    'menu_type'            => 'menu',
    'allow_sub_menu'       => true,
    'menu_title'           => __( 'Saimon', 'saimon' ),
    'page_title'           => __( 'Saimon Options', 'saimon' ),
    'google_api_key'       => '',
    'google_update_weekly' => false,
    'async_typography'     => false,
    'admin_bar'            => true,
    'admin_bar_icon'       => 'dashicons-podio',
    'admin_bar_priority'   => 50,
    'global_variable'      => '',
    'dev_mode'             => false,
    'update_notice'        => false,
    'customizer'           => true,
    'page_priority'        => 2,
    'page_parent'          => 'themes.php',
    'page_permissions'     => 'manage_options',
    'menu_icon'            => 'dashicons-podio',
    'last_tab'             => '1',
    'page_icon'            => 'icon-themes',
    'page_slug'            => 'saimon',
    'save_defaults'        => true,
    'default_show'         => false,
    'default_mark'         => '',
    'show_import_export'   => true,
    'transient_time'       => 60 * MINUTE_IN_SECONDS,
    'output'               => true,
    'output_tag'           => true,
    'footer_credit'     => 'These options provided by <a href="#">Saimon</a>',
    'database'             => '',
    'use_cdn'              => true,
);

Redux::setArgs( $opt_name, $args );

// General Option
Redux::setSection( $opt_name, array(
    'title'            => __( 'General', 'saimon' ),
    'id'               => 'basic',
    'desc'             => __( 'These are general settings!', 'saimon' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-home'
) );

Redux::setSection( $opt_name, array(
    'title'            => __( 'Logo', 'saimon' ),
    'id'               => 'logo',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'       => 'imglogo',
            'type'     => 'media',
            'title'    => __( 'Select Logo Image', 'saimon' ),
            'desc'     => __( 'This is the description field, again good for additional info.', 'saimon' ),
            'default'  => '1'// 1 = on | 0 = off
        ),
        array(
            'id'       => 'textlogo',
            'type'     => 'text',
            'title'    => __( 'Logo Text', 'saimon' ),
            'desc'     => __( 'Write a word for text logo', 'saimon' ),
            'default'   => 'Saimon.',
        ),
    )
) );

// Header Option
Redux::setSection( $opt_name, array(
    'title'            => __( 'Header', 'saimon' ),
    'id'               => 'saimon-header',
    'desc'             => __( 'These are options for theme header', 'saimon' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-credit-card'
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Main Navigation', 'saimon' ),
    'id'         => 'main-navigation',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'header_button_init',
            'type'     => 'switch',
            'title'    => __( 'Show Header Button', 'saimon' ),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'header_button_text',
            'type'     => 'text',
            'required' => array( 'header_button_init', '=', '1' ),
            'title'    => __( 'Button Text', 'saimon' ),
            'default'  => 'Button',
        ),
        array(
            'id'       => 'header_button_link',
            'type'     => 'text',
            'required' => array( 'header_button_init', '=', '1' ),
            'title'    => __( 'Button Link', 'saimon' ),
            'default'  => '#',
        ),
        array(
            'id'       => 'header_button_target',
            'type'     => 'button_set',
            'required' => array( 'header_button_init', '=', '1' ),
            'title'    => __( 'Button Target', 'saimon' ),
            'options'  => array(
                '1' => 'Self Tab',
                '2' => 'Blank Tab'
            ),
            'default'  => '1'
        ),
        array(
            'id'       => 'header_nav_position',
            'type'     => 'button_set',
            'title'    => __( 'Main Navigation Position', 'saimon' ),
            'options'  => array(
                '1' => 'Left',
                '2' => 'Right'
            ),
            'default'  => '1'
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Cart', 'saimon' ),
    'id'         => 'header-cart',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'header_cart_init',
            'type'     => 'switch',
            'title'    => __( 'Show Cart Icon', 'saimon' ),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'header_cart_text',
            'type'     => 'text',
            'required' => array( 'header_cart_init', '=', '1' ),
            'title'    => __( 'Font Icon Class', 'saimon' ),
        ),
        array(
            'id'       => 'header_cart_link',
            'type'     => 'text',
            'required' => array( 'header_cart_init', '=', '1' ),
            'title'    => __( 'Custom Cart URL', 'saimon' ),
        ),
        array(
            'id'       => 'header_cart_target',
            'type'     => 'button_set',
            'required' => array( 'header_cart_init', '=', '1' ),
            'title'    => __( 'Cart Link Target', 'saimon' ),
            'options'  => array(
                '1' => 'Self Tab',
                '2' => 'Blank Tab'
            ),
            'default'  => '1'
        ),
        array(
            'id'       => 'header_cart_position',
            'type'     => 'button_set',
            'required' => array( 'header_cart_init', '=', '1' ),
            'title'    => __( 'Cart Icon Position', 'saimon' ),
            'options'  => array(
                '1' => 'Before Button',
                '2' => 'After Button'
            ),
            'default'  => '1'
        ),
    )
) );

// Post Type Option
Redux::setSection( $opt_name, array(
    'title'            => __( 'Post Types', 'saimon' ),
    'id'               => 'post-types',
    'desc'             => __( 'These are options for custom post types', 'saimon' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-th'
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Service', 'saimon' ),
    'id'         => 'post_type_services',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'services-init',
            'type'     => 'switch',
            'title'    => __( 'Service Post Type', 'saimon' ),
            'default'  => 0,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'service_type_init',
            'type'     => 'switch',
            'required' => array( 'services-init', '=', '1' ),
            'title'    => __( 'Service Type', 'saimon' ),
            'default'  => false,
        ),
        array(
            'id'       => 'service_thumbnail_init',
            'type'     => 'switch',
            'required' => array( 'services-init', '=', '1' ),
            'title'    => __( 'Service Thumbnail', 'saimon' ),
            'default'  => false,
        ),
        array(
            'id'       => 'service_thumbnail_placeholder',
            'type'     => 'media',
            'required' => array( 'service_thumbnail_init', '=', '1' ),
            'title'    => __( 'Thumbnail Placeholder', 'saimon' ),
        ),
        array(
            'id'       => 'service_button_init',
            'type'     => 'switch',
            'required' => array( 'services-init', '=', '1' ),
            'title'    => __( 'Service Button', 'saimon' ),
            'default'  => false,
        ),
        array(
            'id'       => 'service_button_text',
            'type'     => 'text',
            'required' => array( 'service_button_init', '=', '1' ),
            'title'    => __( 'Button Text', 'saimon' ),
            'default'  => 'Read More',
        ),
        array(
            'id'       => 'service_button_url',
            'type'     => 'text',
            'required' => array( 'service_button_init', '=', '1' ),
            'title'    => __( 'Button URL', 'saimon' ),
            'default'  => '#',
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Portfolio', 'saimon' ),
    'id'         => 'post_type_portfolio',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'portfolio-init',
            'type'     => 'switch',
            'title'    => __( 'Portfolio Post Type', 'saimon' ),
            'default'  => 0,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'portfolio_type_init',
            'type'     => 'switch',
            'required' => array( 'portfolio-init', '=', '1' ),
            'title'    => __( 'Portfolio Type', 'saimon' ),
            'default'  => false,
        ),
        array(
            'id'       => 'portfolio_thumbnail_init',
            'type'     => 'switch',
            'required' => array( 'portfolio-init', '=', '1' ),
            'title'    => __( 'Portfolio Thumbnail', 'saimon' ),
            'default'  => false,
        ),
        array(
            'id'       => 'portfolio_thumbnail_placeholder',
            'type'     => 'media',
            'required' => array( 'portfolio_thumbnail_init', '=', '1' ),
            'title'    => __( 'Thumbnail Placeholder', 'saimon' ),
        ),
        array(
            'id'       => 'portfolio_button_init',
            'type'     => 'switch',
            'required' => array( 'portfolio-init', '=', '1' ),
            'title'    => __( 'Portfolio Button', 'saimon' ),
            'default'  => false,
        ),
        array(
            'id'       => 'portfolio_button_text',
            'type'     => 'text',
            'required' => array( 'portfolio_button_init', '=', '1' ),
            'title'    => __( 'Button Text', 'saimon' ),
            'default'  => 'Learn More',
        ),
        array(
            'id'       => 'portfolio_button_url',
            'type'     => 'text',
            'required' => array( 'portfolio_button_init', '=', '1' ),
            'title'    => __( 'Button URL', 'saimon' ),
            'default'  => '#',
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Testimonial', 'saimon' ),
    'id'         => 'post_type_testimonial',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'testimonial-init',
            'type'     => 'switch',
            'title'    => __( 'Testimonial Post Type', 'saimon' ),
            'default'  => 0,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'testimonial_author_thumbnail_init',
            'type'     => 'switch',
            'required' => array( 'testimonial-init', '=', '1' ),
            'title'    => __( 'Client Thumbnail', 'saimon' ),
            'default'  => false,
        ),
        array(
            'id'       => 'testimonial_author_thumbnail_placeholder',
            'type'     => 'media',
            'required' => array( 'testimonial_author_thumbnail_init', '=', '1' ),
            'title'    => __( 'Thumbnail Placeholder', 'saimon' ),
        ),
    )
) );

// SMTP Settings Options
Redux::setSection( $opt_name, array(
    'title'      => __( 'SMTP Settings', 'saimon' ),
    'id'         => 'saimon-smtp',
    'icon'       => 'el el-envelope',
    'fields'     => array(
        array(
            'id'            => 'saimon-smtp-type',
            'type'          => 'switch',
            'title'         => __( 'SMTP Type', 'saimon' ),
            'default'       => 0,
            'off'           => 'BuildIn',
            'on'            => 'Self',
        ),
        array(
            'id'            => 'saimon-smtp-host-type',
            'type'          => 'switch',
            'required'      => array( 'saimon-smtp-type', '=', '1' ),
            'title'         => __( 'SMTP Host Type', 'saimon' ),
            'default'       => 1,
            'on'            => 'Gmail',
            'off'           => 'Others',
        ),
        array(
            'id'            => 'saimon-smtp-host',
            'type'          => 'text',
            'required'      => array( 'saimon-smtp-host-type', '=', '0' ),
            'title'         => __( 'SMTP Host', 'saimon' ),
            'placeholder'   => __('host.domain.com', 'saimon'),
        ),
        array(
            'id'            => 'saimon-smtp-username',
            'type'          => 'text',
            'required'      => array( 'saimon-smtp-type', '=', '1' ),
            'title'         => __( 'Username', 'saimon' ),
            'placeholder'   => __('admin@domain.com', 'saimon'),
        ),
        array(
            'id'            => 'saimon-smtp-password',
            'type'          => 'text',
            'required'      => array( 'saimon-smtp-type', '=', '1' ),
            'title'         => __( 'Password', 'saimon' ),
            'placeholder'   => __('Email password', 'saimon'),
        ),
        array(
            'id'            => 'saimon-smtp-port',
            'type'          => 'text',
            'required'      => array( 'saimon-smtp-type', '=', '1' ),
            'title'         => __( 'SMTP Port', 'saimon' ),
            'placeholder'   => __('Enter SMTP Port', 'saimon'),
            'default'       => 587,
        ),            
        array(
            'id'            => 'saimon-smtp-from',
            'type'          => 'text',
            'required'      => array( 'saimon-smtp-type', '=', '1' ),
            'title'         => __( 'Email From', 'saimon' ),
            'placeholder'   => __('Enter From Email', 'saimon'),
            'default'       => 'info@domain.com',
        ),            
        array(
            'id'            => 'saimon-smtp-from-name',
            'type'          => 'text',
            'required'      => array( 'saimon-smtp-type', '=', '1' ),
            'title'         => __( 'From Name', 'saimon' ),
            'placeholder'   => __('Enter From Name', 'saimon'),
            'default'       => 'Saimon Theme',
        ),
        array(
            'id'            => 'saimon-smtp-authorization',
            'type'          => 'switch',
            'required'      => array( 'saimon-smtp-type', '=', '1' ),
            'title'         => __( 'SMTP Authorization', 'saimon' ),
            'default'       => 1,
            'on'            => 'True',
            'off'           => 'False',
        ), 
        array(
            'id'            => 'saimon-smtp-security',
            'type'          => 'switch',
            'required'      => array( 'saimon-smtp-type', '=', '1' ),
            'title'         => __( 'SMTP Security', 'saimon' ),
            'default'       => 1,
            'on'            => 'SSL',
            'off'           => 'TLS',
        ),
    )
) );

// Social Share Options
Redux::setSection( $opt_name, array(
    'title'      => __( 'Social Share', 'saimon' ),
    'id'         => 'saimon-social-share',
    'icon'       => 'el el-envelope',
    'fields'     => array(
        array(
            'id'            => 'social-share-init',
            'type'          => 'switch',
            'title'         => __( 'Show Share Options', 'saimon' ),
            'default'       => 1,
            'off'           => 'No',
            'on'            => 'Yes',
        ),
        array(
            'id'            => 'social-share-position',
            'type'          => 'switch',
            'title'         => __( 'Icons Position', 'saimon' ),
            'default'       => 1,
            'off'           => 'Right',
            'on'            => 'Left',
        ),
        array(
            'id'            => 'saimon-facebook-share',
            'type'          => 'switch',
            'required'      => array( 'social-share-init', '=', '1' ),
            'title'         => __( 'Facebook', 'saimon' ),
            'default'       => 1,
            'on'            => 'Yes',
            'off'           => 'No',
        ),
        array(
            'id'            => 'saimon-twitter-share',
            'type'          => 'switch',
            'required'      => array( 'social-share-init', '=', '1' ),
            'title'         => __( 'Twitter', 'saimon' ),
            'default'       => 1,
            'on'            => 'Yes',
            'off'           => 'No',
        ),
        array(
            'id'            => 'saimon-linkedin-share',
            'type'          => 'switch',
            'required'      => array( 'social-share-init', '=', '1' ),
            'title'         => __( 'Linkedin', 'saimon' ),
            'default'       => 1,
            'on'            => 'Yes',
            'off'           => 'No',
        ),
        array(
            'id'            => 'saimon-whatsapp-share',
            'type'          => 'switch',
            'required'      => array( 'social-share-init', '=', '1' ),
            'title'         => __( 'Whatsapp', 'saimon' ),
            'default'       => 1,
            'on'            => 'Yes',
            'off'           => 'No',
        ),
        array(
            'id'            => 'saimon-pinterest-share',
            'type'          => 'switch',
            'required'      => array( 'social-share-init', '=', '1' ),
            'title'         => __( 'Pinterest', 'saimon' ),
            'default'       => 1,
            'on'            => 'Yes',
            'off'           => 'No',
        ),
    )
) );

/*
 * <--- END SECTIONS
 */

