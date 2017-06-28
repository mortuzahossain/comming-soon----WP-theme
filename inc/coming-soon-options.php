<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = "cs";

    $theme = wp_get_theme();
    $args = array(
        'opt_name'             => $opt_name,
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_type'            => 'menu',
        'allow_sub_menu'       => true,

        'menu_title'           => __( 'CS Options', 'redux-framework-demo' ),
        'page_title'           => __( 'CS Options', 'redux-framework-demo' ),
        'dev_mode'             => false,
        'admin_bar_priority'   => 40,
        'page_icon'            => 'icon-themes',
        'menu_icon'            => '',
        'page_priority'        => 60,
        
        'google_api_key'       => '',
        'google_update_weekly' => false,
        'async_typography'     => true,
        'admin_bar'            => true,
        'admin_bar_icon'       => 'dashicons-portfolio',
        'global_variable'      => '',
        'update_notice'        => true,
        'customizer'           => true,
        'page_parent'          => 'themes.php',
        'page_permissions'     => 'manage_options',
        'last_tab'             => '',
        'page_slug'            => '_options',
        'save_defaults'        => true,
        'default_show'         => false,
        'default_mark'         => '',
        'show_import_export'   => true,
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        'output_tag'           => true,
        'database'             => '',
        'use_cdn'              => true,

        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );


    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );

    Redux::setArgs( $opt_name, $args );


    // For Logo Area
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Image Upload', 'redux-framework-demo' ),
        'id'               => 'logo',
        'icon'             => 'el el-picture',
        'fields'           => array(
            array(
                'id'       => 'logo-img',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Logo Upload', 'redux-framework-demo'),
                'default'  => array(
                    'url'=> get_template_directory_uri().'/images/logo.png',
                ),
            ),
            array(
                'id'       => 'back-img',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Background Upload', 'redux-framework-demo'),
                'default'  => array(
                    'url'  =>get_template_directory_uri().'/images/bg-image.jpg',
                ),
            )
        )
    ) );
    // Heading Area
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Heading Text', 'redux-framework-demo' ),
        'id'               => 'heading',
        'icon'             => 'el el-align-left',
        'fields'           => array(
            array(
                'id'        => 'heading_text',
                'type'      => 'text',
                'title'     => __( 'Heading Text', 'redux-framework-demo' ),
                'default'   => 'Comming soon!'
            ),
            array(
                'id'        => 'sub_heading_text',
                'type'      => 'text',
                'title'     => __( 'Sub Heading Text', 'redux-framework-demo' ),
                'default'   => 'Be ready, there is just:'
            )
        )
    ) );
    // For Lunch Date
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Launch Time', 'redux-framework-demo' ),
        'id'               => 'lunch',
        'icon'             => 'el el-calendar',
        'fields'           => array(
            array(
                'id'       => 'lunch_datepicker',
                'type'     => 'date',
                'title'    => __( 'Launch Date', 'redux-framework-demo' ),
            ),
            array(
                'id'            => 'lunch_houre',
                'type'          => 'slider',
                'title'         => __( 'Launch Houre', 'redux-framework-demo' ),
                'default'       => 15,
                'min'           => 1,
                'step'          => 1,
                'max'           => 24,
                'display_value' => 'text'
            ),
            array(
                'id'            => 'lunch_minute',
                'type'          => 'slider',
                'title'         => __( 'Launch Minute', 'redux-framework-demo' ),
                'default'       => 00,
                'min'           => 1,
                'step'          => 1,
                'max'           => 59,
                'display_value' => 'text'
            ),

        ),
    ) );

    // Subscription
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Subscribe', 'redux-framework-demo' ),
        'id'               => 'sub',
        'icon'             => 'el el-bell',
        'fields'           => array(
            array(
                'id'        => 'subscribe_link',
                'type'      => 'textarea',
                'title'    => __( 'MailChimp', 'redux-framework-demo' ),
                'desc'     => 'Paste mailchimp form action link(like in the top)',
                'default'   => 'http://facebook.us16.list-manage.com/subscribe/post?u=3c6471708ddac41170d516748&amp;id=0e879c373c',
                'subtitle'  => 'If you need some help to do this then please contact with <a href="http://www.facebook.com/mdmortuza.hossain/">me</a>.',
            ),
        ),
    ) );



    // Social Logo
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Social Logo', 'redux-framework-demo' ),
        'id'               => 'social',
        'icon'             => 'el el-thumbs-up',
        'fields'           => array(
            array(
                'id'          => 'contact_social',
                'type'        => 'slides',
                'title'       => __('Social Links', 'redux-framework-demo'),
                'subtitle'      => '
                Available Social Icon Name:
                <ol>
                    <li>facebook</li>
                    <li>twitter-1</li>
                    <li>behance</li>
                    <li>dribbble-1</li>
                    <li>pinterest-circled</li>
                    <li>gplus-1</li>
                </ol>
                ',
                'placeholder' => array(
                    'title'           => __('Icon Name', 'redux-framework-demo'),
                    'url'           => __('URL', 'redux-framework-demo'),
                ),
                'show' => array(
                    'title' => true,
                    'url' => true,
                ),
            ),
        )
    ) );

    
    // Footer Text
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Footer Text', 'redux-framework-demo' ),
        'id'               => 'footer',
        'icon'             => 'el el-align-left',
        'fields'           => array(
            array(
                'id'       => 'show_footer',
                'type'     => 'switch',
                'title'    => 'Show Footer',
                'default'  => true
            ),
            array(
                'id'        => 'footer_text',
                'type'      => 'textarea',
                'title'     => __( 'Footer Text', 'redux-framework-demo' ),
                'default'   => 'Themplate by <a href="http://graphberry.com?ref=coming-soon" target="_blank">GraphBerry.com</a>',
                'required' => array( 'show_footer', '=', true )
            ),
        )
    ) );