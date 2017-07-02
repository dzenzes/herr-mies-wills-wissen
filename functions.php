<?php

function hmww_enqueue_styles() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css?v=2' );
}

function hmww_enqueue_scripts() {
	/*
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
    */
}

function hmww_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'wp_enqueue_scripts', 'hmww_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'hmww_enqueue_scripts' );
add_action( 'after_setup_theme', 'hmww_wp_setup' );