<?php

/*
 * Theme Function File
 */

// Supports Links
function dopetropewp_theme_setup()
{

    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size('home-featured', 680, 400, array('center', 'center'));
    add_image_size('single-post', 580, 272, array('center', 'center'));

    add_theme_support('automatic-feed-links');

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'dopetropewp')
        )
    );
}
;
add_action('after_setup_theme', 'dopetropewp_theme_setup');


// Widgets Areas
function dopetropewp_widgets_init()
{
    register_sidebar(
        array(
            'name' => __('Primary Sidebar', 'dopetropewp'),
            'id' => 'main-sidebar',
            'description' => 'Main Sidebar on Right Side',
            'before_widget' => '<section id="%1$s" class="box %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<header><h3 class="widget-title">',
            'after_title' => '</h3></header>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Home Banner', 'dopetropewp'),
            'id' => 'home-banner',
            'description' => 'Home Banner Image Area',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<header><h2 class="widget-title">',
            'after_title' => '</h2></header>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Home Services', 'dopetropewp'),
            'id' => 'home-services',
            'description' => 'Home Services Area Section',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<header><h2 class="widget-title">',
            'after_title' => '</h2></header>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Footer Widget 1', 'dopetropewp'),
            'id' => 'footer-1',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<header><h2 class="widget-title">',
            'after_title' => '</h2></header>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Footer Widget 2', 'dopetropewp'),
            'id' => 'footer-2',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<header><h2 class="widget-title">',
            'after_title' => '</h2></header>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Footer Widget 3', 'dopetropewp'),
            'id' => 'footer-3',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<header><h2 class="widget-title">',
            'after_title' => '</h2></header>',
        )
    );
}
add_action('widgets_init', 'dopetropewp_widgets_init');


// Style Script Linking
function dopetropewp_scripts()
{
    wp_enqueue_style("style", get_stylesheet_uri());
    wp_enqueue_style('dashicons');
    wp_enqueue_script("dopetropewp-browser-min", get_template_directory_uri() . '/assets/js/browser.min.js');
    wp_enqueue_script("dopetropewp-breakpoints-min", get_template_directory_uri() . '/assets/js/breakpoints.min.js');
    wp_enqueue_script("dopetropewp-util", get_template_directory_uri() . '/assets/js/util.js');
    wp_enqueue_script("dopetropewp-main", get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('jquery');
}
add_action("wp_enqueue_scripts", "dopetropewp_scripts");

// Porfolio Section
require get_template_directory() . '/inc/portfolio.php';


// Plugin Require
// require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';
// require get_template_directory().'/inc/install-plugins.php';


// kirki Embedded
require get_template_directory() . '/inc/plugins/kirki/kirki.php';
require get_template_directory() . '/inc/kirki-config.php';
