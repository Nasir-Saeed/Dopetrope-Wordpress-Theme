<?php
/**
 * Porfolio Section
 */

function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Portfolios', 'Post Type General Name', 'dopetropewp' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'dopetropewp' ),
		'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'dopetropewp' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'dopetropewp' ),
		'archives' => __( 'Portfolio Archives', 'dopetropewp' ),
		'attributes' => __( 'Portfolio Attributes', 'dopetropewp' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'dopetropewp' ),
		'all_items' => __( 'All Portfolios', 'dopetropewp' ),
		'add_new_item' => __( 'Add New Portfolio', 'dopetropewp' ),
		'add_new' => __( 'Add New', 'dopetropewp' ),
		'new_item' => __( 'New Portfolio', 'dopetropewp' ),
		'edit_item' => __( 'Edit Portfolio', 'dopetropewp' ),
		'update_item' => __( 'Update Portfolio', 'dopetropewp' ),
		'view_item' => __( 'View Portfolio', 'dopetropewp' ),
		'view_items' => __( 'View Portfolios', 'dopetropewp' ),
		'search_items' => __( 'Search Portfolio', 'dopetropewp' ),
		'not_found' => __( 'Not found', 'dopetropewp' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'dopetropewp' ),
		'featured_image' => __( 'Featured Image', 'dopetropewp' ),
		'set_featured_image' => __( 'Set featured image', 'dopetropewp' ),
		'remove_featured_image' => __( 'Remove featured image', 'dopetropewp' ),
		'use_featured_image' => __( 'Use as featured image', 'dopetropewp' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'dopetropewp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'dopetropewp' ),
		'items_list' => __( 'Portfolios list', 'dopetropewp' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'dopetropewp' ),
		'filter_items_list' => __( 'Filter Portfolios list', 'dopetropewp' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'dopetropewp' ),
		'description' => __( 'Portfolio Section', 'dopetropewp' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-generic',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );