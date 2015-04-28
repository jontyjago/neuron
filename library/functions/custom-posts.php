<?php

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type
function add_methodology() { 
	// creating (registering) the custom type 
	register_post_type( 'methodology', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Methodologies', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Methodology', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Methodologies', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Methodology', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Methodologies', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Methodology', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Methodology', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Methodology', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example Methodology type', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the Methodology type menu */
			'rewrite'	=> array( 'slug' => 'methodology', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'methodology', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail')
		) /* end of options */
	); /* end of register Methodology */	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'add_methodology');

// let's create the function for the custom type
function add_research() { 
	// creating (registering) the custom type 
	register_post_type( 'research', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Research', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Research', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Research', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Research', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Research', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Research', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Research', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Research', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example Research type', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the Research type menu */
			'rewrite'	=> array( 'slug' => 'research', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'research', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail')
		) /* end of options */
	); /* end of register research */	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'add_research');

?>
