<?php
/**
 * Customizer Kirki Config
 */

Kirki::add_config(
    'dopetropewp_option',
    array(
        'capability' => 'edit_theme_option',
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