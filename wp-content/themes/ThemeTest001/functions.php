<?php 

function themeTest001_script_enqueue(){

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/ThemeTest001.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/ThemeTest001.js', array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'themeTest001_script_enqueue' );

function awesome_theme_setup(){

	add_theme_support('menus');	

	register_nav_menu('primary', 'Primary Header Navigation');

	register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init','awesome_theme_setup');

