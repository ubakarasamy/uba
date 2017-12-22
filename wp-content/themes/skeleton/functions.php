<?php

function skeleton_script_enqueue() {
	
	//styles
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/cstyle.css', array(), '1.1.0', 'all');
	wp_enqueue_style('bootstrapstyle', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.7.0', 'all');

	//scripts
	wp_enqueue_script('customscript', get_template_directory_uri() . '/js/cscript.js', array(), '1.1.1', 'all');
	wp_enqueue_script('jqueryscript', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '3.2.1', 'all');
	wp_enqueue_script('bootstrapscript', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.7', 'all');
	

}

add_action( 'wp_enqueue_scripts', 'skeleton_script_enqueue');

function skeleton_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'primary header navigation');

	register_nav_menu('secondary', 'secondary footer navigation');
}

add_action('init', 'skeleton_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');



















?>