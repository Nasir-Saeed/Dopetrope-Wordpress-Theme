<?php
/**
 * Customizer Kirki Config
 */

Kirki::add_config(
    'dopetropewp_option',
    array(
        'capability' => 'edit_theme_options',
        'option_type' => 'theme_mod',
    )
);


Kirki::add_panel(
    'header_settings',
    array(
        'priority' => 10,
        'title' => esc_html__('Header Settings', 'kirki'),
        'description' => esc_html__('Manage Header & Menu Layout', 'kirki'),
    )
);

Kirki::add_section(
    'header_layout_settings',
    array(
        'priority' => 160,
        'title' => esc_html__('Header Layout', 'kirki'),
        'description' => esc_html__('Manage Header Layout Settings', 'kirki'),
        'panel' => 'header_settings',
    )
);
Kirki::add_section(
    'menu_settings',
    array(
        'priority' => 160,
        'title' => esc_html__('Header Menu Settings', 'kirki'),
        'description' => esc_html__('Manage Menu Layout Settings', 'kirki'),
        'panel' => 'header_settings',
    )
);

Kirki::add_section(
    'typography_settings',
    array(
        'priority' => 10,
        'title' => esc_html__('Typography Settings', 'kirki'),
        'description' => esc_html__('Manage Menu Layout Settings', 'kirki'),
        'icon' => 'dashicons-editor-spellcheck',
    )
);

Kirki::add_section(
    'homepage_banner_settings',
    array(
        'priority' => 10,
        'title' => esc_html__('Homepage Layout', 'kirki'),
        'description' => esc_html__('Manage Homepage Layout Settings', 'kirki'),
        'icon' => 'dashicons-layout',

    )
);


Kirki::add_field('dopetropewp_option', [
    'type' => 'background',
    'settings' => 'background_setting',
    'label' => esc_html__('Header Background', 'kirki'),
    'description' => esc_html__('Background conrols are pretty complex - but extremely useful if properly used.', 'kirki'),
    'section' => 'header_layout_settings',
    'default' => [
        'background-color' => 'rgba(255,255,255,1)',
        'background-image' => '',
        'background-repeat' => 'repeat',
        'background-position' => 'center center',
        'background-size' => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport' => 'auto',
    'output' => [
        [
            'element' => '#header',
        ],
    ],
]);

Kirki::add_field('dopetropewp_option', [
    'type' => 'background',
    'settings' => 'menu_background_setting',
    'label' => esc_html__('Menu Background', 'kirki'),
    'description' => esc_html__('Background conrols are pretty complex - but extremely useful if properly used.', 'kirki'),
    'section' => 'menu_settings',
    'default' => [
        'background-color' => '#222',
        'background-image' => '',
        'background-repeat' => 'repeat',
        'background-position' => 'center center',
        'background-size' => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport' => 'auto',
    'output' => [
        [
            'element' => '#nav',
        ],
    ],
]);
Kirki::add_field('dopetropewp_option', [
    'type' => 'background',
    'settings' => 'menu_active_background_setting',
    'label' => esc_html__('Menu Active & Hover', 'kirki'),
    'description' => esc_html__('Background conrols are pretty complex - but extremely useful if properly used.', 'kirki'),
    'section' => 'menu_settings',
    'default' => [
        'background-color' => '#d52349',
    ],
    'transport' => 'auto',
    'output' => [
        [
            'element' => '#nav>ul>li.active>a , #nav > ul > li.current-menu-item > a',
        ],
    ],
]);

Kirki::add_field('dopetropewp_option', [
    'type' => 'typography',
    'settings' => 'heading_settings',
    'label' => esc_html__('Headings', 'kirki'),
    'description' => esc_html__('Background conrols are pretty complex - but extremely useful if properly used.', 'kirki'),
    'section' => 'typography_settings',
    'default' => [
        'font-family' => 'Roboto',
        'variant' => 'regular',
        'font-size' => '14px',
        'line-height' => '1.5',
        'letter-spacing' => '0',
        'color' => '#333333',
        'text-transform' => 'none',
        'text-align' => 'left',
    ],
    'choices' => [
        'fonts' => [
            'google' => ['popularity', 50],
            'standard' => [
                'Georgia,Times,"Times New Roman",serif',
                'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif'
            ]
        ]
    ],
    'priority' => 10,
    'transport' => 'auto',
    'output' => [
        [
            'element' => 'h1',
        ],
    ],
]);
Kirki::add_field('dopetropewp_option', [
    'type' => 'switch',
    'settings' => 'toggle_home_banner_settings',
    'label' => esc_html__('Home Page Banner Setting', 'kirki'),
    'section' => 'homepage_banner_settings',
    'default' => '1',
    'priority' => 10,
    'choices' => [
        [
            'on' => esc_html__('Enable', 'kirki'),
            'off' => esc_html__('Disable', 'kirki'),
        ],
    ],
]);
Kirki::add_field('dopetropewp_option', [
    'type' => 'switch',
    'settings' => 'toggle_home_Card_settings',
    'label' => esc_html__('Home Page Card Setting', 'kirki'),
    'section' => 'homepage_banner_settings',
    'default' => '1',
    'priority' => 10,
    'choices' => [
        [
            'on' => esc_html__('Enable', 'kirki'),
            'off' => esc_html__('Disable', 'kirki'),
        ],
    ],
]);
Kirki::add_field('dopetropewp_option', [
    'type' => 'text',
    'settings' => 'homepage_banner_heading_settings',
    'label' => esc_html__('Home Page Banner Heading Setting', 'kirki'),
    'section' => 'homepage_banner_settings',
    'default' => esc_html('Howdy. This is Dopetrope.', 'kirki'),
    'priority' => 10,
]);
Kirki::add_field('dopetropewp_option', [
    'type' => 'text',
    'settings' => 'homepage_banner_para_settings',
    'label' => esc_html__('Home Page Banner Paragraph Setting', 'kirki'),
    'section' => 'homepage_banner_settings',
    'default' => esc_html('A responsive template by HTML5 UP', 'kirki'),
    'priority' => 10,
]);
Kirki::add_field('dopetropewp_option', [
    'type' => 'dashicons',
    'settings' => 'intro_box_icon',
    'label' => esc_html__('Box 1 icon', 'kirki'),
    'section' => 'homepage_banner_settings',
    'default' => 'admin-generic',
    'priority' => 10,
]);