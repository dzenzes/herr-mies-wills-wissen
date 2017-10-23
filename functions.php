<?php

function hmww_enqueue_styles()
{
    //wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css?v=160717-5');
    wp_enqueue_style('main', get_template_directory_uri() . '/dist/styles.css');
}

function hmww_enqueue_scripts()
{
    /*
    $dependencies = array('jquery');
    */
    wp_enqueue_script('app', get_template_directory_uri() . '/dist/app.js');
}

function hmww_wp_setup()
{
    add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts', 'hmww_enqueue_styles');
add_action('wp_enqueue_scripts', 'hmww_enqueue_scripts');
add_action('after_setup_theme', 'hmww_wp_setup');
add_theme_support( 'post-thumbnails' );